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
    element: "#category_list",
    title: "Список категории",
    content: "Список категорий сайта в которых хранятся записи. Вы можете редактировать категорию или удалить категорию (предваритьльно удалив или переместив записи в этой категории). ",
    placement: "top"
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();

});