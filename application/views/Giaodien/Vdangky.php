<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function(){ $('#thongbao').hide(1000); },2000);
    });
</script>
<!-- Container -->
<div class="app__container">
    <div class="grid">
        <div class="grid_row gird__box">

            <div class="grid__column-6 grid__left dangky">

                <div class="auth_form">
                    
                </div>
                <!-- Register form -->
                <div class="auth_form " >
                    <form id="fr_register" method="POST" class="auth-form__container" action="">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading ">Đăng ký</h3>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" id="hoten" name="hoten" required placeholder="Họ tên">
                            </div>

                            <div class="auth-form__group">
                                <input type="email" class="auth-form__input" id="email" name="email" required placeholder="Email">
                            </div>

                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" id="taikhoan"  name="taikhoan" required placeholder="Tên đăng nhập">
                            </div>

                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" id="password" name="password" required placeholder="Mật khẩu">
                            </div>

                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" id="repassword" name="repassword" required placeholder="Nhập lại mật khẩu">
                            </div>
                            <p class="text-danger">
                                {(!empty($tb)) ? $tb : ""}
                            </p>
                        </div>

                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">Bằng việc đăng kí, bạn đã đồng ý với chúng tôi về
                                <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>&
                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                            </p>
                        </div>

                        <div class="auth-form__controls">
                            <div class="col-md-6 text-left">
                                <button type="button" class="btn btn--default" id="dangnhap"  
                            >ĐĂNG NHẬP</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn--primary" id="reg_btn"  name="dangky"  value="dangky"
                            >ĐĂNG KÝ</button>
                            </div> 
                        </div>
                        
                    </form>
                </div>
            </div>



            <div class="grid__column-6 grid__right dangnhap">
                <!-- Login form -->
                <div class="auth_form " >
                    <form method="POST" class="auth-form__container" action="">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" name="taikhoan" id="taikhoan" class="auth-form__input" placeholder="Tên đăng nhập">
                            </div>

                            <div class="auth-form__group">
                                <input type="password" name="password" id="password" class="auth-form__input" placeholder="Mật khẩu">
                            </div>
                        </div>
                        
                      <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>



                    <div class="auth-form__controls">
                          <div class="col-md-6 text-left">
                                <button type="button" class="btn btn--default" id="dangky"  
                            >ĐĂNG KÝ</button>
                            </div>
                            <div class="col-md-6 text-right">
                              <button class="btn btn--primary" type="submit" name="dangnhap"  value="dangnhap">ĐĂNG NHẬP</button>
                            </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End container -->





<script>
    $(function(){
        $(".dangky").hide(200);
        $("#dangky").click(function(event) {
             $(".dangnhap").hide();
             $(".dangky").show();
        });

        $("#dangnhap").click(function(event) {
             $(".dangky").hide();
             $(".dangnhap").show();
        });
    });
</script>