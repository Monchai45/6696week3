<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม front -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Mali", cursive;
            font-weight: 200;
            font-style: normal;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1</title> 
</head>
<body>
    <h1> โปรแกรม ภาษา HTML </h1>
    664485022 นายมนชัย รัตนบุตร <br>
    หมู่เรียน 66/96
    <?php
        // ทดสอบ comment ภาษา php  
       echo "<h2> สวัสดีปีใหม่</h2>";
       echo "<br>ขอให้ทุกคนประสบแต่ความสุข";
       // สร้างตัวแปร
       $name="มนชัย";
       $surname="รัตนบุตร";
       echo "<br>ชื่อของคุณคือ" .$name."  ".$surname;
       $x=15;
       $y=7;
       $z=$x+$y;
       echo "<br> ค่าผลบวกเท่ากับ" .$z;
       $z=$x*$y;
       echo "<br> ค่าผลคูณเท่ากับ" .$z;

    ?>
</body>
</html>