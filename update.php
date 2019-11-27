<?php

require('dbconnect.php');

?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ひとこと掲示板</title>

	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
  <header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary"> 
        <a class="navbar-brand" href="/">Mayonos</a>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
              <li class="nav-item"><?php print(htmlspecialchars($user['name'],ENT_QUOTES)); ?>さん、ようこそ</li>
              
            </ul>
        </div>
    </nav>
</header>
  
  
<div id="wrap">
  <div id="head">
    <h1>編集ページ</h1>
  </div>
  <div id="content">
    
    <!--９、データベースから編集するメモの内容を取得-->
  	<?php 
  	if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
  	    
  	
  	$id = $_REQUEST['id'];
  	$posts = $db->prepare('SELECT * FROM posts WHERE id=?');
  	$posts->execute(array($id));
  	$post = $posts->fetch();
  	
  	}
  	?>
    <form action="update_do.php" method="post">
          <input type="hidden" name="id" value="<?php print($id); ?>">
          <textarea name="message" cols="50" rows="5"><?php print($post['message']); ?></textarea>
         <button type="submit">登録する</button>
    </form>

  </div>
</div>
</body>
</html>