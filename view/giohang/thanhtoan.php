<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop D&Q</title>
    <!-- link ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--fontansome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- css slider -->
    <link rel="stylesheet" href="../../usecssjs/silder_xemchitiet/css/impulseslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../usecssjs/silder_xemchitiet/css/font-awesome.min.css" type="text/css" media="screen" />
    <!-- css index -->
    <link rel="stylesheet" href="../../Css/css_index.css">
    <link rel="stylesheet" href="../../Css/css_giohang.css">
    <!-- script coment facebook nhúng -->
    <!-- nhung test coment facebok -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=579600703081104&autoLogAppEvents=1" nonce="RtFUhxre"></script>

</head>

<body>
    <!-- header -->
    <?php include_once("./header.php"); ?>
    <!-- rederbody -->
    <div class="carts">
    <div class="cart">
            <div class="">giỏ hàng</div>
            <div class="table_gh">
                <table>
                    <tr>
                        <th>stt</th>
                        <th colspan="2">sản phẩm</th>
                        <th>đơn giá</th>
                        <th>số lượng</th>
                        <th>thành tiền</th>
                        <th>thao tác</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> <img src="../../upload/image/flashsale/SLrLFu_simg_de2fe0_500x500_maxb.jpg" alt=""> </td>
                        <td>sản phẩm 1</td>
                        <td>120,000</td>
                        <td><button>-</button><input type="number" value="1"><button>+</button></td>
                        <td>120,000</td>
                        <td>xóa</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> <img src="../../upload/image/flashsale/SLrLFu_simg_de2fe0_500x500_maxb.jpg" alt=""> </td>
                        <td>sản phẩm 1</td>
                        <td>120,000</td>
                        <td><button>-</button><input type="number" value="1"><button>+</button></td>
                        <td>120,000</td>
                        <td>xóa</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td>tổng</td>
                        <td>120,000</td>
                        <td>update</td>
                    </tr>
                </table>
            </div>
            <div class="cart_free">
                <i class="fas fa-truck"></i>
                miến phí vận chuyển đơn hàng có giá trị từ 300,000 vnđ
            </div>
            <div class="cart_dathang">
                <button> <a href="/dự án tự làm/dự án 1 web bán quần áo/view/giohang/thanhtoan.php">đặt hàng</a> </button>
            </div>


        </div>
        <div class="cart_users">
                <div class="">Thông tin khách hàng</div>
                <div class="cart_user">
                    <div>
                        <label for="">khách hàng</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">địa chỉ nhận</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">email</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">sđt</label>
                        <input type="text">
                    </div>




                </div>
            </div>
    </div>
    <!-- footer -->
    <?php include_once(".footer.php"); ?>



</body>

</html>