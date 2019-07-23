<?php
// function recursive($num)

// 	{
// 		echo $num."+";
// 		if ($num<15) {
// 			return recursive($num+1);
// 		}
// 	}
// 	$start=1;
// 	recursive ($start);



//namta------
// for ($i=22; $i<41;$i++){
// 	for($j=1;$j<11;$j++)

// 	{
	
// 		echo"$i X $j =".($i*$j)."<br>";
// 	}


//sum of numbers using loop
$sum = 0;
for($x=1; $x<=5; $x++)
{
$sum =$x+$sum;
}
echo "The sum of the numbers 1 to 5 is $sum"."\n";
?>