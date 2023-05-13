const insert_css = `    
.ml-0 {
    margin-left: 1px !important;
}

.ml-1 {
    margin-left: 1px !important;
}

.ml-2 {
    margin-left: 2px !important;
}

.ml-3 {
    margin-left: 3px !important;
}

.ml-4 {
    margin-left: 4px !important;
}

.ml-5 {
    margin-left: 5px !important;
}

.mr-0 {
    margin-right: 0px !important;
}

.mr-1 {
    margin-right: 1px !important;
}

.mr-2 {
    margin-right: 2px !important;
}

.mr-3 {
    margin-right: 3px !important;
}

.mr-4 {
    margin-right: 4px !important;
}

.mr-5 {
    margin-right: 1px !important;
}


.mt-0 {
    margin-top: 0px !important;
}

.mt-0 {
    margin-top: 0px !important;
}

.mt-1 {
    margin-top: 1px !important;
}

.mt-2 {
    margin-top: 2px !important;
}

.mt-3 {
    margin-top: 3px !important;
}

.mt-4 {
    margin-top: 4px !important;
}

.mt-5 {
    margin-top: 5px !important;
}

.mb-0 {
    margin-bottom: 0px !important;
}

.mb-1 {
    margin-bottom: 1px !important;
}

.mb-2 {
    margin-bottom: 2px !important;
}

.mb-3 {
    margin-bottom: 3px !important;
}

.mb-4 {
    margin-bottom: 4px !important;
}

.mb-5 {
    margin-bottom: 5px !important;
}

.p-0 {
    padding: 0px !important;
}

.p-1 {
    padding: 1px !important;
}

.p-2 {
    padding: 2px !important;
}

.p-3 {
    padding: 3px !important;
}

.p-4 {
    padding: 4px !important;
}

.p-5 {
    padding: 5px !important;
}

.m-0 {
    margin: 0px !important;
}

.m-1 {
    margin: 1px !important;
}

.m-2 {
    margin: 2px !important;
}

.m-3 {
    margin: 3px !important;
}

.m-4 {
    margin: 4px !important;
}

.m-5 {
    margin: 5px !important;
}

.other_tags {
    background-color : #ffb833 !important;
    width : fit-content !important;
    font-size : 10px;
    border-radius : 5px;
    padding : 4px;
    color : black !important;
    font-weight : bold;
    margin-right : 5px !important;    
}

.space_ninja {
background-color : #cc3300 !important;
width : fit-content !important;
font-size : 8px;
border-radius : 50%;
padding : 3px 5px 3px 5px;
color : white !important;
font-weight : bold;
}

.tooltip {
    padding : 10px;
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; 
  }  

  section {
      margin:0px !important;
  }
  
  .section_title {        
    margin:10px;
    border-radius:6px;
    border:1px solid black;
    z-index:99999;
    position:absolute;
    padding:6px;
    background-color:red;
    height:36px;
    color:white;
    font-weight:bold;
    cursor: pointer;
  }
  
  .aem_title {      
    font-size: 14px;  
    background: linear-gradient(90deg, green, #1aff1a) !important;
    border : 1px solid black !important;          
    color:white;
    font-weight:bold;
    margin-top: 5px !important;  
    margin-bottom: 2px !important;  
    padding : 5px;
    padding-top : 7px !important;
    padding-left : 15px !important;
    border-radius : 2px !important;
    display : block; 
    text-shadow: 2px 2px 2px black; 
    border-radius : 10px !important;    
  }
  
  .aem_category {    
    font-size: 15px; 
    width : 99% !important;
    border-radius : 10px !important;    
    padding : 5px !important; 
    padding-top : 7px !important;
    padding-left : 10px !important;
    margin-top : 10px !important;
    margin-left : 10px !important;
    background: linear-gradient(90deg, red, black) !important;    
    color:white;
    font-weight:bold;  
    display : block; 
    text-shadow: 2px 2px 2px black;  
  }
  
  .link_number {
    height: 30px;
    width: 30px;
    text-align:center;  
    background-color: green;
    border-radius: 50%;
    display: inline-block;  
    color: white;
    margin-left: 10px;
    z-index:999999;
    font-size: 15px;
    font-weight:bold;
    padding-top: 5px;
    border: 1px solid black;
  }
  
  .aem_error {
    margin-right:2px;    
    border-radius: 5px;
    font-size:10px;      
    background-color : red;
    padding: 5px !important;
    margin-left : 1em !important;
    color:white;
    font-weight:bold;
    width: fit-content !important;
  }
  
  .jump_link_button {
    color:black!important;
    background-color : #ffcc66 !important;
  }
  
  .aem_copy_button {  
    background-color: #3b5998;
    color: white;
  }
  
  .aem_copy_code {  
    background-color: green;
    color : white; !important;
    margin-bottom: 5px !important;
  }

  .aem_copy_code_acc {  
    background-color: blue;
    color : white; !important;
    margin-bottom: 5px !important;
  }  
  
  .tooltip .tooltiptext {
    white-space: nowrap;
    visibility: hidden;
    width: auto;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px;
    font-weight : normal;
    border-radius: 6px;  
    position: absolute;
    z-index: 1;
    font-size:13px;
    bottom: 100%;
    left: 50%;
    margin-left: -60px;
    cursor: pointer;
  }
  
  .tooltip .tooltiptext:active {
    background-color: gray; 
  }
  
  .detected {  
    border: 1px dotted black;
    border-radius: 4px;
    padding: 3px !important;    
    cursor : pointer;    
  }
  
  .tooltip:hover .tooltiptext {
    visibility: visible;
  }

.aem_section {
    font-size:15px !important;
    padding: 5px !important;
    padding-top: 7px !important;
    background-color : green !important;
    display : block !important;
    color : white;
    font-weight: 600;
    z-index : 9999 !important;
    text-shadow: 2px 2px 2px black;
}

.btn {  
    background-color : blue !important;  
    border: 1px solid black;
    font-size : 10px !important;
    padding : 4px !important;        
    border-radius : 4px !important;  
    cursor: pointer;
    height : 19px !important;
    padding: 1px 8px 1px 8px !important;
    width: fit-content !important;
    display: inline-block !important;  
    font-weight : bold !important;
    color : white !important;
    text-shadow: 1px 1px 1px black;  
  }

  .btn:active {
    background-color : black ! important;
    color : white !important;
    border: 1px solid white !important;
  }  

  .btn:hover {
    font-weight : bold !important;
    color : white;
    background-color : gray;
  }

.nc_class {
    background-color : green !important;
    color : white !important;
}

.rules_class {
    background-color : yellow;
    color : blue !important;
}

.translate_class {
    background-color : red !important;
    color : white !important;
}

.sony-bar, #jetstream-tertiary-nav {
    display: block !important;
    position : static !important;
}

.textblock {    
    margin-top: 2px !important; 
    margin-bottom : 2px !important;  
    position: static !important; 
    display : block !important;
}

.aem_info {
    background-image: linear-gradient(to right, black ,  gray) !important;
    width : fit-content !important;
    font-size : 10px;    
    border-radius: 5px 5px 0px 0px !important;
    padding : 4px;
    padding-left : 15px !important;
    padding-right : 15px !important;
    text-shadow: 2px 2px 2px black;
    color : white !important;
    font-weight : bold;
    margin-right : 5px !important;  
  }

.mad_class {
  margin-top : 2px;
}

.text-block {    
    display : block !important;
    position : static !important;
    margin-top : 2px !important;
}

.section {
    width : 100% !important;    
    display: flex !important;
    justify-content: center !important;
} 

.sticky {  
    position: fixed;  
    top : 50px;
    right : 10px;
    width: 300px;
    height : auto;  
    max-height : 800px;
    overflow : auto;
    background-color: white;
    padding: 5px 10px 15px 10px !important;    
    font-size: 15px;
    z-index: 9999998;
    opacity: 0.5;
    border-radius: 5px;
    border: 2px solid black;
  }
  
  .sticky:hover {
    opacity: 1;
  }  

.error_found {
    border : 1px solid black;
    background-color : white !important;
    border-radius : 3px;
    margin-bottom : 10px !important;
    padding : 5px;
    font-size : 12px !important;   
    max-height : 200px !important;
    height : auto;
    overflow : auto;
}

.error_details {
    border : 0px solid black !important;    
    margin-bottom : 4px !important;
    border-radius : 5px !important;
    padding : 6px !important;
    background-color : red !important;
    display : block !important;
    color : white !important;
    text-decoration: none !important;
    line-height: 1.3 !important;
}


.error_found::-webkit-scrollbar-track
{
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
background-color: #F5F5F5;
}

.error_found::-webkit-scrollbar
{
width: 10px;
background-color: #F5F5F5;
}

.error_found::-webkit-scrollbar-thumb
{
background-color: #000000;
border: 0px solid #555555 !important;
}

.error_found div{
    padding : 2px;
    color : white;
    margin-bottom : 2px;
}

.error_label {
    font-size : 15px !important;
    font-weight : bold;
    color:white;
    padding-left : 10px;
}

.nana_error_message{  
    font-size : 27px !important;
    display : flex !important;
    border : 0px !important;
    text-shadow: 2px 2px 2px black; 
    color : red;
    font-weight : bolder;             
    text-align : center !important;
    align-items : center !important;   
    justify-content : center !important; 
    animation: grow 2s infinite !important;   
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;  
}

.error_list_class {    
    display : flex !important;
    flex-direction: row !important;  
}

.nana__container{
    display: flex;
    flex-direction: column;
    height: 10em;
    width: 9em !important;  
    min-width : 9em !important;  
    margin-bottom : 5px !important;
}

.nana__question{
    flex-grow: 1;
    position: relative;
}

.qm__1, .qm__2, .qm__3{
    position: absolute;
    height: 1.5em;
    animation: grow 1.5s infinite;
}

.qm__1 {
    left : 3.6em !important;
    bottom : -.1em !important;
    top : .2em !important;
}

.qm__2{
    bottom: -.4em !important;
    right: 2.8em; 
    animation: grow 2s infinite;
}

.qm__3{
    bottom: -.1em;
    right: 1.3em;
    animation: grow 1s infinite;
}

.nana__thinking{
    position: relative;
    height: 8em;
}

.nana__head {
    position: absolute;
    height: 4.5em;
    left: 1.9em !important;
    animation: shake 7s;
    animation-iteration-count: infinite;
    z-index: 98;
}

.nana__body{
    position: absolute;
    height: 3.9em;
    top: 4em;
    right: 1.4em;
    z-index: 97;
}

.nana__tail{
    position: absolute;
    height: 2.3em;
    bottom: 1.6em;
    left: 1.8em !important;
    animation: shake 10s;
    animation-iteration-count: infinite;
}

.nana__hand{    
    position: absolute;
    height: 1.7em;
    bottom: 2.5em !important;
    left: 4.1em !important;
    animation: shake 7s;
    animation-iteration-count: infinite !important;
    z-index: 99;
}

@keyframes shake{
    0%{
        transform: rotate(0deg);
    }
    50%{
        transform:rotate(10deg);
    }
}

@keyframes grow{
    0% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9)
      }
    
      25% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }
    
      60% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
      }
    
      100% {
        -webkit-transform: scale(0.9);
        -ms-transform: scale(0.9);
        transform: scale(0.9);
      }
}


table.greenTable {
    font-family: Georgia, serif;
    border: 6px solid #24943A;
    background-color: #D4EED1;
    width: 100%;
    text-align: center;
    border-collapse : collapse;
  }
  table.greenTable td, table.greenTable th {
    border: 1px solid #24943A;
    padding: 3px 2px;
    text-align : center !important;
  }
  table.greenTable tbody td {
    font-size: 13px;
  }
  table.greenTable thead {    
    background: #24943A;
    background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
    background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
    background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
    border-bottom: 0px solid #444444;
  }
  table.greenTable thead th {
    font-size: 19px;
    font-weight: bold;
    color: #F0F0F0;
    text-align: left;
    border-left: 2px solid #24943A;
  }
  table.greenTable thead th:first-child {
    border-left: none;
  }
  
  table.greenTable tfoot {
    font-size: 13px;
    font-weight: bold;
    color: #F0F0F0;
    background: #24943A;
    background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
    background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
    background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
    border-top: 1px solid #24943A;
  }
  table.greenTable tfoot td {
    font-size: 13px;
  }
  table.greenTable tfoot .links {
    text-align: right;
  }
  table.greenTable tfoot .links a{
    display: inline-block;
    background: #FFFFFF;
    color: #24943A;
    padding: 2px 8px;
    border-radius: 5px;
  }

  .no_error_found{
    height : 130px !important;
    text-align : center !important;
    align-items : center !important;   
    justify-content : center !important; 
    margin-bottom : 5px !important;
  }

  .no_error_found img{
    height : 110px !important;
    animation: grow 2s infinite !important;
  }  

  .no_error_found div{
    font-weight : bold !important;
    font-size : 18px !important;
    color : green !important;
    text-shadow: 1px 1px 1px black !important; 
    text-transform: capitalize !important;
} 

. notfound_detected {
    font-weight : bold !important;
}


`;



