
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h3>Thông tin</h3>
    <form action="bai1.php" method="POST" class="w-25 mx-3">
        <div class="form-group">
            <label for="hoTen">Họ tên:</label>
            <input type="text" name="hoTen" id="hoTen" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="gioiTinh">Giới tính:</label>
            <input type="radio" name="gioiTinh" id="gioiTinh" value='0'> Nam
            <input type="radio" name="gioiTinh" id="gioiTinh" value='1'> Nữ 
        </div>
        <div class="form-group">
            <label for="soLuong">Số lượng:</label>
            <input type="number" name="soLuong" id="soLuong" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary">Đặt hàng</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $GioiTinh = $_POST['gioiTinh'] ;// "0" là Nam, "1" là Nữ
            $SoLuong = $_POST['soLuong'] ; // Số lượng hàng mua
            $ChietKhau=0.0; //Mức chiết khấu, giá trị mặc định
            // Kiểm tra giới tính và số lượng hàng đã áp dụng chiết khấu
            if($GioiTinh=="0"){// Nam
                if($SoLuong<5){
                    $ChietKhau=0.03;// 3% chiết khấu nếu số lượng <5
                }
                else if($SoLuong >=5 && $SoLuong <=10){
                    $ChietKhau =0.05; // 5% chiết khấu nếu số lượng từ 5 đến 10
                }else if($SoLuong>10){
                    $ChietKhau=0.1; // 10% chiết khấu nếu số lượng >10
                }

            }
            else{
                if($SoLuong<7){
                    $ChietKhau=0.03;// 3% chiết khấu nếu số lượng <5
                }
                else if($SoLuong >=7 && $SoLuong <=15){
                    $ChietKhau =0.07; // 5% chiết khấu nếu số lượng từ 5 đến 10
                }else if($SoLuong>15){
                    $ChietKhau=0.1; // 10% chiết khấu nếu số lượng >10
                }
            }
            // In ra mức chiết khấu
            echo "Mức chiết khấu của khách hàng " . ($_POST['hoTen']) . " là: " . ($ChietKhau*100) ."%";
        }

?>
</body>
</html>