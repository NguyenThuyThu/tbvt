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
        				<h2 class="grid__left-heading">Liên hệ</h2>
        				<div class="grid__left-contentdetail">
        					<h4>CÔNG TY CỔ PHẦN VIỄN THÔNG XANH VIỆT NAM</h4>
        					<p>Địa chỉ: Số 2 Ngõ 53 Đường Phạm Tuấn Tài, Phường Nghĩa Tân, Quận Cầu Giấy, Thành Phố Hà Nội, Việt Nam</p>
        					<p>Hotline: 0979.354.796 – 0973.497.685</p>
        					<p>Email: vienthongxanh.vn@gmail.com</p>
        				</div>

        			</div>

        		</div>
        	</div>
        </div>
    </div>
</div>
</div>
        <!-- End container -->