let pages = `
https://codebeautify.org/minify-js
https://www.cleancss.com/css-minify/
https://javier.xyz/img2css/
https://www.base64-image.de/
https://loading.io/css/
https://divtable.com/table-styler/
https://developer.chrome.com/docs/extensions/reference/alarms/
https://net-raft.com/Questions/1275/how-to-detect-the-pressing-ctrls-using-jquery-/1275
https://passwordsgenerator.net/
`;

let manifest_json = {
    "name": "C",
    "description": "C",
    "version": "1",
    "action": {
        "default_popup": "index.html"
    },
    "permissions": [
        "storage",
        "tabs",
        "activeTab",
        "notifications",
        "downloads",
        "pageCapture",
        "scripting",
        "cookies",
        "webRequest",
        "contextMenus",
        "alarms"
    ],
    "host_permissions": [
        "*://*/*"
    ],
    "manifest_version": 3,
    "author": "TMJP SIE TEAM"    
}


document.addEventListener('DOMContentLoaded', async () => {

    $(document).on("click", '#check_btn', function () {
        run_aem_checker();
    });

});

get_current_tab = async () => {
    const query_options = { active: true, currentWindow: true };
    const [chrome_tab] = await chrome.tabs.query(query_options);
    return chrome_tab;
}

runon_current_page = async () => {
    var chrome_tab = await get_current_tab();
    chrome.scripting.executeScript({
        target: { tabId: chrome_tab.id, allFrames: false },
        func: load_current_page_source
    }, function (s) {
        if (s[0].result == null) {
            runon_current_page();
        } else {
            update_aem_frames("page_checker", s[0].result);
        }
    });
}

