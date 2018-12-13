<?php

// 1. http post file loading 

$uploads_dir = '/uploads';

foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        /* 
         * basename() может предотвратить атаку на файловую систему;
         * может быть целесообразным дополнительно проверить имя файла  
         * basename - возвращает последний компонент из указанного пути
         */
        $name = basename($_FILES["pictures"]["name"][$key]); 
        
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
?>

<?php

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}


// A few usefull functions
is_uploaded_file('TMPfileName'); // имя файла на клиенте не подойдет

?>