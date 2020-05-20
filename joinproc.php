<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$id = $_GET['id'];
$pw = $_GET['pw'];
$phone = $_GET['phone'];
$remark = $_GET['remark'];

echo "id = ".$id."<br/>";
echo "pw = ".$pw."<br/>";
echo "phone = ".$phone."<br/>";
echo "remark = ".$remark."<br/>";
$servername = "localhost";
$username = "systemctl7";
$password = "khs340526!";

$dbname = "systemctl7";

$conn =new mysqli($servername,$username,$password,$dbname);
//mysql_set_charset("utf8",$conn);

if ($conn -> connect_error){
    echo "디비 연결 실패";
}else{
    echo "디비 연결 성공";
}

$sql = 
"insert into member 
(id,pw,phone,remark) 
values
('$id','$pw','$phone','$remark')";

if( $conn -> query($sql) === TRUE){
   echo " 행 삽입 성공";
}
else{
    echo " 행 삽입 실패";
}
$conn->close();
?>
</body>
</html>
