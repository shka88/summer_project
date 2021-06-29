<?php
ini_set('display_errors', '0');
$num = $_GET["num"];
$count = $_GET["count"]+$num;
echo <<<_END


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>확률</title>
</head>
<body>
    <button onclick="window.location.href='test6.php?num=1&&count=$count'">1회평가</button>
    <button onclick="window.location.href='test6.php?num=10&&count=$count'">10회평가</button>
</body>
</html>
_END;

    echo "<br>시도 횟수 : ", $count;
    if($num == 1)
    {
        $select_num = rand(0,100000)/1000;
        select_char($select_num);
    }
    else{
        for($i=0; $i<$num;$i++)
        {
            $select_num = rand(0,100000)/1000;
            select_char($select_num);
        }
    }

    function select_char($select_num)
    {
        if($select_num >=0 && $select_num <=0.01)
        {
            echo '<p style= "color":red>네스트라의 사도 세인<br>';
        }
            elseif($select_num >0.01 && $select_num<=0.02)
            {
                echo '<p style= "color":red>네스트라의 사도 밍<br>';
            }
        }
    
?>
