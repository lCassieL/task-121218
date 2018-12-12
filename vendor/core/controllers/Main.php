<?php
use models\Main as CModMain;
abstract class Main {
    public $model;
    public $view;
    public function __construct() {
        $this->model = new CModMain();
        $this->view = new View();//todo
    }
    abstract public function index();
}
