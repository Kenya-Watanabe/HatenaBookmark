<?php
function isId($array_variable,$id)
{
    # code...
    if($id>0 && $id<=4){
        return $array_variable[$id-1]['user_name'] ;
    }
    else{
        return '存在しないユーザーです。';
    }

}

$userdata[]=array('id'=>1,'user_name'=>'subaru','title'=>'title1','content'=>'content1');
$userdata[]=array('id'=>2,'user_name'=>'tanaka','title'=>'title2','content'=>'content2');
$userdata[]=array('id'=>3,'user_name'=>'ochi','title'=>'title3','content'=>'content3');
$userdata[]=array('id'=>4,'user_name'=>'kuru','title'=>'title4','content'=>'content4');
// var_dump($userdata);

$name = isId($userdata,1);
var_dump($name);
echo $name . "<br>";

?>
