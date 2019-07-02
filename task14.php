<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 02.07.2019
 * Time: 9:45
 */

$result = "";

if (isset($_POST['text'])) {
    $result = "Результат: ";
    $words = explode(' ', $_POST['text']);
    $w_length = count($words);
    $length = 0;
    $i = -1;
    while ( $length < 50 && $i++ < $w_length) {
        $length += strlen($words[$i]);
        $result .= $words[$i] . ' ';
    }
}

?>

<form action="task14.php" method="post">
    <p>Текст: <input type="text" name="text" /></p>
    <p><input type="submit" /></p>
</form>
<?php echo PHP_EOL . $result;?>
