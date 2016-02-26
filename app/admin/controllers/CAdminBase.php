<?php
namespace Cms\Admin\Controllers;

abstract class CAdminBase {

  /**
   * @var \Slim\Slim
   */
  private $context;

  public function __construct(\Slim\Slim $context)
  {
    $this->context = $context;
  }

  protected static $instance;
  public static function getInstance(\Slim\Slim $app)
  {
    if (is_null(self::$instance[get_called_class()])) {
      self::$instance[get_called_class()] = new static($app);
    }
    return self::$instance[get_called_class()];
  }

  protected function getContext() {
    return $this->context;
  }

}