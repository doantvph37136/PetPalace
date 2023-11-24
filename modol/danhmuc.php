<?php
    function loadall_dm(){
        $sql = "SELECT*FROM danh_muc ORDER BY dm_id DESC";
        $listdm =pdo_query($sql);
        return $listdm;
    }
    function loadone_danhmuc($id){
        $sql = "SELECT*FROM danh_muc WHERE dm_id=".$id;
        $danhmuc =pdo_query_one($sql);
        return $danhmuc;
    }
    function loadall_dmpk(){
        $sql = "SELECT*FROM phu_kien ORDER BY pk_id DESC";
        $listdm =pdo_query($sql);
        return $listdm;
    }
    function loadone_dmpk($id){
        $sql = "SELECT*FROM phu_kien WHERE pk_id".$id;
        $danhmuc =pdo_query_one($sql);
        return $danhmuc;
    }
?>