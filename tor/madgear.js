let domain_name = "http://localhost"


document.addEventListener('DOMContentLoaded', async () => {

    $(document).on("click", '#search_btn', function () {
        func_search();
    });

    $(document).on("click", '#clear_btn', function () {
        $("#result_table").html("");
    });

});

func_search = () => {
    var stxt = $("input").val();
    var pgnum = $("#num").val();
    var stype = $("#type").val();
    $.post(domain_name + "/1337x/index.php", { page: "search", search: stxt, pgnum: pgnum, stype: stype })
        .done(function (data) {
            var dt = JSON.parse(data);
            for (var i = 0; i < dt.length; i++) {
                get_magnet_link(dt[i].href, dt[i].text);
            }
        });
}

get_magnet_link = (url, title) => {
    $.post(domain_name + "/1337x/index.php", { page: "getmagnet", url: url })
        .done(function (data) {
            var dt = JSON.parse(data);
            if (dt.length > 0) {
                //alert(dt[0].href);
                $("#result_table").append("<tr>><td><a href='" + dt[0].href + "'>" + title + "</a></td></tr>");
            }
        });
}