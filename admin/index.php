<?php
include "../modol/pdo.php";
include "../modol/sanpham.php";
include "../modol/danhmuc.php";
include "../global.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listsp':
            $listdanhmuc = loadall_dm();
            $listsanpham = loadall_sp_home();
            include "sanpham/list.php";
            break;
        case 'addsp':
            $listdanhmuc = loadall_dm();
            include "sanpham/add.php";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $dm_id = $_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $price_new  = $_POST['price_new'];
                $soluong = $_POST['soluong'];
                $description = $_POST['desciption'];
                $size = $_POST['size'];
                $hinh = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    echo "bạn đã upload thành công !";
                } else {
                    echo "bạn đã upload không thành công !";
                }
                insert_sp($name, $hinh, $price, $price_new, $soluong, $description, $size, $dm_id);
                $thanhcong = "bạn đã thêm thành công ! ";
            }
            break;
        case "suasp":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $sanpham = loadone_sp($_GET['idsp']);
            }
            $listdanhmuc = loadall_dm();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $sp_id = $_POST['sp_id'];
                $dm_id = $_POST['iddm'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $price_new  = $_POST['price_new'];
                $soluong = $_POST['soluong'];
                $description = $_POST['desciption'];
                $size = $_POST['size'];
                $hinh = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    echo "bạn đã upload thành công !";
                } else {
                    echo "bạn đã upload không thành công !";
                }
                update_sp($sp_id,$name,$hinh,$price,$price_new,$soluong,$description,$size,$dm_id);
                header("location: ?act=listsp");die;
            }
            $listdanhmuc = loadall_dm();
            $listsanpham = loadall_sp_home();
            break;
    }
}
