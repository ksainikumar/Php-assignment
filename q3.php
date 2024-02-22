<?php
$stepwalked=17500;
if($stepwalked<5000) {
echo "the fitness level is beginner";}
elseif($stepwalked>=5000 && $stepwalked<=1000){
echo"the fitness level is intermediate";}
elseif($stepwalked>1000){
echo"the fitness level is advanced";}
else 
{
echo"invalid input";}
?>