//Настройки валидации
$("#category_param_url").change(function(){
    result = check();
});

$("#category_param_title").change(function(){
    result = check();
});

function check(){

    url = $.trim($("#category_param_url").val());

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#category_param_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/category/unic", {
            url: url
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

}