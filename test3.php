
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>테이블 입력</h1>

    <form method = "POST" action  = "lotto.php">
            숫자1: <input type="text" name = "num1"/><br/>
            숫자2: <input type="text" name = "num2"/><br/>
            숫자3: <input type="text" name = "num3"/><br/>
            숫자4: <input type="text" name = "num4"/><br/>
            숫자5: <input type="text" name = "num5"/><br/>
            숫자6: <input type="text" name = "num6"/><br/>
            <input type = "submit" name = "submit"/>
    </form>
    <?php
            $lotto = array(1,3,5,7,9,11);

            $input_num1 = $_POST['num1'];
            $input_num2 = $_POST['num2'];
            $input_num3 = $_POST['num3'];
            $input_num4 = $_POST['num4'];
            $input_num5 = $_POST['num5'];
            $input_num6 = $_POST['num6'];

            if($input_num1 == $lotto[0])
            {
                $count++;
            }
            if($input_num2 == $lotto[1])
            {
                $count++;
            }
            if($input_num3 == $lotto[2])
            {
                $count++;
            }
            if($input_num4 == $lotto[3])
            {
                $count++;
            }
            if($input_num5 == $lotto[4])
            {
                $count++;
            }
            if($input_num6 == $lotto[5])
            {
                $count++;
            }

            switch($count){
                case 0:
                    echo "1등";
                    break;
                case 1:
                    echo "2등";
                    break;
                case 2:
                    echo "3등";
                    break;
                case 3:
                    echo "4등";
                    break;
                case 4:
                    echo "5등";
                    break;

                default:
                    echo "다음기회에";
                }
        ?>
    </body>
</html>