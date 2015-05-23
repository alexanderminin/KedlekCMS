$("#record_param_url").change(function(){
    
    url = $.trim($("#record_param_url").val());
    id = $("#record_id").val();

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#record_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/category/unicexist_record", {
            url: url,
            id: id
            }, function(response){

                if(response == 1){

                    $("#record_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-success");
                    $("#add_button").removeAttr("disabled");

                }else{

                    $("#add_button").attr("disabled", "disabled");
                    $("#record_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");

            }
        });
    }

});