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
    element: "#messages",
    title: "Сообщения",
    content: "Список сообщений отправленных пользователями сайта. Вы можете удалить сообщение или пометить как прочитанное",
    placement: "top"
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();

});