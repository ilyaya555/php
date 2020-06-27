<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="first">
    <?php
foreach (range (1,9) as $v) {
    echo "$v\n ";
}
?>
</div>
</br>
<div class="second">
<?php 
foreach (range ('a','z') as $v) {
    echo "$v\n";
}

?>
</div>

<div class="third">
<?php
$cars = array ('УАЗ' => 'Патриот', 'ГАЗ' => 'Сайбер', 'ВАЗ' => 'Нива');
echo '<dl><dt>Исходный порядок элементов: <dd>';
foreach($cars as $key => $value)
{echo '&bull;', $key. ' '. $value;}
echo '<br/>';
asort($cars);
echo '<br/>';
echo '<dt>Сортировка по значнию: <dd>';
foreach ($cars as $key => $value)
{echo '&bull; ', $key. ' '. $value;}
echo '<br/>';
ksort($cars);
echo '<br/>';
echo '<dt>Сортировка по ключу:<dd>';
foreach ($cars as $key => $value)
{echo '&bull; ', $key. ' '. $value;}
echo '</dl>';
?>
</div>
<div>
<?php
$letters = array ('А', 'Б', 'В');
$numbers = array (1, 2, 3);
$matrix = array ('Буква' => $letters, 'Число' => $numbers);
echo "<p> Начало: {$matrix ['Буква'][0]} </p>";
foreach ($matrix as $array => $list)
{
    echo '<ul>';
    foreach($list as $key => $value)
{echo "<li> $array [$key] = $value ";}
echo '</ul>';

}
?>
</div>
<div>
<?php
$filestream = fopen('index.html', 'r');
$data = array ('PHP', 1, 2.3, TRUE, NULL, array (), new Directory, $filestream);
foreach($data as $type)
{
    var_dump($type);
    echo '<br>';
}
fclose($filestream);
echo gettype($filestream);
?>
</div>

<div>
    <?php
define('USER', 'Михаил');
define('PETS', ['Котенок', 'Щенок', 'Хомячок']);
echo '<p> Привет, '. USER. '.Как поживает твой '. PETS[1].'?</p>';
echo ' <p> Ты используешь PHP - движок версии'. PHP_VERSION;
echo ',запущенный в '. PHP_OS. '</p>';
?>
</div>

<div class="five">
    <?php
 echo '<h1>Это тестовый вывод строки</h1>';

 ?>
</div>

<div class="six" >
<?php
$letters = array ('А', 'Б', 'В');
$numbers = array(1,2,3);
$matrix = array ('Буква' => $letters, 'Число' => $numbers);
echo "<p>Начало: {$matrix ['Буква'][0]}</p>";
foreach ($matrix as $array => $list)
{
echo '<ul>';
foreach($list as $key => $value)
{echo "<li> $array [$key] = $value";}
echo '</ul>';
}
?>
</div>

<div>
<?php
$filestream = fopen('index.html', 'r');
$data = array('PHP', 1, 2.3, TRUE, NULL, array(), new Directory, $filestream);
foreach ($data as $type)
{
    var_dump($type);
    echo '<br>';
    fclose($filestream);
    echo gettype($filestream);
}

?>
</div>
</body>
</html>