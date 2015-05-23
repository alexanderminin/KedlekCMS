$("#add_url").change(function(){
    
    url = $.trim($("#add_url").val());
    id = $("#gallery_id").val();

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#add_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/gallerylist/unicexist_gallery", {
            url: url,
            id: id
            }, function(response){

                if(response == 1){

                    $("#add_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-success");
                    $("#add_button").removeAttr("disabled");

                }else{

                    $("#add_button").attr("disabled", "disabled");
                    $("#add_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");

            }
        });
    }

});