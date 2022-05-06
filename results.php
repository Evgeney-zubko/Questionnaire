
<html>

<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
<wrapper>

<p> Ваши результаты:</p> <br>
<?php


$name = $_POST['id'];

$array = array();


$answers = 0;


if (isset($_POST['check'])) {
    /*1*/

    if (isset($_POST['a_1'])) {
        $answers++;
        $array[1] = 1;
    } else {
        $array[1] = 0;
    }

    /*2*/
    if (isset($_POST['a_2'])) {
        $answers++;
        $array[2] = 1;
    } else {
        $array[2] = 0;
    }

    /*3*/

    $var = "";
    $field = $_REQUEST['list_1'];
    if (strcasecmp($field, "4") == 0) {
        $answers++;
        $array[3] = 1;
    } else {
        $array[3] = 0;
    }

    /*4*/

    $var = "";
    $field = $_REQUEST['list_2'];
    if (strcasecmp($field, "3") == 0) {
        $answers++;
        $array[4] = 1;
    } else {
        $array[4] = 0;
    }


    /*5*/
    if (isset($_POST['a_3_1']) && isset($_POST['a_3_2']) && isset($_POST['a_3_3'])) {
        $answers++;
        $array[5] = 1;
    } else {
        $array[5] = 0;
    }


    /*6*/
    if (isset($_POST['a_6']) && (strcasecmp($_POST['a_6'], "пазлы") == 0 or strcasecmp($_POST['a_6'], "puzzles") == 0)) {
        $answers++;
        $array[6] = 1;
    } else {
        $array[6] = 0;
    }

    /*7*/
    if (isset($_POST['a_7']) && (strcasecmp($_POST['a_7'], "поп") == 0 or strcasecmp($_POST['a_7'], "pop") == 0)) {
        $answers++;
        $array[7] = 1;
    } else {
        $array[7] = 0;
    }


    /*8*/
    $var = "";
    $field = $_REQUEST['list_3'];
    if (strcasecmp($field, "2") == 0) {
        $answers++;
        $array[8] = 1;
    } else {
        $array[8] = 0;
    }
}


    $connect = mysqli_connect('localhost', 'root', '', 'users');

    mysqli_query($connect, "INSERT INTO `results` (`id`, `name`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `answer_6`, `answer_7`, `answer_8`) VALUES (NULL, '$name', '$array[1]',  '$array[2]',  '$array[3]', $array[4], '$array[5]',  '$array[6]',  '$array[7]',  '$array[8]')");

    echo mysqli_error($connect);



    $result = mysqli_query($connect,"SELECT * FROM results WHERE results.name ='$name'");
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

<div id="answer">

    <p>Вы верно ответили на <span><?=$answers ?><span> вопросов из 8</p>
    <br>

    <a href="test.php">Пройти тест ещё раз</a>
    <a href="alg.php">Посмотреть результаты других пользователей</a>


</div>
</wrapper>
</body>
</html>