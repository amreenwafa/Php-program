Prime number in PHP
<?php
$count = 0;  
$num = 2;  
while ($count < 15 )  
{  
    $div_count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
}  
?>