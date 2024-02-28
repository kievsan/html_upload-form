<?php
declare(strict_types=1);

$uploaddir = './upload/';
$filename = $_POST['file_name'];
$uploadfile = $uploaddir . basename($filename);

if ($filename && makeDir($uploaddir) && move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)) {
    echo 'Информация:';
    echo '<pre>';
    echo 'Загружен файл ' . $uploadfile . ' размером ' . $_FILES['content']['size'] . ' байт.';
    echo '<pre>';
} else {
    header('location: upload_form.html');
}

function makeDir($path)
{
     return is_dir($path) || mkdir($path);
}
