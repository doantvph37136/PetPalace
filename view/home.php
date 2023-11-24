
<div class="banner">
    <img src="image/banner-cho1.webp" alt="">
    <div class="phong">
    </div>
    <h3>PetPalace</h3>
    <p>Những chú chó luôn luôn là bạn</p>
    <a href=""><input type="button" value="Mua Ngay"></a>
</div>
<div class="noidung1">
    <div class="conten1">
        <h3>Giống Chó Cảnh</h3>
        <img src="image/azpet-banner-cho-canh-desktop.jpg" alt="" width="240">
    </div>
    <div class="conten2">
        <div class="thanhdm">
            <div class="listdm">
                <div class="danhmuc">
                    <h4>Phổ Biến Nhất</h4>
                </div>

                <?php foreach ($list_danhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<div class="danhmuc">
                        <h4>'.$dm_name.'</h4>
                    </div>';
                } ?>
            </div>
            <div class="next">
                <input type="button" value="next">
                <input type="button" value="Pre">
            </div>
        </div>
        <div class="listsp">
            <div class="sanpham">
                <img src="image/C2409-C13022-5.jpg" alt="" width="193" height="204">
                <h4>
                    <a href="">Chó cảnh</a>
                </h4>
            </div>
            <?php foreach($sanpham_home as $sanpham){
                extract($sanpham);
                $link = "index.php?act=chitietsanpham&idsp=".$sp_id;
                $hinh = $hinh_path.$sp_image;
                echo '<div class="sanpham">
                <img src="'.$hinh.'" alt="" width="193" height="204">
                <h4>
                    <a href="'.$link.'">'.$sp_name.'</a>
                </h4>
            </div>';
            }?>
        </div>
    </div>

</div>
<div class="noidung1">
    <div class="conten1">
        <h3>Phụ Kiện Cho Cún</h3>
        <img src="image/azpet-banner-cho-canh-desktop.jpg" alt="" width="240">
    </div>
    <div class="conten2">
        <div class="thanhdm">
            <div class="listdm">
                <div class="danhmuc">
                    <a href="">
                        <h4>Phổ Biến Nhất</h4>
                    </a>
                </div>
                <?php foreach ($list_dmphukien as $danhmuc) {
                    extract($danhmuc);
                    echo '<div class="danhmuc">
                        <h4>'.$pk_name.'</h4>
                    </div>';
                } ?>
            </div>
            <div class="next">
                <input type="button" value="next">
                <input type="button" value="Pre">
            </div>
        </div>
        <div class="listsp">
            <div class="sanpham">
                <img src="image/thucan.jpg" alt="" width="193" height="204">
                <h4>Thức ăn cho chó lớn</h4>
            </div>
            <?php foreach($list_spphukien as $sanpham){
                extract($sanpham);
                $hinh = $hinh_path.$sppk_image;
                echo '<div class="sanpham">
                <img src="'.$hinh.'" alt="" width="193" height="204">
                <h4>
                    <a href="">'.$sppk_name.'</a>
                </h4>
            </div>';
            }?>
        </div>
    </div>

</div>
<div class="noidung2">
    <div class="binhluan">
        <h2>Bình Luận</h2>
        <div class="listbl">
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>
            <div class="comment">
                <h3>Tên user</h3>
                <p>Tôi rất vui khi đã quyết định mua một chú chó cho gia đình. Chú cún của chúng tôi đã trở thành
                    một phần quan trọng không thể thiếu trong cuộc sống hàng ngày. Việc nuôi chó không chỉ mang lại
                    niềm vui mà còn là một trách nhiệm lớn. Tuy nhiên, sự hạnh phúc và tình yêu mà chúng tôi nhận
                    được từ việc chăm sóc và nuôi dưỡng chú cún vô giá. Chúng tôi đang trải qua những khoảnh khắc
                    đáng nhớ cùng với chú ấy và không thể hạnh phúc hơn với quyết định đã mang về nhà một thành viên
                    mới cho gia đình.</p>
            </div>

        </div>
    </div>
</div>