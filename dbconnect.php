<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=minimini;charset=UTF8;', 'root', '');
}catch(PDOException $e){
    print('DB接続エラー:' . $e->getMessage());
}