<?php
function tao_mang($so_ptu, $min, $max, $check_double = false){
    // nếu người dùng truyền vào tham số check_double == true
    // thì mảng sinh ra không đc phép chứa giá trị trùng nhau
    
    $arr = [];
    if(!$check_double){
        for($i = 0; $i < $so_ptu; $i++){
            $arr[] = rand($min, $max);
        }
    }else{
        for ($i=0; $i < $so_ptu; $i++) { 
            if($i == 0){
                $arr[] = rand($min, $max);
                continue;
            }
            $flag = true;
            while($flag == true){
                $randomValue = rand($min, $max);;
                $count = 0;
                foreach($arr as $value) {
                    if($value == $randomValue){
                        $count++;
                    }
                }
                if($count == 0){
                    $arr[] = $randomValue;
                    $flag = false;
                }
            }
        }
    }
    
    return $arr;
}




?>