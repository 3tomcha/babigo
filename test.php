        <?php
        $url="http://girly.lolitapunk.jp/babigoapi/index.php";
        $json = file_get_contents($url);
        
//        $kekka = mb_convert_encoding($url, utf8_decode($url))
        $str = mb_convert_encoding($json,"utf-8","utf-8");
        $obj = json_decode($str);
        print_r($obj);
        ?>
