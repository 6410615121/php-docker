<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    ชื่อ: <?= $_POST['fullname'] ?><br>
    เพศ: <?= $_POST['gender'] ?><br>
    วัน/เดือน/ปีเกิด: <?= $_POST['day'] ?>/<?= $_POST['month'] ?>/<?= $_POST['year'] ?><br>
    อาชีพ: <?= $_POST['job'] ?><br>
    ที่อยู่(ตามบัตรประชาชน): <?= $_POST['address'] ?><br>
    จังหวัด: <?= $_POST['province'] ?><br>
    โทร: <?= $_POST['tel'] ?><br>
    <br>

    <?php 
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $year = $year - 543 ;

    // validate date of birth
    $maxDayInMonth = array(
        'มกราคม' => 31,
        'มีนาคม'=> 31,
        'เมษายน'=> 30,
        'พฤษภาคม'=> 31,
        'มิถุนายน'=> 30,
        'กรกฎาคม'=> 31,
        'สิงหาคม'=> 31,
        'กันยายน' => 30,
        'ตุลาคม'=> 31,
        'พฤศจิกายน'=> 30,
        'ธันวาคม'=> 31,
    );

    foreach ($maxDayInMonth as $key => $value) {
        if ($month == 'กุมภาพันธ์') break;

        if ($month == $key){
            if($day > $value){
                $message = 'ไม่มีวันที่ที่ท่านกรอก';
            }
        }
    }

    // leap year for february
    if ($month == 'กุมภาพันธ์'){
        $cond1 = ($year % 4 == 0) && ($year % 100 != 0);
        $cond2 = ($year % 400);
        if ($cond1 || $cond2){
            // this is leap year => check date
            if($day > 29){
                $message = 'ไม่มีวันที่ที่ท่านกรอก';
            }
        }else{
            // not leap year
            if($day > 28){
                $message = 'ไม่มีวันที่ที่ท่านกรอก';
            }
        }
    }

    if (isset($message)) {
        echo "<span style='color: red;'>$message</span>";
    }



    ?>
</body>
</html>