update_current_page = async (frame_element) => {
    var chrome_tab = await get_current_tab();
    var main_element_frame = document.getElementById(frame_element);
    var query_element = main_element_frame.contentDocument || main_element_frame.contentWindow.document;
    var source_code = $(query_element).find("body").html();

    chrome.scripting.insertCSS({
        target: { tabId: chrome_tab.id, allFrames: true },
        files: ['includes/css/insert.css'],
    });

    chrome.scripting.executeScript({
        target: { tabId: chrome_tab.id },
        files: ['includes/js/jq.js', 'includes/js/_func.js']
    });

    chrome.scripting.executeScript({
        target: { tabId: chrome_tab.id, allFrames: false },
        func: update_page,
        args: [source_code]
    }, function (s) {
    });
}

update_page = (src) => {
    document.querySelectorAll("body")[0].innerHTML = src;
}

$(element).each(function (index) {
    $(this).on("click", function () {
        var check_display = $(this).next().css("display");
        if (check_display == "none") {
            $(this).addClass("active");
            $(this).next().css("display", "block");
        } else {
            $(this).removeClass("active");
            $(this).next().css("display", "none");
        }
    });
});

load_current_page_source = () => {

    // var scripts = document.querySelectorAll('body>script'); 
    // for(var i = 0; i < scripts.length; i++) {
    //   var script = scripts[i];
    //   script.remove();
    // }    

    // var pg_type = document.querySelectorAll("#page_type");
    // var pg_url = document.querySelectorAll("#page_url");    
    // var current_page_type = "";    

    // if (pg_type.length > 0) {
    //     current_page_type = pg_type[0].innerText;
    // } else {

    //     current_page_type = "article";

    //     var check_page_category = document.querySelectorAll(".cx-category__content");
    //     var check_meta = document.querySelectorAll("meta[name='supportType']");

    //     if (check_page_category.length > 0) {
    //         current_page_type = "category";
    //     }

    //     if (check_meta.length > 0) {

    //         var support_type = check_meta[0].getAttribute("content");
    //         if (support_type == "errorcode") {
    //             current_page_type = support_type;
    //         }
    //     }

    //     document.querySelectorAll("body")[0].innerHTML = "<div id='page_type' class='mad-hide'>" + current_page_type + "</div>" + document.querySelectorAll("body")[0].innerHTML;

    // }


    // if (pg_url.length <= 0) {
    //     document.querySelectorAll("body")[0].innerHTML = "<div id='page_url' class='mad-hide'>" + c_page_url + "</div>" + document.querySelectorAll("body")[0].innerHTML;
    // }    

    var get_current_page_body_source = document.querySelectorAll("body")[0].innerHTML;
    return get_current_page_body_source;

}

