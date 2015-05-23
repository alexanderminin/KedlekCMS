$("#menu_add_section_adr_input").change(function(){
    
    url = $("#menu_add_section_adr_input").val();
    text = $( "#menu_add_section_adr_input option:selected" ).text();
    $("#menu_add_section_title_input").val(text);

    if (url == "notvalue"){

        $("#menu_add_section_adr_input").attr("name", "target");
        $("#self_input").remove();
        $("#menu_add_section_button_add").attr("disabled", "disabled");
        $("#menu_add_section_adr_input").closest(".form-group").removeClass("has-success");
   
    } else if (url == "myself"){

        $("#menu_add_section_button_add").attr("disabled", "disabled");
        $("#menu_add_section_adr_input").closest(".form-group").removeClass("has-success");
        $("#menu_add_section_adr_input").attr("name", "").after("<input type='text' id='self_input' class='form-control' value='http://' style='margin-top:10px;' name='target' placeholder='http://yandex.ru'>");
   
        $("#self_input").change(function(){

            $("#menu_add_section_adr_input").closest(".form-group:first").addClass("has-success");
            $("#menu_add_section_button_add").removeAttr("disabled");

        });

    } else {

        $("#menu_add_section_adr_input").attr("name", "target");
        $("#self_input").remove();
        $("#menu_add_section_adr_input").closest(".form-group").removeClass("has-success").addClass("has-success");
        $("#menu_add_section_button_add").removeAttr("disabled");

    }

});

