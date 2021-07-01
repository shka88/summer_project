<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>마술 프로그램</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </head>
   
    <body class = "page_taget">
    <!-- <h1>당신이 생각한 숫자는?</h1> -->

    <div class="change">
        
    <pre>
    <?php
        //echo "<br>";
        ini_set('display_errors', '0');
    
        $input_data = $_GET["val"];
        $input_len = strlen($input_data);
        $input_value = substr($input_data, 1, ($input_len - 1));
        $level = substr($input_data, 0, 1);
        switch($level)
        {
            case 0:
                masic_page($level,$input_value);
                break;
            case 1:
                masic_page($level,$input_value);
                break;
            case 2:
                masic_page($level,$input_value);
                break;
            case 3:
                masic_page($level,$input_value);
                break;
            case 4:
                masic_page($level,$input_value);
                break;
            case 5:
                masic_page($level,$input_value);
                break;
            case 6:
                result_page($input_value);
                break;
        }

       
        function masic_page($level, $current_value)
        {
            $in_count = 0;
            $line_count = 0;
            echo "<h1>";
            echo ($level+1),"단계 하단의 숫자 중 생각하신 숫자가 있으십니까?<br>";
            echo "<br>";
            $point = pow(2,$level);

            for($num = $point; $num < 50; $num++)
            {
                if($in_count == $point)
                {
                    $num += $point;
                    $in_count = 0;
                }

                echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
                $in_count++;
                
                if($line_count != 0 && $line_count % 5 == 0)
                {
                    echo "<br>";
                    //$line_count = 0;
                }
                $line_count++;
            }
            echo "<br>";
            echo "<br>";
            echo "</h1>";
            echo "<button id=\"btnfun1\" name=\"btnfun1\ type=\"button\" class=\"btn btn-info\" onClick='location.href=\"magic.php?val=",($level+1),($current_value +$point), "\"'>존재함</button>";
            echo "<button id=\"btnfun2\" name=\"btnfun2\type=\"button\" class=\"btn btn-info\" onClick='location.href=\"magic.php?val=",($level+1),($current_value), "\"'>존재하지 않음</button>";
            
        
        }

        function result_page($input_value)
        {
            echo "<h1>당신이 생각한 숫자는 ", $input_value, "입니다.</h1>";
            echo "<br>";
            echo "<br>";
            echo "<button id=\"btnfun2\" name=\"btnfun2\type=\"button\" class=\"btn btn-info\"onClick='location.href=\"masic.html\"'>다시하기</button>";
           
        }
    ?>
    </pre> 
    </h2>
    </div>
    </body>
    </html>