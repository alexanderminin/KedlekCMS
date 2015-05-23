//Настройки валидации
$("#gallery_button_add").change(function(){
    result = check();
});


function check(){

    url = $.trim($("#url").val());

    $.post("/admin/gallerylist/unic_gallery", {
        url: url
        }, function(response){
            if(response == 1){

                //alert('уникальный');

            }else{

                //alert('не уникальный');
                var number = 1 + Math.floor(Math.random() * 6);
                url = url + number;

                $("#url").val(url);


        }
    });
 

}