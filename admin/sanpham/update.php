<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $sp_image;
if (is_file($hinhpath)) {
    $hinhpath = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
} else {
    $hinhpath = "No file img!";
}
?>
<div class="row2">
    <div class="add_pro">
        <h1>Cập Nhật CHó</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Danh mục </label> <br>
                <select name="iddm" id="">
                    <option value="0" disabled>Tùy chọn</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        if ($dm_id == $danhmuc['dm_id']) {
                            echo '<option value="' . $danhmuc['dm_id'] . '" selected>' . $danhmuc['dm_name'] . '</option>';
                        } else {
                            echo '<option value="' . $danhmuc['dm_id'] . '">' . $danhmuc['dm_name'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="nhapdl">
                <label> Tên Chó </label> <br>
                <input type="text" name="name" value="<?=$sp_name?>">
            </div>
            <div class="nhapdl">
                <label>Giá Cũ</label> <br>
                <input type="text" name="price" value="<?=$sp_price?>">
            </div>
            <div class="nhapdl">
                <label>Giá sale</label> <br>
                <input type="text" name="price_new" value="<?=$sp_price_new?>">
            </div>
            <div class="nhapdl">
                <label>Hình ảnh </label> <br>
                <?php echo $hinhpath ?>
                <input type="file" name="image" >
            </div>
            <div class="nhapdl">
                <label>Mô tả </label> <br>
                <textarea name="desciption" cols="30" rows="10" value="<?=$sp_mota?>"></textarea>
            </div>
            <div class="nhapdl">
                <label>Số Lượng </label> <br>
                <input type="text" name="soluong" value="<?=$sp_soluong?>">
            </div>
            <div class="nhapdl">
                <label>Size chó </label> <br>
                <input type="text" name="size" value="<?=$size_id?>">
            </div>
            <div class="nutbam">
                <input type="hidden" name="sp_id" value="<?=$sp_id?>">
                <input class="mr20" name="capnhat" type="submit" value="Chỉnh Sửa">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            
        </form>
    </div>
</div>