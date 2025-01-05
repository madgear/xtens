function check_for_changes() {
    let d = $(document);
    let a = d.find("a");
    let href = a.attr("href");

    const currentTitle = document.title;
    // console.log("Current Page Title:", currentTitle);
    d.find("#acipp_content").remove();
    d.find("#openPopup").removeAttr("id");


    $(a).each(function (i) {

        var h = $(this).attr("href");
        var src = h.search("magnet:");

        console.log(src);
        if (src !== -1) {
            const linkToOpen = $(this).attr('href');
            chrome.runtime.sendMessage({ action: "magnetlink", url: linkToOpen });
            return false;
        }



    });


    // d.find("#openPopup").removeAttr("class target onclick");


}

setInterval(check_for_changes, 5000);

$(document).ready(function () {
    console.log("madgear");

    check_for_changes();

    $(document).find('body').on('click', function (event) {
        event.preventDefault();
    });

    $(document).find('a').on('click', function (event) {
        event.preventDefault();
        const linkToOpen = $(this).attr('href');
        chrome.runtime.sendMessage({ action: "openLink", url: linkToOpen });
    });

});