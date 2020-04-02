<!-- Footer -->
<footer class="footer">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-2-4">
                <h3 class="footer__heading">Giới thiệu</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Hệ thống sản phẩm</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Tầm nhìn - Sứ mệnh</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Nhà phân phối</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Tầm nhìn sứ mệnh</a>
                    </li>
                </ul>
            </div>
            <div class="grid__column-2-4">
                <h3 class="footer__heading">Chính sách công ty</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Hướng dẫn đặt hàng</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Quy trình thanh toán</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Hướng dẫn kỹ thuật</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Quy trình giao hàng</a>
                    </li>
                </ul>
            </div>
            <div class="grid__column-2-4">
                <h3 class="footer__heading">Chính sách công ty</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Chính sách bảo mật</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Hình thức thanh toán</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Phương thức vận chuyển</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Chính sách đổi trả hàng</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Chính sách hoàn tiền</a>
                    </li>
                </ul>
            </div>
            
            <div class="grid__column-2-4">
                <h3 class="footer__heading">Liên hệ</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Trụ Sở: Số 2 Ngõ 53 Đường Phạm Tuấn Tài, Phường Nghĩa Tân, Quận Cầu Giấy, Thành Phố Hà Nội, Việt Nam</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Điện thoại: 024.6662 3616</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link"> Hotline: 0973.497.685 - 0979.354.796 </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">Email: vienthongxanh.vn@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="grid__column-2-4">
                <h3 class="footer__heading">Theo dõi chúng tôi</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">
                            <i class="footer-item__icon fab fa-facebook"></i>
                            Facebook
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">
                            <i class="footer-item__icon fab fa-instagram"></i>
                            Instagram
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item__link">
                            <i class="footer-item__icon fab fa-linkedin-in"></i>
                            Linkedin
                        </a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
    </div>
</footer>
<!-- End footer -->
{if !empty($message)}
<script type="text/javascript">
 setTimeout(function() {
   toastr.options = {
     closeButton: true,
     progressBar: true,
     showMethod: 'slideDown',
     timeOut: 5000
 };
 toastr.{$message.type}("{$message.title}","{$message.message}");
}, 200);
</script>
{/if}
</body>
</html>


