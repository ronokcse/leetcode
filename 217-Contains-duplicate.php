<?php 
    function containsDuplicate($nums) {

        // Solution1


        /* sort($nums);
            $count  = count($nums);

            if($count == 1){
                return false;
            }
            for( $i = 0; $i < $count-1; $i++ ){
                if($nums[$i]== $nums[$i+1]){
                    return true;
                }
            }
            return false;
        /*

        // Solution 2

        /*    
            $first_size = count($nums);
            $new_array = array_unique($nums);
            $second_size = count($new_array);
            if ($first_size != $second_size) {
                return true;
            }
            else{
                return false;
            }
        */
      
    }

    $list1 = [1,2,3,4,2];
    echo containsDuplicate($list1);

 ?>