<?php include "connect.php"?>
<html>
<head><meta charset="utf-8"></head>
<?php
   $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
   $stmt->bindParam(1,$_GET["username"]);
   $stmt->execute();
   $row = $stmt->fetch();
?>

<div style="display:flex">
  <div style="padding:20px">
    <h2><?=$row["username"]?></h2>
    ชื่อสมาชิก:<?=$row["name"]?><br>
    ที่อยู่:<?=$row["address"]?><br>
    เบอร์โทร:<?=$row["mobile"]?><br>
    อีเมล์:<?=$row["email"]?>
  </div>
</div>
</html>