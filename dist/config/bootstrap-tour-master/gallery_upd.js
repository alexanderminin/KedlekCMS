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
    element: "#gallery_edit",
    title: "Редактирование галереи",
    content: "Для того чтобы отредактировать данные альбома измените поля и нажмите кнопку Обновить",
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
    content: "Краткое описание содержимого альбома (эта та часть текста которая всплывает в поисковых системах при поиске)",
    placement: "top"
  },
  {
    element: "#seo_param_keywords",
    title: "Ключевые слова",
    content: "Это слова, словосочетания по котором люди могут найти ваш альбом в поисковых системах (перечисление через запятую)",
    placement: "top"
  },
  {
    element: "#gallery_add",
    title: "Добавление фотографий",
    content: "Добавление фото в содержимое альбома",
    placement: "top"
  },
  {
    element: "#file_manager",
    title: "Файловый менеджер",
    content: "После нажатия появится файловый менеджер<br><img src='/dist/config/bootstrap-tour-master/resp_manager/1step.jpg' style='width:100%'>",
    placement: "bottom"
  },
  {
    element: "#file_manager",
    title: "Файловый менеджер",
    content: "Далее необходимо нажать эту кнопку и развернуть меню<br><img src='/dist/config/bootstrap-tour-master/resp_manager/2step.jpg' style='width:100%'>",
    placement: "bottom"
  },
  {
    element: "#file_manager",
    title: "Файловый менеджер",
    content: "Далее нажимаем на меню загрузки файла<br><img src='/dist/config/bootstrap-tour-master/resp_manager/3step.jpg' style='width:100%'>",
    placement: "bottom"
  },
  {
    element: "#file_manager",
    title: "Файловый менеджер",
    content: "В появившемся окне нажимаем в центр и выбираем файл или группу файлов для загрузки<br><img src='/dist/config/bootstrap-tour-master/resp_manager/4step.jpg' style='width:100%'>",
    placement: "bottom"
  },
  {
    element: "#file_manager",
    title: "Файловый менеджер",
    content: "После загрузки возвращаемся к списку<br><img src='/dist/config/bootstrap-tour-master/resp_manager/5step.jpg' style='width:100%'>",
    placement: "bottom"
  },
  {
    element: "#file_manager",
    title: "Файловый менеджер",
    content: "Теперь можно выбрать файл для вставки (нажав на изображение)<br><img src='/dist/config/bootstrap-tour-master/resp_manager/6step.jpg' style='width:100%'>",
    placement: "bottom"
  },
  {
    element: "#gallery_shuff",
    title: "Порядок элементов",
    content: "После добавления фотографий в альбом, вы можете их удалить нажав на иконку в углу фотографии, а так же поменять порядок фотографий просто перетащив их удерживая нажатием",
    placement: "top"
  }
]});


$(document).on("click", "[data-demo]", function() {

      tour.restart();

});