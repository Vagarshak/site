<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="grid_01">
  <?php foreach($items as $item): ?>
  <p><?php echo $item['date_news'];?>
      <i><a href="long_text.php?id=<?php echo $item['id_news'];?>"><?php echo $item['title_news']; ?></a></i></p>
      <hr>
  <?php echo substr($item['text_news'], 0, 250); ?><br/><br/>
  <?php endforeach; ?>
     <a href="add_news.php">Добавить новость</a>
 </div>
</body>
</html>