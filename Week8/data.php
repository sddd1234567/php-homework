<?php

$Link = mysqli_connect('localhost','root','123456','php2017');
	if(!$Link)
		echo "連接失敗";


$account = $_POST["Username"];
$pw = $_POST["Password"];
 
echo "報名成功<br/>";

$leaderName = $_POST["leaderName"];
$leaderGrade = $_POST["leaderGrade"];
$member1Name = $_POST["member1Name"];
$member1Grade = $_POST["member1Grade"];
$member2Name = $_POST["member2Name"];
$member2Grade = $_POST["member2Grade"];
$member3Name = $_POST["member3Name"];
$member3Grade = $_POST["member3Grade"];



$sql = "INSERT INTO apply(leaderName,leaderGrade,member1Name,member1Grade,member2Name,member2Grade,member3Name,member3Grade) VALUES('$leaderName','$leaderGrade','$member1Name','member1Grade','member2Name','member2Grade','member3Name','member3Grade')";
$result = mysqli_query($Link,$sql);

echo "隊長:$leaderGrade$leaderName<br/>";
echo "隊員1:$member1Grade$member1Name<br/>";
echo "隊員2:$member2Grade$member2Name<br/>";
echo "隊員3:$member3Grade$member3Name<br/>";
echo "感謝您的參與!<br/>";


?>