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

  steps: [
  {
    element: "#page_param_url",
    title: "Адрес страницы",
    content: "Адрес страницы должен быть написан латинецей и без пробелов (вместо пробелов можно использовать символ ' _ ' )",
    placement: "top"
  },
  {
    element: "#seo_param",
    title: "Настройки для SEO продвижения",
    content: "Эти настройки необходимы для успешной индексации вашего сайта поисковыми системами (но они не обязательны)",
    placement: "top"
  },
  {
    element: "#seo_param_title",
    title: "Заголовок",
    content: "Обычно заголовок равен основному, но вы можете его изменить",
    placement: "top"
  },
  {
    element: "#seo_param_descr",
    title: "Описание",
    content: "Краткое описание содержимого страницы (эта та часть текста которая всплывает в поисковых системах при поиске)",
    placement: "top"
  },
  {
    element: "#seo_param_keywords",
    title: "Ключевые слова",
    content: "Это слова, словосочетания по котором люди могут найти вашу страницу в поисковых системах (перечисление через запятую)",
    placement: "top"
  },
  {
    element: "#page_text",
    title: "Содержимое страницы",
    content: "Тут вы заполнятие содержимое страницы используя визуальный редактор",
    placement: "top"
  },
  {
    element: "#add_button",
    title: "Сохранение",
    content: "После изменения полей нажимеам кнопку Сохранить страницу",
    placement: "top",
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