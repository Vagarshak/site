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
            <i><a href="long_text.php?id=<?php echo $value['id_news'];?>"><?php echo $value['title_news']; ?></a></i></p>
        <hr>
        <?php echo substr($value['text_news'], 0, 250); ?><br/><br/>
    <?php endforeach; ?>
    <a href="add_news.php">Добавить новость</a>
</div>
</body>
</html>