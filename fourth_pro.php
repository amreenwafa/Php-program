<?php  
$count = 0;  //variable count initialize with 0 
$num = 2;    
while ($count < 15 )  
{  
$div_count=0;  // initially divide count is 0
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  //if remainder is zero than div count ++
{  
$div_count++; 
}  
}  
if ($div_count<3) //and if divcount  is less than 3 then
{  
echo $num." , ";  
$count=$count+1;  
}  
$num=$num+1;  
}  
?>  