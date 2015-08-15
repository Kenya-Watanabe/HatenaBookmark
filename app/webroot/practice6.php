<?php
$userdata[]=array('id'=>1,'user_name'=>'subaru','title'=>'title1','content'=>'content1');
$userdata[]=array('id'=>2,'user_name'=>'tanaka','title'=>'title2','content'=>'content2');
$userdata[]=array('id'=>3,'user_name'=>'ochi','title'=>'title3','content'=>'content3');
$userdata[]=array('id'=>4,'user_name'=>'kuru','title'=>'title4','content'=>'content4');
// var_dump($userdata);
foreach ($userdata as $key => $value) {
    foreach($value as $content){
    echo $content . "<br>";
    // echo $key . "<br>" ;
}
}
?>
