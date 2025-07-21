<?php
	function binarySearch(array $list, $item) {
    $low = 0;
    $high = count($list) - 1;
    

    while($low <= $high) {
      $mid = intdiv(($low + $high), 2);
      $guess = $list[$mid];
      
      if($guess == $item) {
        return $mid;
      }
      if($guess > $item) {
        $high = $mid - 1;
      } 
      else{
        $low = $mid + 1;  
      }
    }
    
    return null;
	}
	 
	$numbers = [1, 2, 4, 5, 8, 9, 12, 14];
	echo binarySearch($numbers, 8); // Must return 4
?>