module.exports = async (req, res) => {
    if (req.method === "POST") {
        const { userId, payment_status, screenshot } = req.body;

        // 這裡處理付款狀態更新邏輯（可以連接資料庫）
        console.log(`用戶 ID: ${userId}`);
        console.log(`付款狀態: ${payment_status}`);
        console.log(`匯款截圖: ${screenshot ? "已上傳" : "無"}`);

        // 返回狀態更新結果
        res.status(200).json({
            message: `付款狀態已更新: ${payment_status}`,
            screenshot: screenshot ? "已上傳" : "無"
        });
    } else {
        res.status(405).json({ error: "Method Not Allowed" });
    }
};
