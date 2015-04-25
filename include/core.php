<?php

include('passwd.php');

define('USER_FOLDER', '/');
define('NEW_FILES_RIGHTS', 0777);


function saveSettings2File($fileName, $serializeContent) {
    if (function_exists('file_put_contents')) {
        if (!file_put_contents($fileName, $serializeContent, LOCK_EX)) {
            return false;
        }
    } else {
        if ($fp = @fopen($fileName, 'a+b')) {
            flock($fp, LOCK_EX);
            ftruncate($fp, 0);
            fseek($fp, 0);
            fwrite($fp, $serializeContent);
            fclose($fp);
        } else {
            return false;
        }
    }
    @chmod($fileName, NEW_FILES_RIGHTS);
    return true;
}

function readSetingsFromFile($fileName) {

    //printSettings();

    if (function_exists('file_get_contents')) {
        return @file_get_contents($fileName);
    } else {
        $fp = fopen($fileName, "rb");
        clearstatcache();
        $fContent = fread($fp, filesize($fileName));
        fclose($fp);
        return $fContent;
    }
}

function printSettings() {
    if ($handle = opendir('.')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                echo "$entry\n";
            }
        }
        closedir($handle);
    }
}

?>