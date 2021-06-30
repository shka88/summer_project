<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    마술 프로그램을 시작합니다. <br />
    1부터 50까지의 숫자를 생각하신 후 준비가 된다면 다음을 클릭하세요<br/>
    <button id='btnfun1' name = 'btnfun1' onClick = 'location.href="masic_1.php?val=0"'>다음</button>


    <?php
        ini_set('display_errors', '0');

        $input_data = $_GET["val"];
        $input_len = strlen($input_data);
        $input_value = substr($input_data, 1, ($input_len-1));

        if($input_data == 0){
            masic_1_page($input_data,0,1);
        }elseif(substr($input_data,0,1) == 1){
            masic_2_page($input_data,0,1);
        }elseif(substr($input_data,0,1) == 1){
            masic_3_page($input_data,0,1);
        }elseif(substr($input_data,0,1) == 1){
            masic_4_page($input_data,0,1);
        }elseif(substr($input_data,0,1) == 1){
            masic_5_page($input_data,0,1);
        }elseif(substr($input_data,0,1) == 1){
            masic_6_page($input_value);
        }elseif(substr($input_data,0,1) == 1){
        result_page($input_value);
        }

        function masic_1_page()
        {
            echo "1단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br/>";
            for($num = 1; $num <50; $num++){
                if($num %10 ==0){
                    echo "<br />";
                }
                if($num %2 == 1){
                    echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }
            echo "<br />";
            echo "<button id = \"btnfun1\" name=\"btnfun1\" onClick = 'location.href="masic_1.php?val=11\"'>문자열</button>";
            echo "<button id = \"btnfun2\" name=\"btnfun2\" onClick = 'location.href="masic_1.php?val=10\"'>존재하지 않음</button>";
        }

        function masic_2_page($current_value){
            $in_count =0;
            $line_count = 0;
            echo "2단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br/>";

            for($num = 2; $num <50; $num++){
                if($in_count == 2){
                    $num+=2;
                    $in_count =0;
                }
                echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
                $in_count++;

                if($line_count != 0 &&  $in_count%5 ==0){
                    echo "<br />";
                }
                $line_count++;
            }
            echo "<br />";
            echo "<button id = \"btnfun1\" name=\"btnfun1\" onClick = 'location.href="masic_1.php?val=2".($current_value+2),"\"'>존재함</button>";
            echo "<button id = \"btnfun2\" name=\"btnfun2\" onClick = 'location.href="masic_1.php?val=2".($current_value+2),"\"'>존재하지 않음</button>";

        }

        function masic_3_page($current_value){
            $in_count =0;
            $line_count = 0;
            echo "3단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br/>";

            for($num = 4; $num <50; $num++){
                if($in_count == 4){
                    $num+=4;
                    $in_count =0;
                }
                echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
                $in_count++;

                if($line_count != 0 &&  $in_count%5 ==0){
                    echo "<br />";
                }
                $line_count++;
            }
            echo "<br />";
            echo "<button id = \"btnfun1\" name=\"btnfun1\" onClick = 'location.href="masic_1.php?val=3".($current_value+4),"\"'>존재함</button>";
            echo "<button id = \"btnfun2\" name=\"btnfun2\" onClick = 'location.href="masic_1.php?val=3".($current_value+0),"\"'>존재하지 않음</button>";
            
        }

        function result_page($input_value){
            echo "당신이 생각하신 숫자는 ".$input_value, "입니다.";
        }

    ?>
</body>
</html>