<?php
/**
 * ADMIN
 */
$app->group('/admin', function () use ($app) {
  
  $app->map('/', function () use ($app) {
    /** @var $controller \Cms\Admin\Controllers\CAdminHome */
    $controller = new \Cms\Admin\Controllers\CAdminHome($app);
    $controller->action_index();
  })->via('GET', 'POST')->name('admin');
  
  $app->map('/index', function () use ($app) {
    /** @var $controller \Cms\Admin\Controllers\CAdminHome */
    $controller = new \Cms\Admin\Controllers\CAdminHome($app);
    $controller->action_index();
  })->via('GET', 'POST')->name('admin_index');
  
  $app->group('/menu', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMenu */
      $controller = new \Cms\Admin\Controllers\CAdminMenu($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_menu');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMenu */
      $controller = new \Cms\Admin\Controllers\CAdminMenu($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_menu_index');
    $app->map('/add', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMenu */
      $controller = new \Cms\Admin\Controllers\CAdminMenu($app);
      $controller->action_add();
    })->via('GET', 'POST')->name('admin_menu_add');
    $app->map('/del/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMenu */
      $controller = new \Cms\Admin\Controllers\CAdminMenu($app);
      $controller->params = $id;
      $controller->action_del();
    })->via('GET', 'POST')->name('admin_menu_del');
    $app->map('/updateactive', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMenu */
      $controller = new \Cms\Admin\Controllers\CAdminMenu($app);
      $controller->action_updateactive();
    })->via('GET', 'POST')->name('admin_menu_updateactive');
    $app->map('/update', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMenu */
      $controller = new \Cms\Admin\Controllers\CAdminMenu($app);
      $controller->action_update();
    })->via('GET', 'POST')->name('admin_menu_update');
  });
  
  $app->group('/config', function () use ($app) {
    $app->map('/home', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_home();
    })->via('GET', 'POST')->name('admin_config_home');
    $app->map('/admin', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_admin();
    })->via('GET', 'POST')->name('admin_config_admin');
    $app->map('/site', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_site();
    })->via('GET', 'POST')->name('admin_config_site');
    $app->map('/contacts', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_contacts();
    })->via('GET', 'POST')->name('admin_config_contacts');
    $app->map('/update', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_update();
    })->via('GET', 'POST')->name('admin_config_update');
    $app->map('/sms', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_sms();
    })->via('GET', 'POST')->name('admin_config_sms');
    $app->map('/social', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_social();
    })->via('GET', 'POST')->name('admin_config_social');
    $app->map('/analytics', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminConfig */
      $controller = new \Cms\Admin\Controllers\CAdminConfig($app);
      $controller->action_analytics();
    })->via('GET', 'POST')->name('admin_config_analytics');
  });
  
  $app->group('/login', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminController */
      $controller = new \Cms\Admin\Controllers\CAdminController($app);
      $controller->action_login();
    })->via('GET', 'POST')->name('admin_login');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminController */
      $controller = new \Cms\Admin\Controllers\CAdminController($app);
      $controller->action_login();
    })->via('GET', 'POST')->name('admin_login_index');
    $app->map('/check', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminController */
      $controller = new \Cms\Admin\Controllers\CAdminController($app);
      $controller->action_check();
    })->via('GET', 'POST')->name('admin_login_check');
    $app->map('/auth', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminController */
      $controller = new \Cms\Admin\Controllers\CAdminController($app);
      $controller->action_auth();
    })->via('GET', 'POST')->name('admin_login_auth');
    $app->map('/logout', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminController */
      $controller = new \Cms\Admin\Controllers\CAdminController($app);
      $controller->action_logout();
    })->via('GET', 'POST')->name('admin_login_logout');
  });
  
  $app->group('/users', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_users');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_users_index');
    $app->map('/add', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->action_add();
    })->via('GET', 'POST')->name('admin_users_add');
    $app->map('/update', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->action_update();
    })->via('GET', 'POST')->name('admin_users_update');
    $app->map('/updatepass', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->action_updatepass();
    })->via('GET', 'POST')->name('admin_users_updatepass');
    $app->map('/user/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->params = $id;
      $controller->action_user();
    })->via('GET', 'POST')->name('admin_users_user');
    $app->map('/del/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminUser */
      $controller = new \Cms\Admin\Controllers\CAdminUser($app);
      $controller->params = $id;
      $controller->action_del();
    })->via('GET', 'POST')->name('admin_users_del');
  });
  
  $app->group('/messages', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMessages */
      $controller = new \Cms\Admin\Controllers\CAdminMessages($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_messages');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMessages */
      $controller = new \Cms\Admin\Controllers\CAdminMessages($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_messages_index');
    $app->map('/read/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMessages */
      $controller = new \Cms\Admin\Controllers\CAdminMessages($app);
      $controller->params = $id;
      $controller->action_read();
    })->via('GET', 'POST')->name('admin_messages_read');
    $app->map('/del/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminMessages */
      $controller = new \Cms\Admin\Controllers\CAdminMessages($app);
      $controller->params = $id;
      $controller->action_del();
    })->via('GET', 'POST')->name('admin_messages_del');
  });
  
  $app->group('/home', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminHome */
      $controller = new \Cms\Admin\Controllers\CAdminHome($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_home');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminHome */
      $controller = new \Cms\Admin\Controllers\CAdminHome($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_home_index');
  });

  $app->group('/pages', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_pages');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_pages_index');
    $app->map('/add', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_add();
    })->via('GET', 'POST')->name('admin_pages_add');
    $app->map('/del/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->params = $id;
      $controller->action_del();
    })->via('GET', 'POST')->name('admin_pages_del');
    $app->map('/update', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_update();
    })->via('GET', 'POST')->name('admin_pages_update');
    $app->map('/addpage', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_addpage();
    })->via('GET', 'POST')->name('admin_pages_addpage');
    $app->map('/page/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->params = $id;
      $controller->action_page();
    })->via('GET', 'POST')->name('admin_pages_page');
    $app->map('/unic', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_unic();
    })->via('GET', 'POST')->name('admin_pages_unic');
    $app->map('/unicexist', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminPage */
      $controller = new \Cms\Admin\Controllers\CAdminPage($app);
      $controller->action_unicexist();
    })->via('GET', 'POST')->name('admin_pages_unicexist');
  });

  $app->group('/category', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_category');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_category_index');
    $app->map('/add_category', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_add_category();
    })->via('GET', 'POST')->name('admin_category_add_category');
    $app->map('/update_category', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_update_category();
    })->via('GET', 'POST')->name('admin_category_update_category');
    $app->map('/addcategory', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_addcategory();
    })->via('GET', 'POST')->name('admin_category_addcategory');
    $app->map('/updcategory/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->params = $id;
      $controller->action_updcategory();
    })->via('GET', 'POST')->name('admin_category_updcategory');
    $app->map('/unic', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_unic();
    })->via('GET', 'POST')->name('admin_category_unic');
    $app->map('/unicexist', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_unicexist();
    })->via('GET', 'POST')->name('admin_category_unicexist');
    $app->map('/delcategory/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->params = $id;
      $controller->action_delcategory();
    })->via('GET', 'POST')->name('admin_category_delcategory');
    $app->map('/thumb_path', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_thumb_path();
    })->via('GET', 'POST')->name('admin_category_thumb_path');
    $app->map('/add_record', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_add_record();
    })->via('GET', 'POST')->name('admin_category_add_record');
    $app->map('/update_record', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_update_record();
    })->via('GET', 'POST')->name('admin_category_update_record');
    $app->map('/records/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->params = $id;
      $controller->action_records();
    })->via('GET', 'POST')->name('admin_category_records');
    $app->map('/addrecord', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_addrecord();
    })->via('GET', 'POST')->name('admin_category_addrecord');
    $app->map('/updrecord/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->params = $id;
      $controller->action_updrecord();
    })->via('GET', 'POST')->name('admin_category_updrecord');
    $app->map('/delrecord/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->params = $id;
      $controller->action_delrecord();
    })->via('GET', 'POST')->name('admin_category_delrecord');
    $app->map('/unic_record', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_unic_record();
    })->via('GET', 'POST')->name('admin_category_unic_record');
    $app->map('/unicexist_record', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminCategory */
      $controller = new \Cms\Admin\Controllers\CAdminCategory($app);
      $controller->action_unicexist_record();
    })->via('GET', 'POST')->name('admin_category_unicexist_record');
  });

  $app->group('/gallerylist', function () use ($app) {
    $app->map('/', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_gallerylist');
    $app->map('/index', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_index();
    })->via('GET', 'POST')->name('admin_gallerylist_index');
    $app->map('/add_gallery_list', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_add_gallery_list();
    })->via('GET', 'POST')->name('admin_gallerylist_add_gallery_list');
    $app->map('/update_gallery_list', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_update_gallery_list();
    })->via('GET', 'POST')->name('admin_gallerylist_update_gallery_list');
    $app->map('/unic', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_unic();
    })->via('GET', 'POST')->name('admin_gallerylist_unic');
    $app->map('/unicexist', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_unicexist();
    })->via('GET', 'POST')->name('admin_gallerylist_unicexist');
    $app->map('/addgallerylist', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_addgallerylist();
    })->via('GET', 'POST')->name('admin_gallerylist_addgallerylist');
    $app->map('/updgallerylist/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_updgallerylist();
    })->via('GET', 'POST')->name('admin_gallerylist_updgallerylist');
    $app->map('/del_gallery_list/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_del_gallery_list();
    })->via('GET', 'POST')->name('admin_gallerylist_del_gallery_list');
    $app->map('/thumb_path', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_thumb_path();
    })->via('GET', 'POST')->name('admin_gallerylist_thumb_path');
    $app->map('/thumb', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_thumb();
    })->via('GET', 'POST')->name('admin_gallerylist_thumb');
    $app->map('/add', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_add();
    })->via('GET', 'POST')->name('admin_gallerylist_add');
    $app->map('/update', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_update();
    })->via('GET', 'POST')->name('admin_gallerylist_update');
    $app->map('/update_video', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_update_video();
    })->via('GET', 'POST')->name('admin_gallerylist_update_video');
    $app->map('/unic_gallery', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_unic_gallery();
    })->via('GET', 'POST')->name('admin_gallerylist_unic_gallery');
    $app->map('/unicexist_gallery', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_unicexist_gallery();
    })->via('GET', 'POST')->name('admin_gallerylist_unicexist_gallery');
    $app->map('/del/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_del();
    })->via('GET', 'POST')->name('admin_gallerylist_del');
    $app->map('/gallery/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_gallery();
    })->via('GET', 'POST')->name('admin_gallerylist_gallery');
    $app->map('/addvideo', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_addvideo();
    })->via('GET', 'POST')->name('admin_gallerylist_addvideo');
    $app->map('/addgallery', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_addgallery();
    })->via('GET', 'POST')->name('admin_gallerylist_addgallery');
    $app->map('/updgallery/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_updgallery();
    })->via('GET', 'POST')->name('admin_gallerylist_updgallery');
    $app->map('/updgalleryvideo/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_updgalleryvideo();
    })->via('GET', 'POST')->name('admin_gallerylist_updgalleryvideo');
    $app->map('/itemadd', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_itemadd();
    })->via('GET', 'POST')->name('admin_gallerylist_itemadd');
    $app->map('/itemsupdate', function () use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->action_itemsupdate();
    })->via('GET', 'POST')->name('admin_gallerylist_itemsupdate');
    $app->map('/delitem/:id', function ($id) use ($app) {
      /** @var $controller \Cms\Admin\Controllers\CAdminGallery */
      $controller = new \Cms\Admin\Controllers\CAdminGallery($app);
      $controller->params = $id;
      $controller->action_delitem();
    })->via('GET', 'POST')->name('admin_gallerylist_delitem');
  });
});


