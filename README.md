Данный проект создан исключительно в академических и личных целях.

<h2>История изменений:</h2>
<ul>
<li><b>0.1b</b> — Релиз на GitHub.</li>
<li><b>1.0</b> — Переход на Slim Framework + Illuminate DB</li>
</ul>

<h2>История проекта:</h2>

Часто при работе с заказчиками мне приходилось не только создавать для них продукт, но и обучать их его использованию. Сам этот процесс был порой весьма мучительный. Эмпирическим путем я пришел к тому что из всех открытых CMS проще всего было объяснять работу в WordPress, и довольно долго я делал проекты на этой CMS. Но даже в этом случае всегда были какие то проблемы, особенно когда заказчики редактировали сайт с мобильных (до версии 4.0 это было не так уж легко). Да и сам  WordPress мне казался излишне функциональным и тяжеловесным для типовых проектов. В результате возникло желание создать свою CMS для личных нужд (видимо каждый разработчик должен через это пройти), которую было бы легко использовать моим клиентам, а мне дорабатывать и поддерживать. 

<h2>Используемые библиотеки:</h2>

<ul>
<li><b>RESPONSIVE filemanager</b> — Файловый менеджер для загрузки фотографий</li>
<li><b>Slim Framework</b> — Основа проекта</li>
<li><b>Illuminate DB</b> — Взаимодействие с БД</li>
<li><b>Smarty</b> — Шаблонизатор (как для клиентской, так и административной части)</li>
<li><b>Bootstrap</b> — Общий каркас</li>
<li><b>Bootstrap Image Gallery</b> — Галерея изображений</li>
<li><b>Bootstrap Tags Input</b> — Для ввода ключевых слов</li>
<li><b>Bootstrap Tour</b> — Для вызова помощь по использованию адм. части</li>
<li><b>fancyBox</b> — Для вызова одиночных изображений вне галерей</li>
<li><b>jQuery</b> — Основа для всего и вся</li>
<li><b>Nestable</b> — Для формирования и управления пунктами меню клиентской части</li>
<li><b>Sortable</b> — Для сортировки изображений в галереи</li>
<li><b>stacktable.js</b> — Для форматирования табличных данных в списки (при исп. мобильных)</li>
<li><b>pickadate.js</b> — Выбор даты и времени</li>
<li><b>SmartMenus</b> — Движок меню клиентской части</li>
<li><b>sweetalert2</b> — Всплывающие окна клиентской части (обратный звонок и т.д.)</li>
<li><b>TinyMCE</b> — WYSIWYG редактор</li>
<li><b>liTranslit</b> — Транслитерация заголовков для автоматического создания url.</li>
<li><b>SB Admin 2</b> — Тема административной части</li>
<li><b>metisMenu</b> — Движок меню административной части</li>
</ul>

<i>(Если я ничего не упустил, то из всего этого списка, только RESPONSIVE filemanager нельзя использовать на коммерческих проектах, без согласования с автором).</i>

<h2>Минимальные требования:</h2>
<ul>
<li>PHP 5.5 или выше</li>
<li>MySQL 5.5 или выше</li>
<li>mod_rewrite (модуль Apache)</li>
</ul>

<h2>Установка:</h2>
<ul>
<li>Установите пакеты с помощью composer install</li>
<li>Переименуйте фаил настроек config_dev.php в config.php</li>
<li>Отредактируйте файл config.php</li>
<li>Запустите install.php</li>
<li>После завершения удалите install.php и массив 'install_config' в config.php</li>
</ul>
