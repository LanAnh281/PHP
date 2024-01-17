<!-- 
    Tên sinh viên:
    Lớp:
    Môn học: Lập trình Web với PHP
 -->
 <?php 
 echo 'hello world 2'
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <p>Hello world 1</p>
    <form action="lab1.php" method="post">
        <h3>Mã SV:</h3>
        <input type="text" name="MaSV" id=""> <br>
        <h3>Họ tên:</h3>
        <input type="text" name="HoTen" id=""> <br>
        <h3>Địa chỉ:</h3>
        <input type="text" name="DiaChi">
        <h3>Giới tính:</h3>
        <input type="radio" name="GioiTinh" value="0"> Nam
        <input type="radio" name="GioiTinh" value="1"> Nữ
        <h3>Quốc gia:</h3>
        <input type="text" name="QuocGia" id="quocgia">
        <h3>Tuổi:</h3>
        <input type="number" name="Tuoi" id="quocgia"> <br>

        <input type="submit" value="OK">
    </form>
 </body>
 </html>