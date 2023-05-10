

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


chrome.contextMenus.create({
  title: "Copy Highlighted Text",
  contexts: ["selection"],
  onclick: function(info, tab) {
    // Get the highlighted text
    var text = info.selectionText;
    
    // Write the text to the clipboard
    navigator.clipboard.writeText(text);
    
    // Show a notification to indicate success
    chrome.notifications.create({
      type: "basic",
      title: "Text Copied",
      message: "Highlighted text copied to clipboard."
    });
  }
});





setInterval(() => {
  console.log("Extension running in the background...");
}, 5000);


// Get the URLs of all open tabs and log them
function logAllUrls() {
  chrome.tabs.query({}, tabs => {
    tabs.forEach(tab => {
      const url = tab.url;
      console.log(`Tab URL: ${url}`);
    });
  });
}

// Log all URLs every 5 seconds
setInterval(logAllUrls, 5000);




<?php
echo "elow";




?>
