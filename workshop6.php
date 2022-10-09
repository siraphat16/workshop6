<?php include "connect.php" ?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$stmt = $pdo->prepare("SELECT * FROM member");
	$stmt->execute();


while ($row = $stmt->fetch()) {
	echo "ชื่อสมาชิก:" . $row ["username"] . "<br>";
	echo "ที่อยู่สมาชิก:" .$row ["address"] . "<br>";
	echo "อีเมล:" .$row ["email"] . "<br>";
	echo "<a href=delete.php?username=".$row["username"].">ลบ</a>";
	echo "<hr>\n";
	 } ?>
</body>
</html>