
<?php  
function swap(&$a) { 
    $n = count($a); 
	$swap_no=0;
 
    for($i = 0; $i < $n; $i++){ 
  
        for ($j = 0; $j < $n - 1; $j++){ 
             
            if ($a[$j] > $a[$j+1]){ 
				
				$swap_no +=1;
                $t = $a[$j]; 
                $a[$j] = $a[$j+1]; 
                $a[$j+1] = $t; 
				
            for ($k = 0; $k < $n; $k++) 
				echo $a[$k]." ";
			
			echo "</br>";
			
			}
			
		} 
		
    } 
	return $swap_no;
}   
$a = array(4,7,6,5);
$n = count($a); 
$s =swap($a); 
echo "Sorted array is : ";    
for ($l = 0; $l< $n; $l++){
echo $a[$l]." "; }
echo "</br>";
$fE = current($a);
$lE = end($a);
echo "First element is : $fE";
echo "</br>";
echo "Last element is : $lE";
echo "</br>";
echo "No of swaps is : $s" ;
  
?>

