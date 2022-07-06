<?php

//$num = 101600;
$num = 1000001;
echo convert($num).'Rupees ' ."Only";
?>

<?php
//$num=0;

 {
    function convertinitial($num) 
    {
        
        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");
        if($num<20){
            $str= $ones[$num]. '  ';
        }
        else if ($num>=20 && $num<100){
            $str= $tens[$num/10] . ' '.$ones[$num%10];
            
        }

        return $str;
    
    }


    function convert($num) 
    {
        if($num< 100){
            $string = convertinitial($num);
     }
     else if($num>= 100 && $num<1000){
            $string = convertinitial($num/100) . "Hundred".' ' .convert($num%100);
     }
     else if($num>= 1000 && $num<100000){
        $string = convertinitial($num/1000) . "Thousand" .' '.convert($num%1000);
     }
     else if($num>= 100000 && $num<10000000){
        $string = convertinitial($num/100000) . "Lakh" .' '.convert($num%100000);
    }
     return $string ;
    }

}

 ?>


