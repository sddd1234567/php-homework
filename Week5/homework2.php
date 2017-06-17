<?php
date_default_timezone_set("Asia/Taipei");
echo "<font color='red' size = '5'>現在時間為：".date("Y年M月d日h:i:sa")."</font><br/>";

$nowTime = time();
echo "現在是".date("Y",$nowTime)."<br/>";

$endTime = mktime('0','0','0','8','7','2035');

$restTime = $endTime - $nowTime;

$year = (int) (($restTime / (86400))/365);
$month = (int) ((($restTime / (86400)) % 365)/30);
$day =		(int) ((($restTime / (86400)) % 30) / (86400));
$hours = 	(int) (($restTime%86400) / 3600);
$minutes = 	(int) (($restTime%3600) / 60);
$seconds =	($restTime%60);


echo "末日是".date("Y",$endTime)."<br/>";

echo "距離世界末日還剩下: ".$year."年".$month."月". $day."日".$hours."時".$minutes."分".$seconds."秒<br/><br/><br/><br/><br/>";

$nowMonth = date("m",time());

if($nowMonth == 1)
{
	echo "<img src='http://pic.pimg.tw/aguaviva2077/4b84a9553165a.jpg'>";
}

else if ($nowMonth == 2)
{
	echo "<img src='http://bizhi.zhuoku.com/2011/02/01/yueli/Yueli16.jpg'>";
}

else if ($nowMonth == 3)
{
	echo "<img src='http://i1.w.hjfile.cn/doc/201203/1129619427fbl41729.jpg'>";
}

else if ($nowMonth == 4)
{
	echo "<img src='https://i.ytimg.com/vi/HHW9Btv32-k/maxresdefault.jpg'>";
}

else if ($nowMonth == 5)
{
	echo "<img src='http://twimg.edgesuite.net/images/ReNews/20140512/420_9c780db598fe3267b332c45cc6e6a7f7.jpg'>";
}

else if ($nowMonth == 6)
{
	echo "<img src='http://tcmp.cpami.gov.tw/filesys/metro_tc/images/plant/78%E5%85%AD%E6%9C%88%E9%9B%AA.JPG'>";
}

else if ($nowMonth == 7)
{
	echo "<img src='http://img.bimg.126.net/photo/1vTHrVUTQ9TBzWwDtP4BwQ==/1163336078745618826.jpg'>";
}

else if ($nowMonth == 8)
{
	echo "<img src='http://www.qqjpg.com/uploads/allimg/160314/1030003121-3.jpg'>";
}

else if ($nowMonth == 9)
{
	echo "<img src='http://www.kuachen.com/uploads/allimg/131009/1300-13100ZTZ3547.jpg'>";
}

else if ($nowMonth == 10)
{
	echo "<img src='http://iphoto.ipeen.com.tw/photo/ipeen/200x200/vip/2/0/1/store_619102/sp619102_20130811154607131.jpg'>";
}

else if ($nowMonth == 11)
{
	echo "<img src='https://interstude.com/wp-content/uploads/2015/11/november-2015.jpg'>";
}

else if ($nowMonth == 12)
{
	echo "<img src='http://www.clipartkid.com/images/155/wm-f-horne-december-due-dates-wm-f-horne-01Xmbs-clipart.jpg'>";
}


?>