<?php
$useranswers=array("A","B","C","D","A","e","f");
$correctanswers=array("A","B","C","D","A","e","f");
$score=0;
for($i=0;$i<count($useranswers);$i++){
if($useranswers[$i]===
$correctanswers[$i]){
$score++;
}
}
echo"user score:".$score."/".count($useranswers);
?>