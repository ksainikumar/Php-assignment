<?php
$score=85;
if($score<60){
echo"the grade is F";}
elseif($score>=60 && $score<=70){
echo"the grade is D";}
elseif($score>=71 && $score<=80){
echo"the grade is C";}
elseif($score>=81 && $score<=90){
echo"the grade is B";}
elseif($score>90){
echo "the grade is A";}
else {
echo"invalid score";}
 ?>