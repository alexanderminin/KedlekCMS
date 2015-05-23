$("#category_param_url").change(function(){
    
    url = $.trim($("#category_param_url").val());
    id = $("#id_category").val();

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#category_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/category/unicexist", {
            url: url,
            id: id
            }, function(response){

                if(response == 1){

                    $("#category_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-success");
                    $("#add_button").removeAttr("disabled");

                }else{

                    $("#add_button").attr("disabled", "disabled");
                    $("#category_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");

            }
        });
    }

});