//Настройки валидации
$("#add_url").change(function(){
    result = check();
});

$("#add_url").change(function(){
    result = check();
});

function check(){

    url = $.trim($("#add_url").val());

    if(url == ""){

        $("#add_button").attr("disabled", "disabled");
        $("#add_url").closest(".form-group").removeClass("has-success").removeClass("has-error").addClass("has-error");
   
    }else{

        $.post("/admin/gallerylist/unic_gallery", {
            url: url
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

}