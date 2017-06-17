<?php

if(isset($_FILES["0"]))
{
	$i = 0;
	while(isset($_FILES[$i.""]))
	{
		if(move_uploaded_file($_FILES[$i.""]["tmp_name"],$_FILES[$i.""]["name"]))
		{
     		echo "第".($i+1)."個檔案上傳成功<br/>";
     	}
     	else
     		echo "第".($i+1)."個檔案上傳失敗<br/>";

     	$i++;
	}
}

else
{
	if(!isset($_GET["num"]))
		header("Location:front.php");

	$num = $_GET["num"];
	echo "<form action='back.php'' method = 'post' enctype='multipart/form-data'><br/>";

	for($i = 0; $i < $num; $i++){
		echo "<input type='file' name='$i'><br/>";
	}
	echo "<input type='submit'>";

	echo "</form>";
}

?>