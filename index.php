

{
  "manifest_version": 3,
  "name": "My Extension",
  "version": "1.0",
  "background": {
    "service_worker": "background.js"
  },
  "permissions": [
    "contextMenus",
    "clipboardWrite"
  ]
}


<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Define the MySQL database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve the copied text from the request body
$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);
$text = $data["text"];

// Escape the text for use in a MySQL query
$text = $conn->real_escape_string($text);

// Insert the text into the database
$sql = "INSERT INTO copied_texts (text) VALUES ('$text')";
if ($conn->query($sql) === TRUE) {
  $response = array("success" => true);
} else {
  $response = array("success" => false);
}

// Close the database connection
$conn->close();

// Send the response back to the client
header("Content-Type: application/json");
echo json_encode($response);

?>



<script>


chrome.contextMenus.create({
  title: "Copy Highlighted Text",
  contexts: ["selection"],
  onclick: function(info, tab) {
    var text = info.selectionText;

    // Send the copied text to the server
    saveTextToDatabase(text, function(response) {
      if (response.success) {
        showNotification("Text Copied and Saved", "Highlighted text copied to clipboard and saved to the database.");
      } else {
        showNotification("Error", "Failed to save the text to the database.");
      }
    });
    
    // Write the text to the clipboard
    navigator.clipboard.writeText(text);

    // Show a notification to indicate success or failure
    function showNotification(title, message) {
      chrome.notifications.create({
        type: "basic",
        title: title,
        message: message
      });
    }
  }
});

// Function to send the copied text to the server
function saveTextToDatabase(text, callback) {
  // Make an AJAX request to your server
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "https://example.com/save-text", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      var response = JSON.parse(xhr.responseText);
      callback(response);
    }
  };
  
  // Send the text as JSON in the request body
  var data = JSON.stringify({ text: text });
  xhr.send(data);
}

</script>
