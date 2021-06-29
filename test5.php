<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <form method = "POST">
        숫자를 입력하시오 : <input type = "text", name = "num"/><br/>
        <input type = "submit", name = "submit"/><br/>
    </form> -->

    <form method = "POST">
        암호해독기 : <input type = "text", name = "num"/><br/>
        <input type = "submit", name = "submit"/><br/>
    </form>

<pre>
<?php

    /*echo "5 *1 = 5" , "<br>";
    echo "5 *2 = 10" , "<br>";
    echo "5 *3 = 15" , "<br>";
    echo "5 *4 = 20" , "<br>";
    echo "5 *5 = 25" , "<br>";
    echo "5 *6 = 30" , "<br>";
    echo "5 *7 = 35" , "<br>";
    echo "5 *8 = 40", "<br>";
    echo "5 *9 = 45", "<br>";*/

    /*$input_data = 0;
    while($input_data>=10){
        echo "10보다 작거나 같아요", $input_data, "<br>";
    }

    echo "10보다 커요",$input_data, "<br>";*/

    /*$num1 = 2;
    $num2 = 1;
    while($num1<=9){
        while($num2<=9){

        $gugudan =  $num1 * $num2;
        echo "" , $gugudan;
        $num2++;
    }*/


    /*
    $num1 = 2; //고정
    $num2 = 1; //변함
    $end = 5;  // 끝값
    
    while($num1<=$end)
    { 
        if($num2 ==1)
            echo $num1, "단","<br>";
        echo $num1, "X" , $num2, "=", $num1*$num2 ,"<br>";
        $num2++;
        if($num2 ==10){
            $num1++;
            $num2 = 1;
            echo "<br>";
        }
        
        
    
    }*/

    /*
    $num = 13;

    do{
        echo "10보다 작거나 같아요 : ", $num, "<br>";
        $num++;
    }
    while($num<=10);
    echo "10보다 커요 :", $num, "<br>";*/

    // for($mux_count = 1; $mux_count<10, $mux_count++){
    //     echo "2 x" , $mux_count , "=", 2*$mux_count, "<br>";
    // }

    
    /*for($mux_count1 = 2; $mux_count1<10; $mux_count1++){
        for($mux_count2 = 1; $mux_count2<10; $mux_count2++){
            $sum = $mux_count1 * $mux_count2, "<br>";
            echo $mux_count1 , "X" , $mux_count2, "=", $sum , "<br>";
        }
           
    }*/


    // 별찍기 _ 삼각형
     /*$get = $_POST['num'];

    for($i = 1; $i < $get; $i++){
        for($j = 0; $j < $i; $j++){
            echo "*";
       
        }
        echo "<br>";
    }*/


   
    // 별찍기 _ 마름모

    /* for($i = 0; $i < $get; $i++){
         for($j = 0; $i < $get; $j++){
             if($i <= $get/2){
                 if()
                  echo "";
             }   
         }
            

     } */


     // 시저암호
     $input_word = $_POST['num'];
     $str = array('a','b','c','d','e','f','g','h','i','j','k',
    'l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

     for($chr = 0; $chr<strlen($input_word); $chr++){
         echo "test : " ,substr($input_word,$chr,1), "->";
        if(substr($input_word,1)!= " ")
        {
         for($i =0; $i <count($str);$i++){
             if(substr($input_word,$chr,1) == $str[$i]){
                 if($i >=23){
                     echo $str[($i-23)],"<br>";
                 }else{
                     echo $str[($i+3)],"<br>";
                 }
             }
         }
               

            
        }
        else{
            echo "<br>";
        }
     }
    

?>
 <pre>
    
</body>
</html>