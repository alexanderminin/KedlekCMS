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
    element: "#contact",
    title: "Страница Контакты",
    content: "Эти данные выводятся на сайте в разделе контакты",
    placement: "top"
  },
  {
    element: "#contact_map ",
    title: "Код интерактивной карты",
    content: "Сдесь размещается код карты (yandex, google, 2gis)",
    placement: "top"
  },
  {
    element: "#contact_html ",
    title: "Доп. информация",
    content: "Этот блок выводится на странице контактов вместе с другой информацией",
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