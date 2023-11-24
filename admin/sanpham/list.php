<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH Chó PetPalace</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <form action="index.php?act=listsp" method="post">
                    <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $dm_id . '">' . $dm_name . '</option>';
                        }
                        ?>
                    </select>
                </form>
                <table>
                    <tr>
                        <th>Mã chó</th>
                        <th>Tên Chó</th>
                        <th>Giá</th>
                        <th>Giá Sale</th>
                        <th>Hình</th>
                        <th>Lượt Xem</th>
                        <th>số lượng</th>
                        <th>Loại chó</th>
                        <th>size</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    foreach ($listsanpham as $sanpham) :
                        extract($sanpham);
                        $hinhpath = "../upload/" . $sp_image;
                        $suasp = "index.php?act=suasp&idsp=" . $sp_id;
                        $hard_delete = "index.php?act=hard_delete&idsp=" . $sp_id;
                        $soft_delete = "index.php?act=soft_delete&idsp=" . $sp_id;
                        if (is_file($hinhpath)) {
                            $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                        } else {
                            $hinhpath = "No file img!";
                        }
                    ?>
                        <tr>
                            <td><?= $sp_id ?></td>
                            <td><?= $sp_name ?></td>
                            <td><?= $sp_price ?></td>
                            <td><?= $sp_price_new ?></td>
                            <td><?= $hinhpath ?></td>
                            <td><?= $sp_view ?></td>
                            <td><?= $sp_soluong ?></td>
                            <td>
                                <?php $danhmuc = loadone_danhmuc($dm_id);
                                echo $danhmuc['dm_name'];
                                ?>
                            </td>
                            <td><?= $size_id ?></td>
                            <td>
                                <a href="<?=$suasp?>"><input type="button" value="Sửa"> </a>
                                <a href="<?=$hard_delete?>"><input type="button" value="Xóa cứng" onclick="return confirm('Bạn có chắc chắn muốn xóa')"></a>
                                <a href="<?=$soft_delete?>"><input type="button" value="Xóa mềm" onclick="return confirm('Bạn có chắc chắn muốn xóa')"></a>
                            </td>
                            
                            
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="nutbam">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>