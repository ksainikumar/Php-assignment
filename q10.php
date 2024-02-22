<?php
$articletitle="this is a very long article title that exceeds the 5 characters
limit";
if(strlen($articletitle)>50){
$truncatedtitle=substr($articletitle,0,50). "...";
echo"truncate article title:".$truncatedtitle;}
else{
echo"article title:".$articletitle;}
?>