<?php
$items=array("item1"=>2000,"item2"=>2000,"item3"=>1000,"item4"=>1000);
$totalprice=0;
foreach($items as $item=>$price)
{
$totalprice+=$price;
}
if ($totalprice>5000)  {
$discountedprice=$totalprice*0.9;
echo"total price:Rs." .$totalprice."<br>";
echo "discounted price(10% off):Rs." .$discountedprice;
}
else
{
echo"total price: Rs." .$totalprice;
}
?>