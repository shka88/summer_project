
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>삼항연산자</h1>

    <!-- <form method = "POST">
        홍보를  하지 않을 경우 수입: <input type="text" name = "num1"/><br/>
        홍보를 할 경우 수입: <input type="text" name = "num2"/><br/>
        홍보비용: <input type="text" name = "num3"/><br/>
        <input type = "submit" name = "submit"/>
    </form> -->

<!-- 
    <form method = "POST">
        월 입력: <input type="text" name = "num"/><br/>
    </form> -->

     <?php

     // if-elseif문 사용

        /*
         $randa_num = rand(1,100);
         echo "던진 공의 위치", $randa_num;

           
            if(30 <= $randa_num && $randa_num >=40)
            {
                echo "슬기 win";
            }
            elseif(60 <= $randa_num && $randa_num >=70){
                echo "슬기 win";
            }
            else{
                echo "선생님 win";
            } */

           //  $randa_num = rand(1,100);
        //  echo "던진 공의 위치", $randa_num;




    // 연산자 사용하여 6의 배수만들기

         /*$rand_num = rand(1,100);
         echo "던진 공의 위치", $randa_num;

            if($randa_num%6 ==0)
            {
                echo "슬기 win";
            }
            elseif(50 <= $randa_num && $randa_num >=70){
                echo "슬기 win";
            }
            else{
                echo "슬기 lose";
            } */

        // 홍보 수입

            
            /*$input_num1 = $_POST['num1'];
            $input_num2 = $_POST['num2'];
            $input_num3 = $_POST['num3'];

            echo "홍보no 수입 = ", $input_num1,"<br>";
            echo "홍보 수입 = ", $input_num2,"<br>";
            echo "홍보 비용 = ", $input_num3,"<br>";

            if($input_num2-$input_num1>$input_num3)
            {
                echo "홍보를 하는 경우:" ,($input_num2-$input_num1)-$input_num3 ,"advertise";
                
            }
            elseif($input_num2-$input_num1<$input_num3)
            {
                echo "홍보를 않했을 때:" ,($input_num2-$input_num1)-$input_num3 , "do not advertise";
            }
            else{
                echo "홍보하거나 않하거나 같은 값 존재", "does not advertise";
            }*/

            // switch 구문

            /*$ssfw_num = $_POST['num'];
            switch($ssfw_num){
                case 12 :
                case 1 :
                case 2 :
                    echo "winter 입니다.";
                    break;
                case 3 :
                case 4 :
                case 5 :
                    echo "spring 입니다.";
                    break;

                case 6 :
                case 7 :
                case 8 : 
                    echo "summer 입니다.";
                    break;
                case 9 :
                case 10 :
                case 11 : 
                    echo "fail 입니다.";
                    break;

                default :
                    echo "잘못입력하셨습니다.";
                   
            }*/

            $number = 60;
            echo $number > 50 ? "passed" : "failed";
        ?> 
       
    



    </body>
</html>