<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 02.07.2019
 * Time: 9:21
 */

$result = "";

if (isset($_POST['text']) && isset($_POST['names'])) {
    $names = explode(',', str_replace(' ', '' ,$_POST['names']));
    echo "Имена: ";
    print_r($names);
    $textWords = explode(' ', $_POST['text']);
    echo "<br/>Текст: " . $_POST['text'];
    foreach ($names as $name) {
        $lower = strtolower($name);
        if ($name == $lower) {
            continue;
        }
        $count = 0;
        foreach ($textWords as $word) {
            if ($word == $lower) {
                $count++;
            }
        }
        if ($count > 0 ) {
            $result .= "В тексте содержится " . $count . " неправильных имен " . $name . "<br/>";
        }
    }
}

?>

<form action="task11.php" method="post">
    <p>Массив имен: <input type="text" name="names" /></p>
    <p>Текст: <input type="text" name="text" /></p>
    <p><input type="submit" /></p>
</form>

<?php echo $result; ?>