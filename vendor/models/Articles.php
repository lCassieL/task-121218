<?php
class Articles extends \core\models\Main {
    public function getAll(){
        return array(
        	array(
        		'name'=> 'News1',
        		'text'=>'Text of news1',
        		'author'=>'Vasya'
        	),
        	array(
        		'name'=> 'News2',
        		'text'=>'Text of news2',
        		'author'=>'Petya'
        	)
        );
    }
}
