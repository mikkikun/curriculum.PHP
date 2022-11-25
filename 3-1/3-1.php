<?php
for($i=1;$i<101;$i++) { 
  if($i % 3 ==0 && $i % 5 ==0) {
    echo '<br>';
    echo "FizzBuzz!!";
  }elseif($i % 5 ==0) {
    echo '<br>';
    echo "Buzz!";  
  }elseif($i % 3 ==0) {
    echo '<br>';
  echo "Fizz!";
  }else {
    echo '<br>';
    echo $i;
  }
};
?>