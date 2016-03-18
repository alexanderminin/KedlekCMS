$(document).ready(function() {
    $(".col-lg-12 img").each(function () {

        new_alt = '';
        new_style = '';
        new_style_class = '';
        new_width = '';
        new_height = '';
        
        src         = $(this).attr("src");
        alt         = $(this).attr("alt");
        width       = $(this).attr("width");
        height      = $(this).attr("height");
        style       = $(this).attr("style");
        style_class = $(this).attr("class");
        
        if (style_class.indexOf('block-fancybox') >= 0) {return;}
        
        if (alt)         new_alt         = " alt='"+alt+"'";
        if (style)       new_style       = " style='"+style+"'";
        if (style_class) new_style_class = " class='"+style_class+"'";
        if (width)       new_width       = " width='"+width+"'";
        if (height)      new_height      = " height='"+height+"'";

        $(this).after("<a class='fancybox' rel='group' href='"+src+"'><img src='"+src+"'"+new_alt+""+new_style+""+new_style_class+""+new_width+""+new_height+"/></a>");
        $(this).remove();

    });
});

$(document).ready(function() {
    $(".fancybox").fancybox();
});