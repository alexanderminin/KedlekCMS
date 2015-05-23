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
    element: "#gallery_list",
    title: "Список разделов галереи",
    content: "Список разделов галереи в которых хранятся альбомы и видео.",
    placement: "top"
  },
  {
    element: "#gallery_list",
    title: "Список разделов галереи",
    content: "Вы можете редактировать раздел или удалить раздел (предваритьльно удалив или переместив все элементы в этом разделе). ",
    placement: "bottom"
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();

});