        <!-- Container -->
        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__top">
                    <div class="grid__column-2-4">
                        <nav class="category">

                            <ul class="category-list">
                                {if !empty($dmsp)}
                                {foreach $dmsp as $ds}
                                <li class="category-item">
                                    <a href="#" class="category-item__link">{$ds.ten_dmsanpham}</a>
                                </li>
                                {/foreach}
                                {/if}
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-9-6 carousel slide" id="grid__carousel" data-ride="carousel">
                        <div id="jq_carousel" style="background-image: url('public/images/anhsanpham/bgtop.jpg')">
                            <div class="carousel_elm active" id="carousel_elm">
                                <a href="#"><img class="carousel_img" title="Cáp thông tin" alt="Image 1" src="public/images/anhsanpham/SP001.jpg" /></a>
                                <div class="carousel_caption">
                                    <h4 class="carousel_caption-title">Cáp thông tin</h4>
                                    <p class="carousel_caption-detail">Cáp điều khiển Altek Kabel không lưới CT-500 30G 0.75 QMM/17530
                                    </p>
                                </div>
                                <!-- <p class="carousel_caption">This area is typically used to display captions associated with the images. They are set to hide and fade in on rotation.</p> -->
                            </div>
                            <div class="carousel_elm">
                               <a href="#"><img class="carousel_img" title="Cáp mạng" alt="Image Caption" src="public/images/anhsanpham/SP002.jpg" /></a>
                               <div class="carousel_caption">
                                <h4 class="carousel_caption-title">Cáp mạng</h4>
                                <p class="carousel_caption-detail">Cáp mạng Cat6 UTP 4 pair Legrand chính hãng
                                </p>
                            </div>
                        </div>
                        <div class="carousel_elm">
                            <a href="#"><img class="carousel_img" title="Thiết bị mạng" src="public/images/anhsanpham/SP003.jpg" alt="image 1" /></a>
                            <div class="carousel_caption">
                                <h4 class="carousel_caption-title">Thiết bị mạng</h4>
                                <p class="carousel_caption-detail">Switch Upcom Công Nghiệp 22Port Ethernet+2Port Fiber |PN: IES2024-2F
                                </p>
                            </div>
                        </div>
                        <div class="carousel_elm">
                            <a href="#"><img class="carousel_img" title="Thiết bị quang" alt="Image Caption 2" src="public/images/anhsanpham/SP004.jpg" /></a>
                            <div class="carousel_caption">
                                <h4 class="carousel_caption-title">Thiết bị quang</h4>
                                <p class="carousel_caption-detail">Bộ chuyển đổi quang điện Optone OPT1100S25
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="carousel__prev"><img src="public/images/anhsanpham/prev.png" alt="prev" /></div>
                    <div id="carousel__next"><img src="public/images/anhsanpham/next.png" alt="next" /></div>
                </div>

            </div>

            <!-- Products home-->
            <div class="gird__full-width app__main">
                <div class="app__main-heading">
                    <a href="#">Sản phẩm mới</a>
                </div>
                <!-- Product item -->
                <div class="app_main-products">
                    {foreach $dssp as $dulieu}
                    <div class="grid__column-2-4">
                        <a class="home-product-item" href="{$baseURL}trangchitiet?product={$dulieu.ten_sanpham}_{$dulieu.ma_sanpham}">
                            <div class="home-product-item__img" style="background-image: url({$baseURL}public/images/anhsanpham/{$dulieu.linkanh_sanpham});"></div>
                            <h4 class="home-product-item__name">{$dulieu.ten_sanpham}</h4>
                            <div class="home-product-item__price">
                                <span class="home-product-item__price-old">1.200.000đ</span>
                                <span class="home-product-item__price-current">{number_format($dulieu.dongia_sanpham, 0, ",", ",")}đ</span>
                            </div>
                            {if $dulieu['soluong'] == 0}
                            <p style="padding-left: 10px; color:#fff;" class="lable label-danger">Hết hàng</p>
                            {/if}
                            <div class="home-product-item__origin">
                                <span class="home-product-item__brand">{$dulieu.thoigianbaohanh_sanpham}</span>
                                <span class="home-product-item__origin-name">{$dulieu.xuatxu_sanpham}</span>
                            </div>
                            <div class="home-product-item__favourite">
                               <i class="fa fa-heart" aria-hidden="true"></i>
                                <span>Yêu thích</span>
                            </div>

                            <div class="home-product-item__sale-off">
                                <span class="home-product-item__sale-off-percent">10%</span>
                                <span class="home-product-item__sale-off-label">Giảm</span>
                            </div>
                        </a>
                    </div>
                     {/foreach}
                </div>
             
            </div>
        </div>
    </div>
        <!-- End container -->