//write a progaram to sum the number of digits

<?php  
$num = 14597;    //insialise the value of number 
$sum=0; $rem=0;          //initially sum and rem is 0
for ($i =0; $i<=strlen($num);$i++)  
 {  
    $rem=$num%10;  
    $sum = $sum + $rem; 
    $num=$num/10;  
}  
echo "Sum of digits 14597 is $sum";  
?> 