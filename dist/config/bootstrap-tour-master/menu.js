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
    element: "#menu_add_section",
    title: "Форма доб. меню",
    content: "Эта форма добавляет новые пункты меню",
    placement: "top"
  },
  {
    element: "#menu_add_section_title_input",
    title: "Название пункта меню",
    content: "Введите название пункта меню",
    placement: "top"
  },
  {
    element: "#menu_add_section_adr_input",
    title: "Страница",
    content: "Выбирите страницу на которую будет ссылаться пункт",
    placement: "top"
  },
  {
    element: "#menu_add_section_button_add",
    title: "Кнопка добавить",
    content: "После заполнения нажмите кнопку добавить",
    placement: "right",
    onShown: function (tour) {
      $("#menu_add_section_button_add").css({ background: "#5cb85c" });
    },
    onHidden: function (tour) {
      $("#menu_add_section_button_add").css({ background: "" });
    }
  },
  {
    element: "#menu_not_active_area",
    title: "Доступные пункты меню",
    content: "После добавления новый пункт меню появляется тут",
    placement: "top"
  },
  {
    element: "#nestable2 .dd-handle:first",
    title: "Активация пункта меню",
    content: "Для активации пункта удерживайте эту область пункта и переместите его в раздел - Активные пункты меню",
    placement: "top"
  },
  {
    element: "#menu_active_area",
    title: "Активные пункты меню",
    content: "Тут отображаются активные пункты меню, которые отображаютсяна сайте",
    placement: "top"
  },
  {
    element: "#nestable",
    title: "Изменение порядка",
    content: "Так же вы можете изменить порядок и вложенность пунктов, просто перетаскивая их (как по вертикали, так и по горизонтали - изменяя вложенность)",
    placement: "top"
  },
  {
    element: "#nestable .dd-handle:first",
    title: "Деактивировать пункт меню",
    content: "Что бы отключить пункт меню перетащите его обратно в область - Доступные пункты меню",
    placement: "right"
  },
  {
    element: "#nestable .delete-button:first",
    title: "Удаление пункта меню",
    content: "Либо удалите пункт нажав эту кнопку",
    placement: "left"
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();
});