<?php
    $item_list = array("k_item1","k_item2","k_item3","k_item4","k_item5","k_item6","k_item7","k_item8",
    "k_item9","k_item10","k_item11","k_item12","k_item13","k_item14","k_item15","k_item16",
    "k_item17","k_item18","k_item19","k_item20","k_item21","k_item22","k_item23","k_item24",
    "k_item25","k_item26","k_item27","k_item28","k_item29","k_item30","k_item31","k_item32",
    "k_item33","k_item34","k_item35","k_item36","k_item37","k_item38","k_item39","k_item40",
    "k_item41","k_item42","k_item43","k_item44","k_item45","k_item46","k_item47","k_item48",
    "k_item49","k_item50","k_item51","k_item52","k_item53","k_item54","k_item55","k_item56",
    "k_item57","k_item58","k_item59","k_item60","k_item61","k_item62","k_item63","k_item64");

    $item_box1 = $item_list[rand(0,count($item_list)-1)];
    $item_box2 = $item_list[rand(0,count($item_list)-1)];
    $item_box3 = $item_list[rand(0,count($item_list)-1)];
    $item_box4 = $item_list[rand(0,count($item_list)-1)];
    $item_box5 = $item_list[rand(0,count($item_list)-1)];
    $item_box6 = $item_list[rand(0,count($item_list)-1)];
    $item_box7 = $item_list[rand(0,count($item_list)-1)];
    $item_box8 = $item_list[rand(0,count($item_list)-1)];

    $reward = compact('item_box1','item_box2','item_box3','item_box4','item_box5','item_box6','item_box7','item_box8');
    shuffle($reward);

    echo "<h1>한국 패턴무늬</h1>";
    echo "<h2>전통 무늬 선택</h2>";

    echo "<h2>item 1의 아이템</h2>";
    for($i =0; $i<4; $i++){

        echo "Item Box", $i+1, "아이템 : <img src=\"./img/$reward[$i].png\"<br>";
    }

    echo "<h2>item 2의 아이템</h2>";
    for($i = 4; $i<8; $i++)
    {
        echo "player" , $i-3, " 아이템 :<img src=\"./img/$reward[$i].png\"<br>";
    }
    echo "주어진 상태로 시작";

?>