$("#gallery_param_url").change(function(){
    
    url = $.trim($("#gallery_param_url").val());
    id = $("#gallery_list_id").val();

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#gallery_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/gallerylist/unicexist", {
            url: url,
            id: id
            }, function(response){

                if(response == 1){

                    $("#gallery_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-success");
                    $("#add_button").removeAttr("disabled");

                }else{

                    $("#add_button").attr("disabled", "disabled");
                    $("#gallery_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");

            }
        });
    }

});