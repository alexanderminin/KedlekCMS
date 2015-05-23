var tour = new Tour({

  template: "<div class='popover tour'>"+
    "<div class='arrow'></div>"+
    "<h3 class='popover-title'></h3>"+
    "<div class='popover-content'></div>"+
    "<div class='popover-navigation'>"+
      "<div class='btn-group'>"+
        "<button class='btn btn-sm btn-default' data-role='prev'>« Пред</button>"+
        "<button class='btn btn-sm btn-default' data-role='next'>След »</button>"+
      "</div>"+
      "<button class='btn btn-sm btn-default' data-role='end'>Закр.</button>"+
    "</div>"+
    "</nav>"+
  "</div>",




  backdrop: true,
  backdropPadding: 0,

  steps: [
  {
    element: "#sms_active_button",
    title: "Включение смс уведомлений",
    content: "Эта кнопка включает систему смс уведомлений, которые приходят на ваш телефон. ВНИМАНИЕ: Сообщения платные, более подробно о тарифах вы можете узнать <a href='http://www.bytehand.com/tariffs' target='_blank'>тут</a>",
    placement: "top"
  },
  {
    element: "#config_phone",
    title: "Номер телефона",
    content: "На этот номер телефона будут приходить уведомления (телефон должен быть в формате: 79001234455).",
    placement: "top"
  },
  {
    element: "#config_message",
    title: "Текст сообщений",
    content: "Эти поля содержат текст сообщений который приходит к вам на телефон в том или ином случае",
    placement: "top"
  },
  {
    element: "#config_message_descr",
    title: "Подстановка данных",
    content: "Так же при составлении текста сообщений вы можете использовать элементы подмены, которые будут земенены на те значения которые ввел пользователь. Пример: {NAME} будет заменено на имя которое введет пользователь при отправке сообщения",
    placement: "top"
  },
  {
    element: "#config_sms_balance",
    title: "Баланс",
    content: "Если смс сообщения активны, тут отображается баланс на вашем счету для отправки сообщений",
    placement: "top"
  },
  {
    element: "#config_save_button",
    title: "Сохранение изменений",
    content: "Для того чтобы сохранить изменения, нажмите эту кнопку",
    placement: "top",
    onShown: function (tour) {
      $("#config_save_button").css({ background: "#5cb85c" });
    },
    onHidden: function (tour) {
      $("#config_save_button").css({ background: "" });
    }
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();
});