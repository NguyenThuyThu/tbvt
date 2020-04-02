        <!-- Container -->
        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">Danh mục</h3>
                            
                            <ul class="category-list">
                                {foreach $dmsp as $ds}
                                <li class="category-item">
                                    <a href="#" class="category-item__link">{$ds.ten_dmsanpham}</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">WordPress</a></li>
                                        <li><a href="#"><a href="https://thachpham.com/category/seo" data-wpel-link="internal">SEO</a></a></li>
                                        <li><a href="#">Hosting</a></li>
                                    </ul>
                                </li>
                                {/foreach}

                            </ul>
                        </nav>
                    </div>
                    
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-angle-down"></i>

                                <!-- List option -->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/3
                                </span>

                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                        <i class="home-filter__page-icon fas fa-angle-left"></i>
                                    </a>

                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="home-product">
                            <!-- Grid-> Row -> Column -->
                            <div class="grid__row">
                                
                                <!-- Product item -->
                                {foreach $dssp as $dulieu}
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{$baseURL}trangchitiet?product={$dulieu.ten_sanpham}_{$dulieu.ma_sanpham}">
                                        <div class="home-product-item__img" style="background-image: url({$baseURL}public/images/anhsanpham/{$dulieu.ma_sanpham}.jpg);"></div>
                                        <h4 class="home-product-item__name">{$dulieu.ten_sanpham}</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000đ</span>
                                            <span class="home-product-item__price-current">{$dulieu.dongia_sanpham}đ</span>
                                        </div>

                            <!-- <div class="home-product-item__action">
                                <span class="home-product-item__like home-product-item__like--liked">
                                    <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                    <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                </span>

                                <div class="home-product-item__rating">
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <span class="home-product-item__sold">88 đã bán</span>
                            </div> -->

                            <div class="home-product-item__origin">
                                <span class="home-product-item__brand">{$dulieu.thoigianbaohanh_sanpham}</span>
                                <span class="home-product-item__origin-name">{$dulieu.xuatxu_sanpham}</span>
                            </div>



                            <div class="home-product-item__favourite">
                                <i class="fas fa-check"></i>
                                <span>Yêu thích</span>
                            </div>

                            <div class="home-product-item__sale-off">
                                <span class="home-product-item__sale-off-percent">10%</span>
                                <span class="home-product-item__sale-off-label">Giảm</span>
                            </div>
                        </a>
                    </div> {/foreach}
                </div>
            </div>

            <!-- <ul class="pagination home-product__pagination">
                <li class="pagination-item">
                    <a href="" class="pagination-item__link">
                        <i class="pagination-item__icon fas fa-angle-left"></i>
                    </a>
                </li>

                <li class="pagination-item pagination-item__active">
                    <a href="" class="pagination-item__link" style="padding: 0;">1</a>
                </li>

                <li class="pagination-item">
                    <a href="" class="pagination-item__link" style="padding: 0;">2</a>
                </li>

                <li class="pagination-item">
                    <a href="" class="pagination-item__link" style="padding: 0;">3</a>
                </li>

                <li class="pagination-item">
                    <a href="" class="pagination-item__link">
                        <i class="pagination-item__icon fas fa-angle-right"></i>
                    </a>
                </li>
            </ul> -->
        </div>
    </div>
</div>
</div>
        <!-- End container -->