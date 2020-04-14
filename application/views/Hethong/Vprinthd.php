<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>In hóa đơn</title>
    <style>
        html {
            font-family: "Time New Romans", sans-serif;
        }

        body {
            margin: 0 0;
            font-size: 14px;
        }

        h2 {
            text-transform: uppercase;
        }

        p {
            font-size: 1.4rem;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .container {
            padding: 40px;
        }

        .noidung {
            border-bottom: 1px solid #f1f1f1;
        }

        .indam p {
            color: #000;
            font-weight: 100;
        }

        <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
    </style>

<body>

    <div class="container">
        <div class="row">
            <center>
                <h1>Công ty CP Viễn thông Xanh Việt Nam</h1>
                <p>Địa chỉ: Số 2 Ngõ 53 Đường Phạm Tuấn Tài, Phường Nghĩa Tân, Quận Cầu Giấy, Thành Phố Hà Nội, Việt Nam
                </p>
                <p>Hotline: 0979.354.796 – 0973.497.685</p>

            </center>
        </div>
        <center>
            <div class="row tieude">
                <h2 class="text-center">Hóa Đơn bán hàng</h2>
            </div>
        </center>
        <div class="row noidung">
            <p>Hóa đơn số: {$content['ma_hoadonmua']}</p>
            <p>Ngày bán: {$content.ngaylap}</p>
            <p>Người lập: {$content.hoten_thanhvien}</p>
        </div>
        <div class="row noidung">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10%">STT</th>
                        <th style="width: 40%">Sản phẩm</th>
                        <th style="width: 10%">Số lượng</th>
                        <th style="width: 20%">Đơn giá</th>
                        <th style="width: 20%">Thành tiền</th>
                    </tr>
                </thead>
                <tbody id="tbody_xuathd">
                    <tr>
                        <td>1</td>
                        <td>{$content.ten_sanpham}</td>
                        <td>{$content.soluong_mua}</td>
                        <td>{$content.giaban}</td>
                        <td>{$content.tongtien}</td>
                    </tr>
                    
                </tbody>
               <!--  <tfoot>
                    <div class="row">
                        <div class="col-9 indam">
                            <p><b>Tổng tiền</b></p>
                            <p><b>Tổng thanh toán</b></p>
                        </div>
                        <div class="col-3">
                            <p>49000</p>
                            <p>0</p>
                            <p>50000</p>
                            <p>50000</p>
                            <p>800</p>
                        </div>
                    </div>
                </tfoot> -->
            </table>
        </div>
        
        <div class="row noidung">
            <center>
                <p>
                    Cảm ơn quý khách và hẹn gặp lại
                </p>
            </center>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    window.print();
    window.onafterprint = function() {
        var url = window.location.origin + "/" + window.location.pathname.split("/")[1] + '/';
        location.href = url + "/donhang";
    }
</script>