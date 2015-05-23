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
    element: "#site_settings",
    title: "Сайт",
    content: "Настройки сайта",
    placement: "top"
  },
  {
    element: "#site_title",
    title: "Заголовок сайта",
    content: "Заголовок сайта выводится вместе с заголовком страницы",
    placement: "top"
  },
  {
    element: "#site_logo",
    title: "Логотип сайта",
    content: "Логотип сайта выводится на всех страницах",
    placement: "top"
  },
  {
    element: "#site_favicon",
    title: "Иконка сайта",
    content: "Иконка отображается на вкладке в браузере рядом с заголовком страницы",
    placement: "top"
  },
  {
    element: "#record_per_page",
    title: "Кол-во записей",
    content: "Настройка регулирует кол-во записей которые будут выводится на странице категорий",
    placement: "top"
  },
  {
    element: "#gallery_per_page",
    title: "Кол-во записей",
    content: "Настройка регулирует кол-во записей которые будут выводится в разделе галереи",
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