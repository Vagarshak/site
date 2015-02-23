<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="grid_01">
    <?php foreach($db->result_set() as $value): ?>
        <p><?php echo $value['date_news'];?>
            <i><?php echo $value['title_news']; ?></i></p>
        <hr>
        <?php echo $value['text_news']; ?><br/><br/>
    <?php endforeach; ?>
    <a href="./index.php">На главную страницу</a>
</div>
</body>
</html>