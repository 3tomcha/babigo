        
<?php
header('Content-Type: text/html; charset=UTF-8');


$input = "あした";
$targetword = array();

$wordA = "あ か さ た な は ま や ら わ";
$boinA=explode(" ",$wordA);

function judgeGroup($targetword,$group,$result){
    if (in_array($targetword, $group)) {
        $result = $targetword."ば";
        print $result;
    } 
}





//for文ループ開始
//$targetword = mb_substr($input,0, 1, "UTF8");
for($i=0; $i<3; $i++){
$targetword[$i] = mb_substr($input,$i, $i+1, "UTF8");
//print $targetword;
    $result = judgeGroup($targetword[$i], $boinA, $result);
    
//if (in_array($targetword[$i], $boinA)) {
//        $result = $targetword[$i]."ば";
//        print $result;
//    }
}

//for文ループ終了

        ?>