<?php
namespace Cms\Lib;

class SlimSessionHandler extends \Slim\Middleware {

  /**
   * Call
   * Perform actions specific to this middleware and optionally
   * call the next downstream middleware.
   */
  public function call()
  {
    $this->loadSession();
    $this->next->call();
  }

  protected function loadSession()
  {
    if (session_id() === '') {
      session_start();
    }
  }
}