<?php

/**
 * ����������� XML-������ � ������
 * 
 * @param string $xml_data  <p>������</p>
 * @return array
 */
function ParseXMLToArray($xml_data) {
    $xmlObj = new XmlToArray($xml_data);
    $arrayData = $xmlObj->createArray();
    return $arrayData;
}

;

/**
 * �������� �� ������ XML-����, ���������� ��� � ������
 * 
 * @param string $url  <p>������ ��� ����������</p>
 * @param bool $conver=false  <p>������������� windows-1251 � utf-8 ������</p>
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