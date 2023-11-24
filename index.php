<?php
include "global.php";
include "./view/header.php";
include_once "./modol/pdo.php";
include_once "./modol/sanpham.php";
include_once "./modol/danhmuc.php";
$sanpham_home = loadall_sp_home();
$list_danhmuc = loadall_dm();
$list_dmphukien = loadall_dmpk();
$list_spphukien = loadall_sppk_home();
 if (isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act){
        case 'chitietsanpham':
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $sanpham = loadone_sp($_GET['idsp']);
                include "./view/chitietsanpham.php";
            }else{
                include "view/home.php";            
            }
        break;
    }
    
 }else{
    include "./view/home.php";
}
include "./view/footer.php";
?>