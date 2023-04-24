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
