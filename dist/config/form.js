$(document).ready(function() {

    function randomnum(){
        var number1 = 5;
        var number2 = 50;
        var randomnum = (parseInt(number2) - parseInt(number1)) + 1;
        var rand1 = Math.floor(Math.random()*randomnum)+parseInt(number1);
        var rand2 = Math.floor(Math.random()*randomnum)+parseInt(number1);
        $("#rand1").html(rand1);
        $("#rand2").html(rand2);
    }

    randomnum();

    $("#re").click(function(){
        randomnum();
    });


    $("#submit_btn").click(function() {

        var total=parseInt($('#rand1').html())+parseInt($('#rand2').html());
        var total1=$('#total').val();
       
        var proceed = true;
     
        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){ 

            if(!$.trim($(this).val())){

                $(this).after('<span class="help-block helpBlock">Заполните поле.</span>');
                $(this).closest(".form-group").addClass("has-error");
 
                proceed = false;
            }
            
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){

                $(this).after('<span class="help-block helpBlock">Введите корректный e-mail</span>');
                $(this).closest(".form-group").addClass("has-error");  

                proceed = false;              
            }   

        });
       
        if(proceed)
        {
            
            post_data = {
                'user_name'     : $('input[name=name]').val(), 
                'user_email'    : $('input[name=email]').val(), 
                'phone_number'  : $('input[name=phone]').val(), 
                'subject'       : $('input[name=subject]').val(), 
                'msg'           : $('textarea[name=message]').val()
            };
            
            if(total!=total1){

                captcha

                $("#captcha").after('<span class="help-block helpBlock">Для отправки сообщения необходимо ввести сумму (либо сумма не верна)</span>');
                $("#captcha").addClass("has-error"); 

                randomnum();
                return false;

            }else{

                $.post('/messages/contactform', post_data, function(response){ 

                    if(response.type == 'error'){

                        output = '<div class="alert alert-danger" role="alert">'+response.text+'</div>';

                    }else{

                        output = '<div class="alert alert-success" role="alert">'+response.text+'</div>';
                        
                        $("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
                        $("#contact_form #contact_body").slideUp();

                    }

                    $("#contact_form #contact_results").hide().html(output).slideDown();
                
                }, 'json');

            }
        }
    });
    
    $("#contact_form  input[required=true], #contact_form textarea[required=true], #total").keyup(function() { 
        $(".form-group").removeClass("has-error");
        $(".helpBlock").remove();  
        $("#result").slideUp();
    });
});