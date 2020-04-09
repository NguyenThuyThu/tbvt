<div class="container-fluid color-fluid">
    <div class="container color-c-t">
        <div class="row">
            <div class="col-md-8">
                <div class="col-xs-12 col-md-5 imgproduct">
                    <a href="{$baseURL}public/images/anhsanpham/{$content.linkanh_sanpham}" class="img_sp thumbnail"  rel="motnhom">
                        <img src="{$baseURL}public/images/anhsanpham/{$content.linkanh_sanpham}" class="anhSP">
                        <div class="moanh"></div>
                     </a>
                </div>
                <div class="col-xs-12 col-md-7 imgproduct">
                    <div class="tensp"><p><span><i class="fa fa-hand-o-right" aria-hidden="true"></i></span><b>&nbsp;{$content.ten_sanpham}</b></p></div>
                    <p>
                      <span class="color-mo"><i class="fa fa-map-marker" aria-hidden="true"></i> Xuất xứ:</span> <i><b class="color-tt">{$content.xuatxu_sanpham}</b></i> </span>
                      {if $content['soluong'] == 0}
                            <span style="padding: 10px; color:#fff;" class="lable label-danger">Hết hàng</span>
                       {/if}
                    </p>
                    <p><span class="color-mo"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Bảo hành:</span> <i><b class="color-tt">{$content.thoigianbaohanh_sanpham}</b></i> </span></p>
                     <p><span class="discountTag_11Tt">Giá sản phẩm:</span> <span class="product-price">{number_format($content.dongia_sanpham, 0, ",", ",")} vnđ</span></p>
                     <p>
                         <span>Số lượng:</span><span>
                            <button class="btn_1IRK tru">-</button>
                              <input class="input_3cYn soluong_{$content.ma_sanpham}" type="number" value="{$soluong}" step="1" min="0" max="9999"  value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric">
                            <button class="btn_1IRK cong">+</button>
                            {if $trangthai != ""}
                                <span class="label label-primary">{$trangthai}</span>
                            {/if}
                         </span>
                     </p>
                    <p>
                         <div class="benefits_20y9">
                            <div class="item_8SP8" id="tooltip-benefit-0"><svg width="1em" height="1em" viewBox="0 0 1024 1024" class="icon iconCheck_3TcW"><path d="M803.84 298.667L519.723 582.742 390.87 453.547l-49.536 49.493 178.773 178.773L853.334 348.16z"></path><path d="M768 554.667h42.667v256H213.334V213.334h555.221v42.667H256v512h512V554.668z"></path></svg><strong class="title_2eUg">48 giờ hoàn trả</strong></div>
                            <div class="item_8SP8 disable_3qw-" id="tooltip-benefit-1"><svg width="1em" height="1em" viewBox="0 0 1024 1024" class="icon iconCheck_3TcW"><path d="M803.84 298.667L519.723 582.742 390.87 453.547l-49.536 49.493 178.773 178.773L853.334 348.16z"></path><path d="M768 554.667h42.667v256H213.334V213.334h555.221v42.667H256v512h512V554.668z"></path></svg><strong class="title_2eUg">Kiểm hàng khi nhận</strong></div>
                        </div>
                     </p>
                     <p>
                        
                     </p>
                    {if $content['soluong'] > 0 && $session != ""}
                     <p>
                        <button class="btn btn-warning button alt btn-giohang" type="button" name="add-to-cart" value="{$content.ma_sanpham}">Thêm vào giỏ hàng</button>
                        <button class="btn btn-danger" id="muangay" value="{$content.ma_sanpham}">Mua ngay</button>
                     </p>
                     {/if}
                </div>
                <div class="col-md-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item active" ><a class="nav-link border-none"
                            data-toggle="tab" href="#activity"><b>Mô tả sản phẩm</b></a>
                        </li>
                       <!--  <li class="nav-item" tieude=""><a class="nav-link"
                            data-toggle="tab" href="#timeline1"><b>xxx</b></a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-md-12">
                    
                    <div class="card-body">
                        <div class="tab-content">
                           <div class="tab-pane active" id="activity">
                                <div class="panel panel-primary boder-panel">
                                    <div class="panel-body">
                                       {$content.thongsokythuat_sanpham}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4 imgproduct">
                <div class="list-group">
                  <a href="#" class="list-group-item active" id="tieude_ac_splq">
                     Sản phẩm liên quan
                  </a>
                    {foreach $splq as $key => $val}
                        <a href="{$url}trangchitiet?product={$val.ten_sanpham}_{$val.ma_sanpham}" class="list-group-item"> 
                            <div>
                                <img src="{$url}public/images/anhsanpham/{$val.linkanh_sanpham}" class="img_splq">
                            </div>
                            <div class="ttsp">
                                <h4 class="list-group-item-heading">{$val.ten_sanpham} </h4> 
                                <p class="list-group-item-text">{number_format($val.dongia_sanpham, 0, ",", ",")} đ</p> 
                            </div>
                        </a>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{$url}public/js/jquery.md5.js"></script>
<script type="text/javascript" src="{$url}public/js/danhmuc.js?time={time()}"></script>

