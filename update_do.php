<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
        <title>resipisite</title>
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <pre>
                <?php
                require('dbconnect.php');
                  $statement = $db->prepare('UPDATE posts SET message=? WHERE id=?');
                   $statement->execute(array($_POST['message'],$_POST['id']));
                ?>
            </pre>
            <p>メモの内容を変更しました</p>
            <p><a href="index.php">戻る</a></p>
        </main>
    </body>
</html>