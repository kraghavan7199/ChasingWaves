<?php
$content = $_POST["content"];
$new_content ="\n".$_POST['pls'].' : '.$content;
$file = fopen("chat.txt","a+");
fwrite($file,$new_content);
fclose($file);
header("location:forum.php");	
?>