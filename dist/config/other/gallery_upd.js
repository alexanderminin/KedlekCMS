function responsive_filemanager_callback(id){

    if(id == "fieldID2"){

        $(".dsbd").removeAttr("disabled");

    } else {

        var url = $("#fieldID1").val();

        $.post("/admin/gallerylist/thumb", {
            file: url
        }, function(response){
            //alert(response);
            $("#thumb_view").attr("src", "/images/" + response);
        });
    }

    $(".myModal").modal("hide");

}