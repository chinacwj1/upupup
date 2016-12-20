<meta charset="UTF-8">
<?php
$conn = mysqli_connect("localhost", "root", "", "q1");
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

$sql = "CREATE TABLE user (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30),
password VARCHAR(52)
)";
$sql1 = "CREATE TABLE talk (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30),
talk VARCHAR(520)
)";

if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)) {
    echo "数据表 MyGuests 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
mysqli_close($conn);
echo "<script>location='login.php'</script>";
?>