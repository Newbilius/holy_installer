<?php

/**
 * Преобразует XML-данные в массив
 * 
 * @param string $xml_data  <p>данные</p>
 * @return array
 */
function ParseXMLToArray($xml_data) {
    $xmlObj = new XmlToArray($xml_data);
    $arrayData = $xmlObj->createArray();
    return $arrayData;
}

;

/**
 * Скачивае по ссылке XML-файл, преобразуя его в массив
 * 
 * @param string $url  <p>ссылка для скачивания</p>
 * @param bool $conver=false  <p>преобразовать windows-1251 в utf-8 данные</p>
 * @return array
 */
function PrepareXMLFromUrl($url, $convert = false) {
    $xml_data = file_get_contents($url);
    if ($convert) {
        $xml_data = iconv('windows-1251', 'utf-8', $xml_data);
        $xml_data = str_replace(Array('Windows-1251', 'windows-1251'), 'utf-8', $xml_data);
    };
    $xmlObj = new XmlToArray($xml_data);
    $arrayData = $xmlObj->createArray();
    return $arrayData;
}

;
?>