module.exports = async (req, res) => {
    if (req.method === "POST") {
        const { event_name, total_amount, num_people, deadline, reminder_freq } = req.body;

        // 計算每人應付金額
        const amount_per_person = total_amount / num_people;

        // 儲存活動資訊（這裡可以存到資料庫或其他地方）
        console.log(`活動名稱: ${event_name}`);
        console.log(`總金額: ${total_amount}`);
        console.log(`平分人數: ${num_people}`);
        console.log(`每人應付金額: ${amount_per_person}`);
        console.log(`截止日期: ${deadline}`);
        console.log(`提醒頻率: ${reminder_freq}`);

        // 返回計算結果給前端
        res.status(200).json({
            message: "活動發起成功",
            amount_per_person: amount_per_person
        });
    } else {
        res.status(405).json({ error: "Method Not Allowed" });
    }
};
