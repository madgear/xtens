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

header('Content-Type: text/html; charset=utf-8');

if (isset($_GET['text'])) {
  $mytext = urldecode($_GET['text']);
  echo $mytext;
} else {
  echo 'Text not provided';
}

fetch('http://example.com/myscript.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
  },
  body: 'mytext=こんにちは'
})

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

<script>
    // A function that returns a Promise that resolves after a given delay
    function delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    // An async function that uses delay to simulate a long-running task
    async function longTask() {
        console.log('Starting long task');
        await delay(2000);
        console.log('Long task complete');
    }

    // An async function that waits for longTask to complete before running another task
    async function main() {
        console.log('Starting main task');
        await longTask();
        console.log('Main task complete');
    }

    // Call the main function
    main();

</script>

<script>
    // Find the button element
    const button = document.querySelector('#my-button');

    // Add an event listener to the button
    button.addEventListener('click', async () => {
        // Click the button
        button.click();

        // Wait for the next event
        await new Promise(resolve => {
            // Add an event listener to the window
            window.addEventListener('my-event', () => {
                // Remove the event listener
                window.removeEventListener('my-event', arguments.callee);
                // Resolve the promise
                resolve();
            });
        });

        // Run the next command
        console.log('Next command');
    });

</script>


<!DOCTYPE html>
<html>
<head>
  <title>Save Page as DOCX</title>
  <script src="https://unpkg.com/html-docx-js/dist/html-docx.js"></script>
</head>
<body>
  <button onclick="savePageAsDocx()">Save Page as DOCX</button>

  <script>
    function savePageAsDocx() {
      const htmlContent = document.documentElement.outerHTML;
      const images = Array.from(document.querySelectorAll('img'));

      const imagePromises = images.map(image => {
        return new Promise((resolve, reject) => {
          const canvas = document.createElement('canvas');
          const ctx = canvas.getContext('2d');
          const img = new Image();

          img.onload = function() {
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);
            const dataUrl = canvas.toDataURL('image/jpeg');
            resolve(dataUrl);
          };

          img.onerror = function() {
            reject(new Error('Image loading failed'));
          };

          img.src = image.src;
        });
      });

      Promise.all(imagePromises)
        .then(imageDataUrls => {
          const options = {
            orientation: 'portrait',
            includeDefaultStyles: true,
            images: imageDataUrls
          };

          const convertedDocx = htmlDocx.asBlob(htmlContent, options);

          const downloadLink = document.createElement('a');
          downloadLink.href = URL.createObjectURL(convertedDocx);
          downloadLink.download = 'page.docx';
          downloadLink.click();
        })
        .catch(error => {
          console.error('Error saving page as DOCX:', error);
        });
    }
  </script>
</body>
</html>



//SERVER SIDE



<?php
require 'vendor/autoload.php';
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Shared\Html;

// Retrieve the HTML content from the client
$htmlContent = $_POST['htmlContent'];

// Create a new PHPWord object
$phpWord = new PhpWord();

// Add a section
$section = $phpWord->addSection();

// Convert the HTML content to DOCX format
Html::addHtml($section, $htmlContent, true, false);

// Process and embed images
$images = $section->getElementsRecursive(\PhpOffice\PhpWord\Element\AbstractContainer::IMAGE);
foreach ($images as $image) {
    $imagePath = $image->getSrc();
    $imageContent = file_get_contents($imagePath);
    $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);
    $imageName = uniqid('img_') . '.' . $imageType;
    $image->setImageValue($imagePath);
    $phpWord->addImage($imagePath, array('width' => 400, 'height' => 300, 'align' => 'center'));
}

// Save the converted DOCX file
$filename = 'page.docx';
$objWriter = IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($filename);

// Set the appropriate headers for file download
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . filesize($filename));

// Send the converted DOCX file to the client
readfile($filename);

// Clean up - delete the temporary file
unlink($filename);
?>


//script


// Function to send the HTML content to the server for conversion
function savePageAsDocx() {
  // Retrieve the HTML content of the current page
  const htmlContent = document.documentElement.outerHTML;

  // Create a FormData object to send the data to the server
  const formData = new FormData();
  formData.append('htmlContent', htmlContent);

  // Send the data to the server using fetch
  fetch('http://example.com/convert.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.blob())
  .then(blob => {
    // Create a link element to trigger the download
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'page.docx';
    link.click();
  })
  .catch(error => {
    console.error('Error saving page as DOCX:', error);
  });
}

// Call the savePageAsDocx function to initiate the process
savePageAsDocx();

