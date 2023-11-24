<?php extract($sanpham); ?>
        <div class="chitiet-product">
            <div class="imagechitiet">
                <?php 
                $hinh = $hinh_path.$sp_image;
                echo '<img src="'.$hinh.'" alt="" width="550px">';
                ?>
            </div>
            <div class="mota-sp1">
                <h1><?php echo $sp_name; ?></h1>
                <p><?php echo $sp_price; ?> VNĐ</p>
                <div class="chitiet">
                    <h4>Giá bao gồm</h4>
                    <div>
                        <li>Phí Vận Chuyển.</li>
                        <li>Bảo hành sức khỏe 1 năm.</li>
                        <li>Hỗ trợ thú y miễn phí trọn đời.</li>
                        <li>Giảm trọn đời 20% Spa Grooming; 5% phụ kiện.</li>
                        <li>Hợp đồng.</li>
                        <li>Sổ Theo dõi sức khỏe</li>
                        <li>Tảy giun</li>
                        <li>Điều trị chống ký sinh trùng.</li> 
                        <li>Tiêm chủng cập nhật.</li> 
                        <li>Sách hướng dẫn chăm sóc.</li> 
                    </div>
                    <input type="button" value="Mua Ngay">
                </div>
            </div>
        </div>
        <div class="mota-sp2">
            <h2>Mô Tả</h2>
            <p><?php echo $sp_mota; ?></p>
        </div>
        <div class="sanpham-khac">
            <div>
                <h3>Mẫu chó khác</h3>
                <hr>
            </div>
            <div class="listsp-khac">
                <div class="sanpham">
                    <img src="image/C2409-C13022-5.jpg" alt="sản phẩm khác" width="300px">
                    <h3>Alaska Oversize Xám Trắng Cái C12814</h3>
                    <p>13.450.000 VNĐ</p>
                    <div class="buttom">
                    <a href=""><input type="button" value="Mua Ngay"></a>
                    </div>
                </div>
            </div>
        </div>
