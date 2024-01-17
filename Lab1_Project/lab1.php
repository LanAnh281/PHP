<?php 

$servername = "localhost";
$dbname='QLSV';
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
  echo 'connection success';
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
if (isset($_POST['MaSV'])) {
    $MaSV = $_POST['MaSV'];
    // Your further processing here
} else {
    // Handle the case when 'MaSV' is not set in $_POST
    echo "Error: 'MaSV' is not set in the form.";
}

// lấy giá trị truyền từ phương thức POST lưu vào các biến tương ứng
$MaSV= $_POST['MaSV'];
$HoTen= $_POST['HoTen'];
$DiaChi =$_POST['DiaChi'];
$GioiTinh =$_POST['GioiTinh'];
$QuocGia=$_POST['QuocGia'];
$Tuoi=$_POST['Tuoi'];

// thực thi câu truy vấn điền dữ liệu
$query = 'INSERT INTO sinhvien  (MaSV,HoTen,DiaChi,GioiTinh,QuocGia,Tuoi) VALUES (?,?,?,?,?,?);';
$sth =  $conn->prepare($query); 
$result = $sth->execute([
    $MaSV, $HoTen, $DiaChi,$GioiTinh,$QuocGia,$Tuoi
]); //  thêm dữ liệu 
echo "Đã thêm $result dòng vào cơ sở dữ liệu"; // result là số lượng dữ liệu đã được thêm 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
