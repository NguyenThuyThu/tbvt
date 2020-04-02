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
                    
                    <div class="grid__column-10 gird__box1">
                        <h2 class="grid__left-heading">Giới thiệu</h2>
                        <p>Được thành lập năm 2007 chúng tôi – Công ty CP Thiết bị Công Nghệ Việt là một trong những công ty về công nghệ viễn thông uy tín và phát triển mạnh trên toàn quốc.

                            Hoạt động của công ty trong các lĩnh vực:
                            
                            1. CCTV: Kinh doanh phân phối, bán lẻ và cung cấp, lắp đặt cho dự án : Camera giám sát, Đầu ghi hình, Báo trộm, báo cháy, Chuông cửa màn hình, Phụ kiện CCTV các loại …
                            
                            2. SECURITY : Kinh doanh phân phối, bán lẻ và cung cấp lắp đặt cho dự án : Thiết bị báo trộm, Báo cháy, PCCC, Máy chấm công tự động, Phụ kiện các loại, …
                            
                            3. TELECOM : Kinh doanh phân phối, bán lẻ và cung cấp lắp đặt cho dự án : Thiết bị viễn thông, Thiết bị truyền dẫn Quang học, Tổng đài điện thoại nội bộ, Máy điện thoại, Bộ đàm, Thiết bị định vị GPS, Thiết bị mạng phụ trợ, Phụ kiện các loại , …
                            
                            4. Thiết bị Giám sát hành trình GPS và hộp đen xe hơi Black box.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- End container -->