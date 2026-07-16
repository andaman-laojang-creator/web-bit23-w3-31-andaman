<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="action/insert_order.php" method="post">

        <label for="">ชื่อผู้เข้าพัด</label>
        <input type="text" name="name" id=""> <br>

        <label for="">การจ่ายเงิน</label>
        <input type="text" name="payment" id=""> <br>

        <label for="">ประเภทการใช้งาน</label>
        <input type="text" name="usage_type" id=""> <br>

        <label for="">รูปพาม URL</label>
        <input type="text" name="imge" id=""> <br>

        <?php
            include "action/connect.php";

            //       ดึง  ทั้งหมด จาก ชื่อsql
            $sql = "SELECT * FROM rooms";
            
            //                      db.   คำสั่ง
            $result = mysqli_query($con, $sql);
        ?>

        <label for="">เลือกห้องพัง</label>
        <select name="room_id" id="">
            <?php 
                foreach($result as $room){
                    ?>
                        <option value="<?= $room["rooms_id"] ?>">
                            <?= $room["rooms_id"] . " - " . $room["price"] . "บาท" ?>
                        </option>
                    <?php
                }
            ?>
        </select>

        <br>
        <button>บึนทึก</button>

    </form>

</body>
</html>