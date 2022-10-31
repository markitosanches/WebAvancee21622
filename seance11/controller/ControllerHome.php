<?php

class ControllerHome{

    public function index(){
      //return 'Welcome';
      $view = new View('home-index');
      $view->output('text_welcome', 'Welcome');
      $view->output('text_name', 'Peter');
    }

    public function error(){
        $view = new View('home-error');
    }
}