<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

$domain_name = "https://1337x.to/";

$check_ifpost = $_SERVER['REQUEST_METHOD'];

if($check_ifpost <> "POST"){
    echo "invalid";
    exit;
}

$page = $_POST["page"];

if($page == "search"){

$src_txt = $_POST["search"];
$pgnum = $_POST["pgnum"];
$stype = $_POST["stype"];

$src_txt = str_replace(" ",".", $src_txt);

if($stype == "all"){
    $url = $domain_name . "sort-search/".$src_txt."/time/desc/".$pgnum."/";

}else if($stype == "trending"){    
    $url = $domain_name . $stype;  

}else if($stype == "top-100"){    
    $url = $domain_name . $stype;

}else{
    $url = $domain_name . "cat/" .$stype. "/" .$pgnum. "/";
}

$html = file_get_contents($url);
$htmlDom = new DOMDocument;
@$htmlDom->loadHTML($html);
$links = $htmlDom->getElementsByTagName('a');
$extractedLinks = array();

foreach($links as $link){
    $linkText = $link->nodeValue;
    $linkHref = $link->getAttribute('href');
    if(strlen(trim($linkHref)) == 0){
        continue;
    }
    
    if($linkHref[0] == '#'){
        continue;
    }

    if(str_contains($linkHref, "/torrent/") == 1){
        $extractedLinks[] = array(
            'text' => $linkText,
            'href' => $linkHref
        );
    }
}
echo json_encode($extractedLinks);

}else if($page == "getmagnet"){

    $txt = $_POST["url"];
    $url = "https://1337x.to".$txt;
    $html = file_get_contents($url);
    $htmlDom = new DOMDocument;
    @$htmlDom->loadHTML($html);
    $links = $htmlDom->getElementsByTagName('a');
    $extractedLinks = array();
    
    foreach($links as $link){
        $linkText = $link->nodeValue;
        $linkHref = $link->getAttribute('href');

        if(strlen(trim($linkHref)) == 0){
            continue;
        }
        
        if($linkHref[0] == '#'){
            continue;
        }
    
        if(str_contains($linkHref, "magnet") == 1){
            $extractedLinks[] = array(
                'text' => $linkText,
                'href' => $linkHref
            );
        }
    }
    echo json_encode($extractedLinks);    

}else{
    echo "invalid";
}
