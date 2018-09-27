<?php
/**
 * Поиск в папке /datafiles файлов, имена которых
 * состоят из цифр и букв латинского алфавита, имеют расширение ixt.
 *
 * Вывод имен этих файлов, упорядоченных по имени.
 */
$objects = new DirectoryIterator( __DIR__.'/datafiles');

/**
 * Массив для хранения имен файлов
 */
$array_name_files = array();
/**
 * Обходим объект в цикле
 */
foreach($objects as $object){
        /*
        * Проверяем, соответствует ли имя файла шаблону
        *
        * Имя файла состоит из цифр и букв латинского алфавита.
        * Файл имеют расширение ixt.
        */
        if(preg_match('~^[[:alnum:]]+\.ixt$~', $object->getFileName()))
                array_push($array_name_files, $object->getFileName());
}

asort($array_name_files);
foreach($array_name_files as $name_files)
{
        echo $name_files."<br />";
}
?>
