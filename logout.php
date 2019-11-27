<?php
session_start();

if (isset($_SESSION["id"])) {
    $errorMessage = "ログアウトしました。";
} else {
    $errorMessage = "セッションがタイムアウトしました。";
}

// セッションの変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>会員登録</title>

	<link rel="stylesheet" href="../style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div id="wrap">
<div id="head">
	<nav class="navbar navbar-expand-sm navbar-dark"> 
        <a class="navbar-brand" href="/">ログアウト画面</a>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
              <li class="nav-item"><a href="../login.php">ログイン</a></li>
            </ul>
        </div>
    </nav>
</div>

<div id="content">
        <div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
        <ul>
            <li><a href="login.php">ログイン画面に戻る</a></li>
        </ul>
</div>
</body>
</html>
