<?php
$mealtype1=$m_type;
if (!empty($mealtype1))
{   
    //تحدي ما اذا كان تم النقر على الوجبة وايضا تحديد نوع المقياس
    if(!empty($mealtype1)){
      if($mealtype1=='100401'){
        $meal_type="snak";
        $musr_type=addslashes("mizan");
      }
      else if($mealtype1=='100402'){
        $meal_type="snak";
        $musr_type=addslashes("spoon");
      }
      else if($mealtype1=='100403'){
        $meal_type="snak";
        $musr_type=addslashes("cup");
      }

      if($mealtype1=='100301'){
        $meal_type="dinner";
        $musr_type="mizan";
      }
      else if($mealtype1=='100302'){
        $meal_type="dinner";
        $musr_type="spoon";
      }
      else if($mealtype1=='100303'){
        $meal_type="dinner";
        $musr_type="cup";
      }
      
      if($mealtype1=='100201'){
        $meal_type="lanch";
        $musr_type="mizan";
      }
      else if($mealtype1=='100202'){
        $meal_type="lanch";
        $musr_type="spoon";
      }
      else if($mealtype1=='100203'){
        $meal_type="lanch";
        $musr_type="cup";
      }
      if($mealtype1=='100101'){
        $meal_type="breakFast";
        $musr_type="mizan";
      }
      else if($mealtype1=='100102'){
        $meal_type="breakFast";
        $musr_type="spoon";
      }
      else if($mealtype1=='100103'){
        $meal_type="breakFast";
        $musr_type="cup";
      }
    }

}
 



//$mea2l=$_POST['meal'];
//echo "your name is :<br>".$mea2l ;

?>