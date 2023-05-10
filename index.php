

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


// Define the context menu item
chrome.contextMenus.create({
  title: "Copy selected text",
  contexts: ["selection"],
  onclick: function(info) {
    // Get the selected text
    var selectedText = info.selectionText;
    
    // Send a POST request to the server to save the text to the database
    fetch("https://example.com/save-text", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        text: selectedText
      })
    }).then(function(response) {
      console.log("Text copied and saved successfully!");
    }).catch(function(error) {
      console.error("Error saving text: " + error);
    });
  }
});

// Function to check for new links on the page every 30 seconds
function checkForNewLinks() {
  // Get the current tab
  chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
    var currentTab = tabs[0];
    
    // Get the current URL of the tab
    var currentUrl = currentTab.url;
    
    // Send a GET request to the server to check for new links
    fetch("https://example.com/check-links?url=" + encodeURIComponent(currentUrl))
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {
        // Handle the response data
        if (data.newLinks.length > 0) {
          console.log("New links found on the page!");
          console.log(data.newLinks);
        }
      })
      .catch(function(error) {
        console.error("Error checking for new links: " + error);
      });
  });
}

// Schedule the checkForNewLinks function to run every 30 seconds
setInterval(checkForNewLinks, 30000);


// Function to check for videos on the current tab
function checkForVideos() {
  // Get the current tab
  chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
    var currentTab = tabs[0];

    // Check if the tab has any video elements
    chrome.tabs.executeScript(currentTab.id, {code: 'document.getElementsByTagName("video").length;'}, function(results) {
      if (results && results[0] > 0) {
        console.log("Videos found on the page!");
      }
    });
  });
}

// Schedule the checkForVideos function to run every 1 second
setInterval(checkForVideos, 1000);

// Define the context menu item
chrome.contextMenus.create({
  title: "Copy selected text",
  contexts: ["selection"],
  onclick: function(info) {
    // Get the selected text
    var selectedText = info.selectionText;
    
    // Send a POST request to the server to save the text to the database
    fetch("https://example.com/save-text", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        text: selectedText
      })
    }).then(function(response) {
      console.log("Text copied and saved successfully!");
    }).catch(function(error) {
      console.error("Error saving text: " + error);
    });
  }
});

// Function to open the popup window
function openPopup() {
  // Create a new window
  chrome.windows.create({
    url: "popup.html",
    type: "popup",
    width: 400,
    height: 400
  });
}

// Add a listener for the browser action
chrome.browserAction.onClicked.addListener(openPopup);



// Function to check for videos on the current tab
function checkForVideos() {
  // Get the current tab
  chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
    var currentTab = tabs[0];

    // Check if the tab has any video elements
    chrome.tabs.executeScript(currentTab.id, {code: 'document.getElementsByTagName("video").length;'}, function(results) {
      if (results && results[0] > 0) {
        console.log("Videos found on the page!");
      }
    });
  });
}

// Schedule the checkForVideos function to run every 1 second
setInterval(checkForVideos, 1000);

// Define the context menu item
chrome.contextMenus.create({
  title: "Copy selected text",
  contexts: ["selection"],
  onclick: function(info) {
    // Get the selected text
    var selectedText = info.selectionText;
    
    // Send a POST request to the server to save the text to the database
    fetch("https://example.com/save-text", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        text: selectedText
      })
    }).then(function(response) {
      console.log("Text copied and saved successfully!");
    }).catch(function(error) {
      console.error("Error saving text: " + error);
    });
  }
});

// Function to check for new links on the current tab
function checkForNewLinks(tabId, changeInfo, tab) {
  // Check if the URL has changed
  if (changeInfo.url) {
    console.log("New URL detected: " + changeInfo.url);
  }
}

// Add a listener for URL changes on the tabs
chrome.tabs.onUpdated.addListener(checkForNewLinks);

// Start the script when the extension is installed or updated
chrome.runtime.onInstalled.addListener(function() {
  console.log("Extension started!");
});


</script>