/**
 * FRONT
 */

$app->map('/', function () use ($app) {
  /** @var $controller \Cms\Front\Controllers\CFrontHome */
  $controller = new \Cms\Front\Controllers\CFrontHome($app);
  $controller->action_index();
})->via('GET', 'POST')->name('base');

$app->map('/index', function () use ($app) {
  /** @var $controller \Cms\Front\Controllers\CFrontHome */
  $controller = new \Cms\Front\Controllers\CFrontHome($app);
  $controller->action_index();
})->via('GET', 'POST')->name('index');

$app->map('/home', function () use ($app) {
  /** @var $controller \Cms\Front\Controllers\CFrontHome */
  $controller = new \Cms\Front\Controllers\CFrontHome($app);
  $controller->action_index();
})->via('GET', 'POST')->name('home');

$app->group('/messages', function () use ($app) {
  $app->map('/callback', function () use ($app) {
    /** @var $controller \Cms\Front\Controllers\CFrontMessages */
    $controller = new \Cms\Front\Controllers\CFrontMessages($app);
    $controller->action_callback();
  })->via('GET', 'POST')->name('messages_callback');
  $app->map('/question', function () use ($app) {
    /** @var $controller \Cms\Front\Controllers\CFrontMessages */
    $controller = new \Cms\Front\Controllers\CFrontMessages($app);
    $controller->action_question();
  })->via('GET', 'POST')->name('messages_question');
  $app->map('/contactform', function () use ($app) {
    /** @var $controller \Cms\Front\Controllers\CFrontMessages */
    $controller = new \Cms\Front\Controllers\CFrontMessages($app);
    $controller->action_contactform();
  })->via('GET', 'POST')->name('messages_contactform');
});

$app->map('/contact', function () use ($app) {
  /** @var $controller \Cms\Front\Controllers\CFrontContact */
  $controller = new \Cms\Front\Controllers\CFrontContact($app);
  $controller->action_index();
})->via('GET', 'POST')->name('contact');

$app->map('/:link_1', function ($link_1) use ($app) {
  /** @var $controller \Cms\Front\Controllers\CFrontRouting */
  $controller = new \Cms\Front\Controllers\CFrontRouting($app);
  $controller->params[0] = $link_1;
  $controller->action_index();
})->via('GET', 'POST');
$app->map('/:link_1/:link_2', function ($link_1, $link_2) use ($app) {
  /** @var $controller \Cms\Front\Controllers\CFrontRouting */
  $controller = new \Cms\Front\Controllers\CFrontRouting($app);
  $controller->params[0] = $link_1;
  $controller->params[1] = $link_2;
  $controller->action_index();
})->via('GET', 'POST');
