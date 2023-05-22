$dom = new DOMDocument();
$html = '<html><body><div class="parent"><div class="child">Child 1</div><div class="child">Child 2</div></div></body></html>';
$dom->loadHTML($html);

$xpath = new DOMXPath($dom);
$parentElement = $xpath->query("//*[@class='parent']")->item(0);
$childElements = $xpath->query(".//*[@class='child']", $parentElement);

foreach ($childElements as $childElement) {
    echo $dom->saveHTML($childElement);
}



$dom = new DOMDocument();
$html = '<html><body><div class="parent"><div class="child">Child 1</div><div class="child">Child 2</div></div><div class="parent"><div class="child">Child 3</div><div class="child">Child 4</div></div></body></html>';
$dom->loadHTML($html);

$xpath = new DOMXPath($dom);
$parentElements = $xpath->query("//*[@class='parent']");

foreach ($parentElements as $parentElement) {
    $childElements = $xpath->query(".//*[@class='child']", $parentElement);
    foreach ($childElements as $childElement) {
        echo $dom->saveHTML($childElement);
    }
}

