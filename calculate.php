<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = $_POST['total'];  // 總金額
    $people = $_POST['people']; // 人數
    $extra = isset($_POST['extra']) ? $_POST['extra'] : 0; // 加點金額
    
    // 計算每人應付金額
    $totalAmount = $total + $extra;
    $amountPerPerson = $totalAmount / $people;
    
    // 顯示結果
    echo "<h2>每人應付金額：". number_format($amountPerPerson, 2) ." 元</h2>";
}
?>

