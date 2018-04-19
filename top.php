
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <style>
        ul,li{
            margin:0;
            padding:0;
        }
        figure{
            border:1px solid black;
            background-color: pink;
            width: 322px;
            height:500px;
        }
        figure ul{
            text-align: center;
            display:flex;
            justify-content: flex-start;
            flex-wrap: wrap; 
            background-color:gray;
            height:100%;
        }
        figure ul li{
            list-style-type: none;
            justify-content: space-around;
            box-sizing: border-box;
            flex-grow: 1;
            width: 50%;
            background-color:white;
            border:1px solid black;
        }
        figure ul li:first-child{
            width:100%;
            background-color: gray;
        }
        figure ul li:nth-child(2){
            width:100%;
        }
        article ul li{
            margin-bottom:20px;
        }
    </style>
    <body>
        <h1>トップ画面</h1>
        <figure>
            <ul>
            <li>ヘッダー</li>
            <li>入力欄</li>
            <li>音声入力</li>
            <li>音声出力</li>
            <li>リセット</li>
            <li>バビ語生成</li>
            <li>LINEで送る</li>
            <li>twitterで共有</li>    
            </ul>
        </figure>
        <article>
        <ul>
            <li><b>音声入力</b><br>マイク音声を文字に変換する<br><a href="https://cloud.google.com/speech/">google cloud speech APIを使用</a></li>
            <li><b>音声出力</b><br>入力欄に書かれた文字を音声で出力する<br><a href="https://cloud.google.com/text-to-speech/">google cloud TEXT-TO-SPEECHを使用</a></li>
            <li><b>リセット</b><br>入力欄に書かれた文字を消去する</li>
            <li><b>バビ語生成</b><br>入力欄に書かれた文字をバビ語に変換し、入力欄に出力する<br>
                <a href="babigoapi.php">自作webAPIを使用</a></li>
            <li><b>LINEで送る</b><br>入力欄に書かれた文字をLINEで出力する<br><a href="https://developers.line.me/ja/services/messaging-api/">lINEMessagingAPIを使用</a></li>
            <li><b>twitterで共有</b><br>入力欄に書かれた文字をtwitterで出力する<br>
                <a href="https://developer.twitter.com/en/docs">twitterAPIを使用</a></li>
        </ul>
            </article>
<?php
?>
    
    
    </body>
</html>
