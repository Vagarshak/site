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
        <i><?php echo $item['title_news']; ?></i></p>
        <hr>
        <?php echo $item['text_news']; ?><br/><br/>
    <?php endforeach; ?>
    <a href="index.php">На главную страницу</a>
</div>
</body>
</html>