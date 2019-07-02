<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 02.07.2019
 * Time: 9:45
 */

$result = "";

if (isset($_POST['text'])) {
    $result = "Результат: " . (strlen($_POST['text']) > 50 ? (substr($_POST['text'], 0, 47) . "...") : $_POST['text']);
}

?>

<form action="task13.php" method="post">
    <p>Текст: <input type="text" name="text" /></p>
    <p><input type="submit" /></p>
</form>
<?php echo PHP_EOL . $result;?>
