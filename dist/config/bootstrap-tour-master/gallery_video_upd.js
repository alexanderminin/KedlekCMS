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
    element: "#gallery_add",
    title: "Редактирование видео",
    content: "Для того чтобы отредактировать данные видео измените поля и нажмите кнопку Обновить",
    placement: "top"
  },
  {
    element: "#gallery_button_add",
    title: "Вставка кода",
    content: "Код ролика с YouTube (последняя часть ссылки на ролик)<br><img src='/dist/config/bootstrap-tour-master/resp_manager/8step.jpg' style='width:100%'>",
    placement: "top"
  },
  {
    element: "#pick_date",
    title: "Дата",
    content: "Выбираем дату (по ней будут сортироваться галерея)",
    placement: "top"
  },
  {
    element: "#add_title",
    title: "Заголовок",
    content: "Название ролика",
    placement: "top"
  },
  {
    element: "#add_descr",
    title: "Описание",
    content: "Описание ролика",
    placement: "top"
  },
  {
    element: "#add_button",
    title: "Обновление",
    content: "После заполнения всех полей нажимеам кнопку Обновить",
    placement: "right",
    onShown: function (tour) {
      $("#add_button").css({ background: "#5cb85c" });
    },
    onHidden: function (tour) {
      $("#add_button").css({ background: "" });
    }
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();

});