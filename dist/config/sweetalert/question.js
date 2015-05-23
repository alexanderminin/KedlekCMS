$("#question").click(function(){

  swal({

      title: 'Есть вопросы ?',
      html: 
          '<div class="form-group">' +
              '<label class="control-label" for="name">Как к Вам обращаться?</label>'+
              '<input type="text" class="form-control" id="name" name="name" autocomplete="off">'+
          '</div>'+
          '<div class="form-group">'+
              '<label class="control-label" for="text">Ваш вопрос</label>'+
              '<input type="text" class="form-control" id="text" name="text" autocomplete="off">'+
          '</div>'+
          '<div class="form-group">'+
              '<label class="control-label" for="phone">Контактный телефон</label>'+
              '<input type="number" class="form-control" id="phone" name="phone" autocomplete="off">'+
          '</div>',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonColor: '#3085d6',
      cancelButtonText: 'Отменить',
      confirmButtonText: 'Отправить',
      closeOnConfirm: false,
      closeOnCancel: false,
      width: 450

  }, function(isConfirm) {

      name = $('#name').val();
      text = $('#text').val();
      phone = $('#phone').val();

      $(".form-group").removeClass("has-error");
      $(".helpBlock").remove();

      if (isConfirm) {

          if(name == ""){

              $('#name').after('<span class="help-block helpBlock">Заполните ваше Имя!</span>');
              $("#name").closest(".form-group").addClass("has-error");

          } else if (text == "") {

              $('#text').after('<span class="help-block helpBlock">Введите ваш вопрос</span>');
              $("#text").closest(".form-group").addClass("has-error");

          } else if (phone == "") {

              $('#phone').after('<span class="help-block helpBlock">Зополните телефон</span>');
              $("#phone").closest(".form-group").addClass("has-error");

          } else {

              swal.disableButtons();

              $.post("/messages/callback", {
                  name: name,
                  type: '2',
                  text: text,
                  phone: phone
                  }, function(response){

                      if(response == 1){

                          swal('Вопрос задан','В ближайшее время вам перезвонят :)','success');

                      }else{

                          swal('Очень жаль','Возникла ошибка :(','error');

                      }
              });
          }

      } else {     

          swal('Не стесняйтесь','Если у вас есть какой-либо вопрос, пожалуйста, задайте его :)','warning');

      }

    });

});