run_aem_checker = () => {

    var main_element_frame = document.getElementById("page_checker");
    var query_element = main_element_frame.contentDocument || main_element_frame.contentWindow.document;

    remove_not_needed(query_element);

    //START HIGHLIGHT AEM RULES AND TRANSLATION

    //DISPLAY HEADER FOR CATEGORY TYPE
    $(query_element).find(".pagebanner").each(function (i) {
        var get_text = $(this).find(".page-banner__content").html();
        $(this).before("<div class='section m5'>" + get_text + "</div>");
        $(this).remove();
    });

    $(query_element).find(".sub-category-tile-master").addClass("section");

    //CHECKING SECTION HERE    
    $(query_element).find(".section").each(function (i) {

        $(this).before("<div class='aem_section'>SECTION " + (i + 1) + "</div>");

        check_category_page(this);

        for (let n = 0; n < aem_working_rules.length; n++) {
            let txt = $(this).html();
            let src_txt = aem_working_rules[n][1];
            let src_class = aem_working_rules[n][4];
            src_class = src_class.toLowerCase() + "_class";

            let src = txt.search(src_txt);
            if (src !== -1) {
                var src_len = src_txt.length;
                var new_text = "";
                var bracket = "";
                for (let y = 0; y < src_len; y++) {
                    if (src_txt[y] == '［') {
                        bracket = "bracket";
                    }
                    new_text += "<aem class='" + bracket + "'>" + src_txt[y] + "</aem>"
                }
                $(this).html(txt.replace(new RegExp(src_txt, "g"), "<aem class='detected tooltip " + src_class + "'>" + new_text + "</aem>"));
            }
        }

        var get_section_code = $(this).html();
        $(this).html(get_section_code.replace(/&nbsp;/gi, "<aem class='aem_error nbsp_error'>NBSP</aem>"));
        var check_greaterthan = $(this).html();
        $(this).html(check_greaterthan.replace(/&gt;/gi, "<aem class='detected tooltip' style='color:red'>&gt;</aem>"));

    });
    //END HIGHLIGHT AEM RULES AND TRANSLATION

    //NORMALIZE DETECTED AEM RULES AND ADDITIONAL RULES
    $(query_element).find(".detected").each(function (i) {
        $(this).html($(this).text());

        if ($(this).html() == "&gt;") {
            $(this).before('<aem class="aem_error fullwidth_error">CHANGE TO FULLWIDTH ＞</aem>');
        }

        let span_data = $(this).text().trim();
        if (span_data !== "") {
            for (let x = 0; x < aem_working_rules.length; x++) {
                if (span_data == aem_working_rules[x][1]) {
                    var toottip_text = "";
                    if (span_data == "［") {
                        var prev_elem = $(this).parent().prop("nodeName");
                        if (prev_elem !== "A") {
                            if (prev_elem !== "B") {
                                $(this).removeClass("rules_class");
                                $(this).addClass("translate_class");
                                $(this).before("<aem class='aem_error bracket_error'>BOLD ［</aem>");
                                toottip_text = "BOLD BRACKET AND CONTENTS";
                            }
                        }
                    }

                    if (span_data == "＞") {
                        var prev_elem = $(this).parent().prop("nodeName");
                        if (prev_elem == "B") {
                            $(this).removeClass("rules_class");
                            $(this).addClass("translate_class");
                            $(this).before("<aem class='aem_error bracket_error'>UNBOLD TEXT</aem>");
                            toottip_text = "UNBOLD TEXT";
                        }
                    }

                    if (span_data == "］") {
                        var prev_elem = $(this).parent().prop("nodeName");
                        if (prev_elem !== "B") {
                            $(this).removeClass("rules_class");
                            $(this).addClass("translate_class");
                            $(this).before("<aem class='aem_error bracket_error'>BOLD ］</aem>");
                            toottip_text = "BOLD END BRACKET AND CONTENTS";
                        }
                    }

                    if (span_data.length > 1) {
                        var prev_elem = $(this).parent().prop("nodeName");
                        if (prev_elem == "B") {
                            var get_text = $(this).parent().text();
                            var src = get_text.search("［");

                            if (src !== -1) {
                                src = get_text.search("］");
                                $(this).parent().find(".translate_class").addClass("nc_class");
                                $(this).parent().find(".translate_class").removeClass("translate_class");
                                toottip_text = "NO CHANGE NEEDED INSIDE BRACKET";
                            }


                        }
                    }

                    $(this).html("<ofcn>" + $(this).text() + "</ofcn>");

                    if (toottip_text == "") {
                        $(this).append('<aem class="tooltiptext">' + aem_working_rules[x][2] + '</aem>');
                    } else {
                        $(this).append('<aem class="tooltiptext">' + toottip_text + '</aem>');
                    }


                }
            }
        }

    });

    update_current_page("page_checker");

}