<?php

function EA($obj, $end = true) {
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
	if ($end) exit;
}

function renderPhpToString($file, $data=null)
{
    if (is_array($data) && !empty($data)) {
        extract($data);
    }
    ob_start();
    include $file;
    return ob_get_clean();
}

function setFileName($fileName)
{
    $name = substr($fileName, 0, strrpos($fileName, '.'));  
    $extension = substr($fileName, strrpos($fileName, '.'));

    return $name . '_' . time() . $extension;  
}

function getFileContent($file, $separator = ";")
{
    $result = array();

    $content = file_get_contents($file);
    
    if (!empty($content)) {

        $content = explode($separator, $content);
        
        foreach ($content as $id => $elem) {
            preg_match_all('#\d#', trim($elem), $matches);

            $result[$id] = array(
                'string' => $elem,
                'count' => count($matches[0])
            );
        }

    }

    return $result;
}
