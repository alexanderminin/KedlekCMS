$("#page_param_url").change(function(){
    result = check();
});

$("#page_param_title").change(function(){
    result = check();
});

function check(){

    url = $.trim($("#page_param_url").val());

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#page_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/pages/unic", {
            url: url
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

}