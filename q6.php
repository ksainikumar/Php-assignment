<?php
$storedusername="user123";
$storedpassword="password123";
$providedusername="user123";
$providedpassword="password123";
if($providedusername===$storedusername && $providedpassword===$storedpassword)
{echo "login successful";}
else{
echo"invalid credentials";}
?>