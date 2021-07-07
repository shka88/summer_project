<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <table>
        <thead>
            <tr>
                <th width = "10">번호</th>
                <th width = "10">아이디</th>
                <th width = "10">패스워드</th>
                <th width = "150">휴대폰번호</th>
                <th width = "50">민원유형</th>
                <th width = "150">제목</th>
                <th width = "50">문의일자</th>
                <th width = "50">조회수</th>
            </tr>
        </thead>

    <form  method = "POST" action = "index2.php">
        <!-- 번호 : <input type = "text", name = "no"><br> -->
        아이디 : <input type = "text", name = "id"><br>
        패스워드 : <input type = "text", name = "pw"><br>
        휴대폰번호 : <input type = "text", name = "phone"><br>
        민원유형 : <input type = "text", name = "type_list"><br>
        제목 : <input type = "text", name = "title"><br>
        문의일자 : <input type = "text", name = "answer_date"><br>
        <!-- 조회수 : <input type = "text", name = "count_list"><br>  -->
            <input type = "submit" value = "제출" name = "btn"><br>
    </form>


    <?php
    $db_hostnmae = '127.0.0.1';
    $db_database = 'member';
    $db_username = 'gayoung';
    $db_password = '5284';

    $db_server = new mysqli($db_hostnmae, $db_username, $db_password, $db_database, 3306);
    if(!$db_server)
        echo "DB Server connect Error<br>";

    else
        echo "DB Server connect<br>";

    // $h_no = $_POST['no'];
    $h_id = $_POST['id'];
    $h_pw = $_POST['pw'];
    $h_phone = $_POST['phone'];
    $h_type = $_POST['type_list'];
    $h_title = $_POST['title'];
    $h_date = $_POST['answer_date'];
    // $h_num_count = $_POST['count_list'];   h_no, '$h_no',


    //insert ex
    $Insert = "INSERT INTO hometax(
        h_id, h_pw, h_phone, h_type, h_title, h_date, h_num_count) VALUES(
        '$h_id','$h_pw','$h_phone','$h_type','$h_title','$h_date','$h_num_count')";
    $result = mysqli_query($db_server, $Insert);
    if($result == false){
        echo mysqli_error($db_server);
    }  

    //select ex
    $Select = "SELECT *FROM hometax";
    $result = mysqli_query($db_server, $Select);
    while($board = $result->fetch_array())
    {
        $h_no = $board['h_no'];
        $h_id = $board['h_id'];
        $h_pw = $board['h_pw'];
        $h_phone = $board['h_phone'];
        $h_type = $board['h_type'];
        $h_title = $board['h_title'];
        $h_date = $board['h_date'];
        $h_num_count = $board['h_num_count'];
        echo <<<END
        <tbody>
         <tr>
            <td width = "100">$h_no</td>
            <td width = "100">$h_id</td>
            <td width = "100">$h_pw</td>
            <td width = "100">$h_phone</td>
            <td width = "100">$h_type</td>
            <td width = "100">$h_title</td>
            <td width = "100">$h_date</td>
            <td width = "100">$h_num_count</td>
         </tr>
        </tbody>
END;
    }


    
    // echo $h_no, "<br>";
    // echo $h_id, "<br>";
    // echo $h_pw, "<br>";
    // echo $h_phone, "<br>";
    // echo $h_type, "<br>";
    // echo $h_title, "<br>";
    // echo $h_date, "<br>";
    // echo $h_num_count, "<br>";   h_no,'$h_no',

    
?>
    </table>

  
</body>
</html>