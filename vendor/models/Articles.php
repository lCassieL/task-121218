<?php
namespace models;
use core\models\Articles as CModArt;
class Articles extends CModArt {
    public function getAll(){
        return ['news1','news2'];
    }
}
