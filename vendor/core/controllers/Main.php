<?php
use models\Main as CModMain;
use View as CVie;
abstract class Main {
    public $model;
    public $view;
    public function __construct() {
        $this->model = new CModMain();
        $this->view = new CVie();//todo
        $this->view->render($this->model->getAll());
    }
    abstract public function index();
}
