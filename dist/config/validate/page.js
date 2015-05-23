$("#page_param_url").change(function(){
    
    url = $.trim($("#page_param_url").val());
    id = $("#id_page").val();

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#page_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/pages/unicexist", {
            url: url,
            id: id
            }, function(response){

                if(response == 1){

                    $("#page_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-success");
                    $("#add_button").removeAttr("disabled");

                }else{

                    $("#add_button").attr("disabled", "disabled");
                    $("#page_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");

            }
        });
    }

});