<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 接收表單數據
    $event_name = $_POST['event_name'];
    $total_amount = $_POST['total_amount'];
    $num_people = $_POST['num_people'];
    $deadline = $_POST['deadline'];
    $reminder_freq = $_POST['reminder_freq'];

    // 計算每人應付金額
    $amount_per_person = $total_amount / $num_people;

    // 顯示計算結果
    echo "<h1>活動發起成功！</h1>";
    echo "<p>活動名稱: $event_name</p>";
    echo "<p>總金額: $total_amount 元</p>";
    echo "<p>平分人數: $num_people</p>";
    echo "<p>每人應付金額: " . number_format($amount_per_person, 2) . " 元</p>";
    echo "<p>截止日期: $deadline</p>";
    echo "<p>提醒頻率: $reminder_freq 天前</p>";
}
?>
