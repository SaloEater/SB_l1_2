<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 02.07.2019
 * Time: 9:25
 */

$result = "";

if (isset($_POST['text']) && isset($_POST['name'])) {
    $encs = 0;
    $text = $_POST['text'];
    foreach (str_split($_POST['name']) as $ch) {
        $count = substr_count($text, $ch);
        $result .= "В тексте содержится " . $count . " символов " . $ch . "<br/>";
        $encs += $count;
    }
    $result .= "Всего " . $encs . " вхождений";
}

?>

<form action="task12.php" method="post">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Текст: <input type="text" name="text" /></p>
    <p><input type="submit" /></p>
</form>
<?php echo PHP_EOL . $result;?>

