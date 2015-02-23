<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="grid_01">
    <form action="add_news.php" method="post">
        <table>
            <tr>
                <th>Заголовок новостей</th>
            </tr>
            <tr>
                <td>
                    <input id="title" type="text" name="title">
                </td>
            </tr>
            <tr>
                <th>Текст новостей</th>
            </tr>
            <tr>
                <td>
                    <textarea id="text_news" cols="40" rows="10" name="text_news"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="submit" type="submit" value="Добавить">
                </td>
            </tr>
        </table>
    </form>
    <a href="/">На главную</a>
</div>
</body>
</html>