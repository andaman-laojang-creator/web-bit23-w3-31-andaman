<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $id = $_GET["id"];

        include "action/connect.php";

        $sql = "SELECT * FROM `orders` WHERE order_id = '$id'";

        $result = mysqli_query($con, $sql);

        $order = mysqli_fetch_assoc($result);
    ?>
    
    
    <form action="action/update_order.php" method="post">

        

        <label for="">ชื่อผู้เข้าพัด</label>
        <input type="text" name="name" id="" value="<?= $order["name"] ?>"> <br>

        <label for="">การจ่ายเงิน</label>
        <input type="text" name="payment" id="" value="<?= $order["payment"] ?>"> <br>

        <label for="">ประเภทการใช้งาน</label>
        <input type="text" name="usage_type" id="" value="<?= $order["usage_type"] ?>"> <br>

        <label for="">รูปพาม URL</label>
        <input type="text" name="imge" id="" value="<?= $order["imge"] ?>"> <br>

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
                        <option
                            value="<?= $room["rooms_id"] ?>"
                            <?= $order['room_id'] == $room['rooms_id'] ? 'selected' : '' ?>
                            >
                            <?= $room["rooms_id"] . " - " . $room["price"] . "บาท" ?>
                        </option>
                    <?php
                }
            ?>
        </select>

        <input type="hidden" name="orderd_id" value="<?= $order['order_id'] ?>"> //

        <br>
        <button>บึนทึก</button>

    </form>

</body>
</html>