<?php 
 // Hàm Sumcd tính tổng $c + $d với truy cập từ khóa global

function Sumcd($c,$d){
    global $c,$d;
    return $c + $d;
}

?>