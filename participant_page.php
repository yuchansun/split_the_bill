<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>參與活動</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>參加活動</h1>
        <p>活動名稱：聚餐</p>
        <p>每人應付金額：600 元</p>
        <p>截止日期：2025-10-30</p>
        
        <form action="update_payment.php" method="POST">
            <label for="payment_status">付款狀態：</label>
            <select id="payment_status" name="payment_status">
                <option value="cash">已現金付款</option>
                <option value="transfer">已轉帳付款</option>
                <option value="later">稍後再說</option>
            </select>
            
            <div id="screenshot_section" style="display:none;">
                <label for="screenshot">匯款截圖：</label>
                <input type="file" id="screenshot" name="screenshot">
            </div>
            
            <button type="submit">確認付款</button>
        </form>
    </div>
    <script>
        // 控制是否顯示匯款截圖上傳選項
        document.getElementById('payment_status').addEventListener('change', function() {
            if (this.value == 'cash' || this.value == 'transfer') {
                document.getElementById('screenshot_section').style.display = 'block';
            } else {
                document.getElementById('screenshot_section').style.display = 'none';
            }
        });
    </script>
</body>
</html>
