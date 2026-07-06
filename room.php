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
            max-width: 900px;
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
            background: linear-gradient(135deg, #16a085, #1abc9c);
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
            background: #e8f8f5;
        }

        tbody td {
            padding: 12px 16px;
            font-size: 14px;
            vertical-align: middle;
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .badge-yes {
            background: #d4efdf;
            color: #1e8449;
        }

        .badge-no {
            background: #fadbd8;
            color: #c0392b;
        }

        .price {
            font-weight: 700;
            color: #16a085;
        }

        .btn-link {
            display: inline-block;
            margin-top: 24px;
            padding: 10px 24px;
            background: #16a085;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.2s ease;
        }

        .btn-link:hover {
            background: #117a65;
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
        <h1>🛏️ รายการห้อง (Rooms)</h1>

        <?php
            include "action/connect.php";
            //       ดึง  ทั้งหมด จาก orders
            $sql = "SELECT * FROM rooms";
            //                      db.   คำสั่ง
            $result = mysqli_query($con, $sql);
            // ทดสอบตัวแปร
            // var_dump($result);
        ?>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>รหัสห้อง</th>
                        <th>สูบบุหรี่</th>
                        <th>อ่างอาบน้ำ</th>
                        <th>ราคา</th>
                    </tr>
                </thead>
                    <?php 
                        foreach($result as $room){
                            ?>

                                <tr>
                                    <td><?= $room["rooms_id"] ?></td>
                                    <td><?= $room["smcke"] ?></td>
                                    <td><?= $room["bathtub"] ?></td>
                                    <td><?= $room["price"] ?></td>
                                </tr>

                            <?php
                        }
                    ?>
            </table>
        </div>

        <a href="index.php" class="btn-link">← Go To Index</a>
    </div>
    
</body>
</html>