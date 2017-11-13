<?php
function guid(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*1000000);
        $charid = md5(uniqid(rand(), true));
        $hyphen = chr(45);// "-"
        $uuid = .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
        return $uuid;
    }
}
echo guid();//df5b1241-3857-050d-d79b-52a3295adcd5
?>
