<?php
require_once('./vendor/autoload.php');

class MongodbDatabase{
    function __construct()
    {
        $this->db = (new MongoDB\Client)->cw->homepage;
    }
    public function insertNewItem( $itemInfo = [])
    {
        if(empty($itemInfo)){
            return false;
        }
        // We have some data, so insert them all
        $insertable = $this->db->insertOne([
            'id'=>$itemInfo['id'],
            'heading'=>$itemInfo['heading'],
            'Desc'=>$itemInfo['Desc']
        ]);
        // return this inserted documents mongodb id
        return $insertable->getInsertedId();   

    }

    public function fethchData()
    {
        return $this->db->find();

    }





}
