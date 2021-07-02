<?php
    $paper[0] = "copier";
    $paper[1] = "lnkjet";
    $paper[2] = "Laser";
    $paper[3] = "photo";

    /*echo "<pre>";
    print_r($paper);
    echo "<pre/>";

    echo "<pre>";
    var_dump($paper);
    echo "<pre/>";*/


    /*for($i =0; $i<4; $i++){
        echo "$i: $paper[$i]<br/>";
    }

    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjec'] = "Inkjet Printer";
    $paper['Laser'] = "Laser printer";
    $paper['Photo'] = "Photographic paper";

    echo "<br>"

    $p1 = array("copier","inkjec","Laser","Photo");

    echo "p1 element: " , $p1[2], "<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
    'inkjec' => "Inkjet Printer",    // =>  변수가 아닌 인덱스에 대입
    'Laser' => "Laser printer",
    'Photo' => "Photographic paper");

     echo "p2 element: " , $p2['inkjec'], "<br>";

     echo "<br>"*/
     

     // foreach
     /*$paper = array("copier","inkjec","Laser","Photo");
     $j =0;

     foreach($paper as $item){   // as 대체 사용 ㅇ
         echo "$j : $item<br>";
         ++$j;*/



    /* $paper = array('copier' => "Copier & Multipurpose",
    'inkjec' => "Inkjet Printer",    // =>  변수가 아닌 인덱스에 대입
    'Laser' => "Laser printer",
    'Photo' => "Photographic paper");*/



    /*foreach($paper as $item => $daecription){   // as 대체 사용 ㅇ
        echo "$item : $daecription<br>";
    }*/


       /* while(list($item, $daecription) = each($paper)){   // 지원대상 아님 forecah문으로 
            echo "$item : $daecription<br>";
        }*/

    
    /*$products = array( 
    'paper'=> array(
        'copier' => "Copier & Multipurpose",
        'inkjec' => "Inkjet Printer",    // =>  변수가 아닌 인덱스에 대입
        'Laser' => "Laser printer",
        'Photo' => "Photographic paper"),
    
    'pens'=> array(
        'ball' => "Ball Foint",
        'hilite' => "Hightlighters",    // =>  변수가 아닌 인덱스에 대입
        'marker' => "Markers"),

    'misc'=> array(
        'tape' => "Copier & Multipurpose",    // =>  변수가 아닌 인덱스에 대입
        'glue' => "Laser printer",
        'clips' => "Photographic paper"));

    echo "<per>";
    foreach($products as $section => $items)
        foreach($items as $key => $value)
            echo "$section:\t$key\t($value)<br>";
    echo "</pre>";*/


    /*$array_test = array(3,2,7,5,1);
    sort($array_test);

    $arrlength = count($array_test);
    for($x = 0; $x < $arrlength; $x++) {
        
        echo $arrlength[$x];
        
    }

    echo "<br>";

    $arr = array( 1,4,6,2,5,3 );
    shuffle($arr);            

    $arrlength2 = count($arr);
    for ( $i = 0; $i < $arrlength2; $i++ ) {
        echo  $arrlength2[$i];
    }

    echo "<br>";

    $fname = "Elizabeth";
    $sname = "Windsor";
    $address = "Buckingham Palace";
    $city = "London";
    $country = "United Kingdom";

    $contact = compact('fname','sname','address','city','country' );
    print_r($contact);*/




?>
