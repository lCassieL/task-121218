<?php
namespace core\controllers;
use core\models\Main as Core_models_Main;
use core\View as Core_View;
abstract class Main {
    public $model;
    public $view;
    public function __construct() {
        // $this->model = new Core_models_Main();
        $this->view = new Core_View();//todo
        // $this->view->render($this->model->getAll());
    }
    abstract public function index();
}
