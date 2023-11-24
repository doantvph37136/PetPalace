<?php
function loadall_sp_home()
{
    $sql = "SELECT*FROM san_pham ORDER BY sp_id DESC";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sp($id)
{
    $sql = "SELECT*FROM san_pham WHERE sp_id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_sppk_home()
{
    $sql = "SELECT*FROM sp_phukien ORDER BY sppk_id DESC";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sppk($id)
{
    $sql = "SELECT*FROM sp_phukien WHERE sppk_id=" . $id;
    $listsp = pdo_query_one($sql);
    return $listsp;
}
function del_sp($id)
{
    $sql = "DELETE FROM san_Pham WHERE sp_id=" . $id;
    $listsp = pdo_execute($sql);
    return $listsp;
}
function insert_sp($name, $image, $price, $price_new, $soluong, $description, $size, $dm_id)
{
    $sql = "INSERT INTO san_pham (sp_name,sp_image,sp_price,sp_price_new,sp_soluong,sp_mota,size_id,dm_id) VALUES('$name','$image','$price','$price_new','$soluong','$description','$size','$dm_id')";
    pdo_execute($sql);
}
function update_sp($sp_id, $name, $image, $price, $price_new, $soluong, $description, $size, $dm_id)
{
    if ($image != "") {
        $sql = "UPDATE `san_pham` SET `sp_id` = '{$sp_id}', `sp_name` = '{$name}', `sp_image` = '{$image}',`sp_price` = '{$price}',`sp_price_new` = '{$price_new}',`sp_soluong` = '{$soluong}',`sp_mota` = '{$description}',`size_id` = '{$size}',`dm_id` = '{$dm_id}'  WHERE `sp_id` = $sp_id";
    } else {
        $sql = "UPDATE `san_pham` SET `sp_id` = '{$sp_id}', `sp_name` = '{$name}', `sp_image` = '{$image}',`sp_price` = '{$price}',`sp_price_new` = '{$price_new}',`sp_soluong` = '{$soluong}',`sp_mota` = '{$description}',`size_id` = '{$size}',`dm_id` = '{$dm_id}'  WHERE `sp_id` = $sp_id";
    }

    // echo $sql;
    pdo_execute($sql);
}
