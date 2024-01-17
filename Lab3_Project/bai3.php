<?php 
    
    function ConvertSign1($defaultValue = NULL,...$numbers){
        foreach($numbers as $number){
            if($number <0){
                $number=abs($number);
            }else if($number >0){
                $number =-$number;
            }else{
                $number=$defaultValue;
            }
        };
        for ($i=0;$i<count($numbers);$i++){
            echo $numbers[$i];
            if ($numbers[$i] > 0) {
                $numbers[$i] = -$numbers[$i];
            } else if ($numbers[$i] < 0) {
                $numbers[$i] = abs($numbers[$i]);
            } else {
                $numbers[$i] = $defaultValue;
            }
        }
        print_r( $numbers);
        return $numbers;
    }
    

    function ConvertSign2(&...$numbers) {
        $defaultValue = NULL;
        // foreach ($numbers as &$number) {
        //     if ($number < 0) {
        //         $number = abs($number);
        //     } elseif ($number > 0) {
        //         $number = -$number;
        //     } else {
        //         $number = $defaultValue;
        //     }
        // }
     
        $i=0;
        for ($i=0;$i<count($numbers);$i++){
            echo $numbers[$i];
            if ($numbers[$i] > 0) {
                $numbers[$i] = -$numbers[$i];
            } else if ($numbers[$i] < 0) {
                $numbers[$i] = abs($numbers[$i]);
            } else {
                $numbers[$i] = $defaultValue;
            }
        }
    }

    // Sử dụng hàm ConvertSign1
$result1 = ConvertSign1(NULL, 2, -3, 5);
echo "Kết quả từ ConvertSign1: " . implode(', ', $result1) . "<br>";

// Sử dụng hàm ConvertSign2
$values = [2, -3, 5];
ConvertSign2(...$values);
echo "Kết quả từ ConvertSign2: " . implode(', ', $values) . "<br>";


include_once "Lib.php";
//biến toàn cục
$c=-5;
$d=7;
// gọi hàm Sumcd từ thư viện
$result = Sumcd($c,$d);

echo 'Tổng của ' . $c . ' và ' . $d . " là :" . $result; 

?>