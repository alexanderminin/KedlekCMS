$(document).ready(function() {
    $(".col-lg-12 img").each(function () {

        src = $(this).attr("src");
        alt = $(this).attr("alt");
        width = $(this).attr("width");
        height = $(this).attr("height");
        style = $(this).attr("style");

        $(this).after("<a class='fancybox' rel='group' href='"+src+"'><img src='"+src+"' alt='"+alt+"' style='"+style+"' width='"+width+"'/></a>");
        $(this).remove();

    });
});

$(document).ready(function() {
    $(".fancybox").fancybox();
});