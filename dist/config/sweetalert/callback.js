$("#callback").click(function(){

  swal({

      title: 'Заявка на обратный звонок',
      html: 
          '<div class="form-group">' +
              '<label class="control-label" for="name">Как к Вам обращаться?</label>'+
              '<input type="text" class="form-control" id="name" name="name" autocomplete="off">'+
          '</div>'+
          '<div class="form-group">'+
              '<label class="control-label" for="text">Удобное время для связи</label>'+
              '<select class="form-control" id="text">'+
                  '<option value="08:00">08:00</option>'+
                  '<option value="08:30">08:30</option>'+
                  '<option value="09:00">09:00</option>'+
                  '<option value="09:30">09:30</option>'+
                  '<option value="10:00">10:00</option>'+
                  '<option value="10:30">10:30</option>'+
                  '<option value="11:00">11:00</option>'+
                  '<option value="11:30">11:30</option>'+
                  '<option value="12:00">12:00</option>'+
                  '<option value="12:30">12:30</option>'+
                  '<option value="13:00">13:00</option>'+
                  '<option value="13:30">13:30</option>'+
                  '<option value="14:00">14:00</option>'+
                  '<option value="14:30">14:30</option>'+
                  '<option value="15:00">15:00</option>'+
                  '<option value="15:30">15:30</option>'+
                  '<option value="16:00">16:00</option>'+
                  '<option value="16:00">16:30</option>'+
                  '<option value="17:00">17:00</option>'+
                  '<option value="17:30">17:30</option>'+
                  '<option value="18:00">18:00</option>'+
                  '<option value="18:30">18:30</option>'+
                  '<option value="19:00">19:00</option>'+
                  '<option value="19:30">19:30</option>'+
                  '<option value="20:00">20:00</option>'+
                  '<option value="20:30">20:30</option>'+
                  '<option value="21:00">21:00</option>'+
              '</select>'+
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

          } else if (phone == "") {

              $('#phone').after('<span class="help-block helpBlock">Зополните телефон</span>');
              $("#phone").closest(".form-group").addClass("has-error");

          } else {

              swal.disableButtons();

              $.post("/messages/callback", {
                  name: name,
                  type: '1',
                  text: text,
                  phone: phone
                  }, function(response){

                      if(response == 1){

                          swal('Заявка отправлена','В назначенное время вам перезвонят :)','success');

                      }else{

                          swal('Очень жаль','Возникла ошибка :(','error');

                      }
              });
          }

      } else {     

          swal('Очень жаль','Мы надеемся что вы свяжитесь с нами :)','error');

      }

    });

});