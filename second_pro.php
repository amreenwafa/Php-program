//write a progaram to sum the number of digits

<?php  
$num = 14597;    //insialise the value of number 
$sum=0; $rem=0;          //initially sum and rem is 0
for ($i =0; $i<=strlen($num);$i++)   //strlen($num)" is a function that returns the length of the string in the variable $num.
                                     // For example, if $num contains the string "23654", strlen($num) would return 5 
 {  
    $rem=$num%10;          //1459%10=9    it gives remainder 
    $sum = $sum + $rem; 
    $num=$num/10;  
}  
echo "Sum of digits 14597 is $sum";  
?> 