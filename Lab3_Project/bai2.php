<?php 
    function convertSign1($number,$defaultValue = NULL){
        if($number <0){
            echo $number;
            return abs($number);
        }
        else if($number >0){
            echo -$number;
            return -$number;
        }
        else{
            return $defaultValue;
        }
    }
    function convertSign2(&$number, $defaultValue = NULL) {
        if ($number < 0) {
            $number = abs($number);
        } elseif ($number > 0) {
            $number = -$number;
        } else {
            $number = $defaultValue;
        }
    }
    // Truyền biến toàn cục $a
$a = 2;
ConvertSign1($a); // Gọi hàm ConvertSign1 với tham trị
echo "Giá trị của biến \$a sau khi gọi ConvertSign1: $a <br>";

// Reset giá trị của biến $a
$a = 2;
ConvertSign2($a); // Gọi hàm ConvertSign2 với tham chiếu
echo "Giá trị của biến \$a sau khi gọi ConvertSign2: $a <br>";
 

// Hàm Sumcd tính tổng $c + $d với truy cập từ khóa global
function Sumcd(){
    global $c, $d; //Bất kỳ thay đổi nào đối với các biến này trong hàm đều ảnh hưởng đến giá trị toàn cục của chúng.
    $c=$c+1;
    return $c + 1;
}
// Khởi tạo 2 biến toàn cục
$c = 2;
$d = 3;
echo "Tổng của $c và $d là :" . Sumcd() . "<br>";
echo $c;//3 $c =$c + 1 tại hàm Sumcd ();
// Reset giá trị của biến $c và $d
$c = 5;
$d = 7;

//hàm Sumcd tính tổng $c + $d với truy cập từ mmangr $GLOBALS
function SumcdUsingGlobals(){
    return $GLOBALS['c'] + $GLOBALS['d'];
}
echo "Tổng của \$c và \$d là: " . SumcdUsingGlobals() . "<br>";
?>
