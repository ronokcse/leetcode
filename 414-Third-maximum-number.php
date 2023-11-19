<?php 
    
function thirdMax($nums) {
      
       $nums = array_unique($nums);
       rsort($nums);
       if(count($nums)<3){
              return max($nums);
       }
       else{
              return $nums[2];
       }
}

 echo thirdMax([-2147483648,1,1]);

 ?>