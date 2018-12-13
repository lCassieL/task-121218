<?php
// namespace controllers;
use core\controllers\Main as Core_Controllers_Main;
// use core\controllers\Main as CConMain;
class Main extends Core_Controllers_Main{
    public function index(){
        $this->model = new Articles();
        $a = $this->model->getAll();
        var_dump($a);
    }
}
