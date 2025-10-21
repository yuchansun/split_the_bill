<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_status = $_POST['payment_status'];
    $screenshot = null;

    if ($payment_status == 'cash' || $payment_status == 'transfer') {
        // 處理上傳的匯款截圖
        if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
            $screenshot = $_FILES['screenshot']['name'];  // 這裡可以進行檔案儲存操作
        }
    }

    // 這裡可以將付款狀態及截圖（如果有）儲存至資料庫
    echo "<h1>付款狀態更新成功！</h1>";
    echo "<p>付款狀態: $payment_status</p>";
    if ($screenshot) {
        echo "<p>匯款截圖: $screenshot</p>";
    }
}
?>
