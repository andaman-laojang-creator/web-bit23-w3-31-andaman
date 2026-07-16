<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #d9e4ec);
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .table-wrapper {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(135deg, #4a69bd, #6a89cc);
        }

        thead th {
            color: #fff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        tbody tr {
            transition: background 0.2s ease;
            border-bottom: 1px solid #eee;
        }

        tbody tr:nth-child(even) {
            background: #f9fafc;
        }

        tbody tr:hover {
            background: #eef2ff;
        }

        tbody td {
            padding: 12px 16px;
            font-size: 14px;
            vertical-align: middle;
        }

        tbody td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }

        .btn-link {
            display: inline-block;
            margin-top: 24px;
            padding: 10px 24px;
            background: #4a69bd;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.2s ease;
        }

        .btn-link:hover {
            background: #3b5599;
        }

        .empty-state {
            text-align: center;
            padding: 40px;
            color: #999;
            font-style: italic;
        }
    </style>
    
</head>
<body>
    
    <div class="container">
        <h1>📋 รายการ จัดการordr</h1>

        <?php
            include "action/connect.php";

            //       ดึง  ทั้งหมด จาก ชื่อsql
            $sql = "SELECT * FROM orders";

            //                      db.   คำสั่ง
            $result = mysqli_query($con, $sql);

            // ทดสอบตัวแปร
            // var_dump($result);
        ?> 

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>รหัสรายการ</th>
                        <th>ที่อยู่เข้าพัก</th>
                        <th>ชำระเงิน</th>
                        <th>ประเภท</th>
                        <th>ห้อง</th>
                        <th>ภาพ</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <?php 
                    foreach($result as $order){
                        ?>
                            <tr>
                                <td><?= $order["order_id"] ?></td>
                                <td><?= $order["name"] ?></td>
                                <td><?= $order["payment"] ?></td>
                                <td><?= $order["usage_type"] ?></td>
                                <td><?= $order["room_id"] ?></td>
                                <td>
                                    <img 
                                        src="<?= $order["imge"] ?>"
                                        style="width:100px"
                                    >
                                </td>
                                <td>
                                    <!-- แก้ -->
                                    <a href="edit_order.php?id=<?= $order["order_id"] ?>">แก้ไข</a>
                                    <!-- ลบ -->
                                    <a href="action/delete_order.php?id=<?= $order["order_id"] ?>">ลบ</a>
                                </td>
                            </tr>

                        <?php
                    }
                ?>
            </table>
        </div>

        <a href="room.php" class="btn-link">← Go To Room</a>
        <a href="add_order.php" class="btn-link">← Go To add</a>
        <a href="index.php" class="btn-link">← Go To Index</a>
    </div>
</body>
</html>