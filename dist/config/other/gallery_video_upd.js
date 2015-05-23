$("#gallery_button_add").change(function(){

    var url = $("#gallery_button_add").val();

    $("#thumb_view").attr("src", "//www.youtube.com/embed/" + url + "?hd=1&rel=0");

});