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
    element: "#home",
    title: "Главная страница",
    content: "Эти данные выводятся на сайте на главной странице",
    placement: "top"
  },
  {
    element: "#home_url ",
    title: "Ссылка на главную страницу",
    content: "В данном списке вы можете выбрать страницу, которая будет главной",
    placement: "top"
  },
  {
    element: "#home_html ",
    title: "Доп. HTML блок",
    content: "Этот блок выводится на главной странице вместе с выбранной страницей другой информацией",
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