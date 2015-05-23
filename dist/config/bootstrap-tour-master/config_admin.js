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
    element: "#adm_settings",
    title: "Административный интерфейс",
    content: "Настройки административного интерфейса",
    placement: "top"
  },
  {
    element: "#help_button",
    title: "Включение подсказок",
    content: "Эта кнопка включает систему подсказок в адм.интерфесе.",
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