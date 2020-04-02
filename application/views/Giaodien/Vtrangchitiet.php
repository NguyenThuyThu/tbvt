<!-- Container -->
<div class="app__container">
    <div class="grid">
        <div class="grid_row gird__box">
            <div class="col-md-8">
                <div class="wrap_info">
                    <div class="col-md-5 imgproduct">
                        <a href="{$baseURL}public/images/anhsanpham/{$content.ma_sanpham}.jpg" class="img_sp"  rel="motnhom">
                            <img src="{$baseURL}public/images/anhsanpham/{$content.ma_sanpham}.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <h3 class="title">{$content.ten_sanpham}</h3>
                        <div class="price-wrapper">
                            <p class="price product-page-price">
                                <span class="amount">{number_format($content.dongia_sanpham, 0, ",", ",")}đ</span>
                            </p>
                        </div>
                        <form>
                            <div class="quantity buttons_added"></div>
                            <input type="number" class="input-text qty text soluong_{$content.ma_sanpham}" step="1" min="0" max="9999"  value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric">
                            {if isset($session) && !empty($session)}
                                <button type="button" name="add-to-cart" value="{$content.ma_sanpham}" class="single_add_to_cart_button button alt btn-giohang">Thêm vào giỏ hàng</button>
                            {else}
                                 <button  name="add-to-cart" class="single_add_to_cart_button button alt btn-giohang" disabled style="background: #d8162469;cursor: not-allowed;">Thêm vào giỏ hàng</button>
                            {/if}
                        </form>
                        <a href="javascript:void(0);" class="devvn_buy_now devvn_buy_now_style" data-id="">
                            <strong>Mua ngay</strong>
                        </a>
                    </div>
                </div>

        <hr>
                <div class="wrap_info1">
                    <div class="app__main-heading">
                        <a href="#">Mô tả</a>
                    </div>

                    <div class="app__main-detail">
                        <p>{$content.thongsokythuat_sanpham}</p>
                    </div>
                </div>



            </div>
     
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sản phẩm liên quan</h3>
                    </div>
                    <div class="panel-body">
                          <ul class="grid__right-products">
                            {foreach $splq as $key => $val}
                            <li class="grid__right-box">
                                <div class="col-md-4 img_ct">
                                    <img src="{$url}public/images/anhsanpham/{$val.linkanh_sanpham}" width="100%">
                                </div>
                                <div class="col-md-8">
                                   <div class="grid__right-link-price">
                                    <a href="{$url}trangchitiet?product={$val.ten_sanpham}_{$val.ma_sanpham}" class="grid__right-link">{$val.ten_sanpham}</a>
                                    <p>
                                    <span class="grid__right-price">{number_format($val.dongia_sanpham, 0, ",", ",")}₫</span>
                                        
                                    </p>
                                    </div>
                                </div>
                            </li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .grid__right-link{
        font-size: 14px;
        font-family: segoe ui light;
        font-weight: bold;
    }
    .xuongCard{
        animation: dixuong 1.5s forwards;
    }
    .grid__right-box{
        border-bottom: 1px solid #ccc;
        margin-bottom: 5px;
        padding-top: 5px;
    }

  @-webkit-keyframes dixuong{
    0%{
        transform: translateY(-30px);
    }
    100%{
        transform: translateY(0);
    }
  }
    .img_sp img {
        box-shadow: -1px 0px 10px 0px #ccc;
    }

</style>
<script type="text/javascript" src="{$url}public/js/danhmuc.js?time={time()}"></script>
