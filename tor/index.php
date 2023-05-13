<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

//date_default_timezone_set('Asia/Manila');

$domain_name = "https://1337x.to/";

function file_get_contents_curl($url)
{

    $user_agent = array(
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15",
        "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8'",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:89.0) Gecko/20100101 Firefox/89.0",
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:54.0) Gecko/20100101 Firefox/54.0",
        "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 OPR/45.0.2552.881",
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36",
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:54.0) Gecko/20100101 Firefox/54.0",
        "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko"
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //     'Accept-Language: en-US,en;q=0.5',
    //     'Accept-Encoding: gzip, deflate',
    //     'Connection: keep-alive',
    // ));
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent[array_rand($user_agent, 1)]);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
}

$check_ifpost = $_SERVER['REQUEST_METHOD'];

if ($check_ifpost <> "POST") {
    echo "invalid";
    exit;
}

$page = $_POST["page"];

if ($page == "search") {

    $src_txt = $_POST["search"];
    $pgnum = $_POST["pgnum"];
    $stype = $_POST["stype"];

    $src_txt = str_replace(" ", ".", $src_txt);

    if ($stype == "all") {
        $url = $domain_name . "sort-search/" . $src_txt . "/time/desc/" . $pgnum . "/";

    } else if ($stype == "trending") {
        $url = $domain_name . $stype;

    } else if ($stype == "top-100") {
        $url = $domain_name . $stype;

    } else {
        $url = $domain_name . "cat/" . $stype . "/" . $pgnum . "/";
    }



    //$html = file_get_contents($url);
    $html = file_get_contents_curl($url);

    $htmlDom = new DOMDocument;

    @$htmlDom->loadHTML($html);
    $links = $htmlDom->getElementsByTagName('a');
    $extractedLinks = array();

    foreach ($links as $link) {
        $linkText = $link->nodeValue;
        $linkHref = $link->getAttribute('href');
        if (strlen(trim($linkHref)) == 0) {
            continue;
        }

        if ($linkHref[0] == '#') {
            continue;
        }

        if (str_contains($linkHref, "/torrent/") == 1) {
            $extractedLinks[] = array(
                'text' => $linkText,
                'href' => $linkHref
            );
        }
    }
    echo json_encode($extractedLinks);

} else if ($page == "getmagnet") {

    $txt = $_POST["url"];
    $url = "https://1337x.to" . $txt;
    //$html = file_get_contents($url);
    $html = file_get_contents_curl($url);
    $htmlDom = new DOMDocument;
    @$htmlDom->loadHTML($html);
    $links = $htmlDom->getElementsByTagName('a');
    $extractedLinks = array();

    foreach ($links as $link) {
        $linkText = $link->nodeValue;
        $linkHref = $link->getAttribute('href');

        if (strlen(trim($linkHref)) == 0) {
            continue;
        }

        if ($linkHref[0] == '#') {
            continue;
        }

        if (str_contains($linkHref, "magnet") == 1) {
            $extractedLinks[] = array(
                'text' => $linkText,
                'href' => $linkHref
            );
        }
    }
    echo json_encode($extractedLinks);

} else {
    echo "invalid";
}