<html>

<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
<title>Результаты</title>
</head>

<body>
<wrapper>
<a href="test.php">Вернуться к тесту</a>
<br>

<?php


$connect = mysqli_connect('localhost', 'root', '','users');

    $result = mysqli_query($connect,"SELECT * FROM results");
    $result = mysqli_fetch_all($result);

    foreach ($result as $user) {

        ?>
    <table>
        <tr>
            <th>Имя пользователя</th>
            <th>ответ на вопрос 1</th>
            <th>ответ на вопрос 2</th>
            <th>ответ на вопрос 3</th>
            <th>ответ на вопрос 4</th>
            <th>ответ на вопрос 5</th>
            <th>ответ на вопрос 6</th>
            <th>ответ на вопрос 7</th>
            <th>ответ на вопрос 8</th>

        </tr>
        <tr>
            <td><?=$user[1] ?> </td>
            <td><?=$user[2] ?> </td>
            <td><?=$user[3] ?> </td>
            <td><?=$user[4] ?> </td>
            <td><?=$user[5] ?> </td>
            <td><?=$user[6] ?> </td>
            <td><?=$user[7] ?> </td>
            <td><?=$user[8] ?> </td>
            <td><?=$user[9] ?> </td>

        </tr>

        </table>
        <br>
            <?php
    }

?>
</wrapper>
</body>
</html>