<?php

const STRING_SEPARATOR = ';';

require_once "Helper/helper.php";

if ($_FILES)
{
    $return = [
        'error' => 0,
        'message' => '',
    ];

    if ($_FILES["filename"]["error"] == UPLOAD_ERR_OK) {
        $fileName = setFileName($_FILES["filename"]["name"]);
        $filePath = dirname(__DIR__) . "/Task1/files/" . $fileName;

        if (move_uploaded_file($_FILES["filename"]["tmp_name"], $filePath)) {
            $data = getFileContent($filePath, STRING_SEPARATOR);
            
            $return['message'] = 'Файл успешно загружен';
            $return['content'] = renderPhpToString(dirname(__FILE__) . '/view/content.php', $data);
            $return['path'] = dirname(__FILE__) . '/view/content.php';
        } else {
            $return['error'] = 3;
            $return['message'] = 'Что-то пошло не так';
        }
       

        
        
    } else {
        $return['error'] = 1;
        $return['message'] = 'Ошибка загрузки файла';
    }
    
} else {
    $return['error'] = 2;
    $return['message'] = 'Файл не выбран';
}

echo json_encode($return);
