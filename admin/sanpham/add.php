<div class="row2">
    <div class="add_pro">
        <h1>Thêm mới Chó</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Danh mục </label> <br>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $dm_id . '">' . $dm_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="nhapdl">
                <label> Tên Chó </label> <br>
                <input type="text" name="name" placeholder="nhập vào tên san phẩm">
            </div>
            <div class="nhapdl">
                <label>Giá Cũ</label> <br>
                <input type="text" name="price">
            </div>
            <div class="nhapdl">
                <label>Giá sale</label> <br>
                <input type="text" name="price_new">
            </div>
            <div class="nhapdl">
                <label>Hình ảnh </label> <br>
                <input type="file" name="image">
            </div>
            <div class="nhapdl">
                <label>Mô tả </label> <br>
                <textarea name="desciption" cols="30" rows="10"></textarea>
            </div>
            <div class="nhapdl">
                <label>Số Lượng </label> <br>
                <input type="text" name="soluong">
            </div>
            <div class="nhapdl">
                <label>Size chó </label> <br>
                <input type="text" name="size">
            </div>
            <div class="nutbam">
                <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>