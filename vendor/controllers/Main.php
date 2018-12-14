<?php
// namespace controllers;
use core\controllers\Main as Core_Controllers_Main;
// use core\controllers\Main as CConMain;
class Main extends Core_Controllers_Main{
    public function index(){
        $this->model = new Articles();
        $news = $this->model->getAll();
        foreach($news as $news_item){
        	echo $news_item['name'].'<br>';
        	echo $news_item['text'].'<br>';
        	echo $news_item['author'].'<br>';
        }
    }
}
