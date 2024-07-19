<?php
    $people = [
        ["Taro",25,"man"],
        ["Jiro",20,"man"],
        ["hanako",16,"woman"]
    ];

    foreach($people as $i){
        echo $i[0] . "(" . $i[1] . "歳" . $i[2] . ")" . "<br />";
    }