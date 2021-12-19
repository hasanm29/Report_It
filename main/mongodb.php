<?php
require_once __DIR__ . '/vendor/autoload.php';
$collection = (new MongoDB\Client)->cw->homepage;
echo"connection is successful\n";
$data = "Sexual violence or sexual abuse are ways of describing any unwanted sexual act or activity.It does not matter who commits it, where or when it happened, it is never okay, and no one ever deserves for it to happen.If you have experienced sexual violence or abuse there is confidential and independent support available to help you.";

// Insertion Operation
/* 
$insertOneResult = $collection->insertOne([
    'id'=>3,
    'heading'=> 'Third heading'
]);
echo"Insertion is complete";
printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());
*/


// Deletion operation
/*
$deleteResult = $collection->deleteOne(['id'=>2,'heading'=>"Did it really worked?"]);
echo"Detetion is complete";
*/

// Update operation

/*
$updateResult = $collection->updateOne(
    ['id' => 1],['$set'=> ['Desc'=> $data]]
);
echo"Information has been updated";
*/
// Read/Find operation
/* */
$findDoc = $collection->findOne(['id'=>1]);
// var_dump($findDoc);
var_dump($findDoc->heading);
echo"\n Operation is complete";


?>