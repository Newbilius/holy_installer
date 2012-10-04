<?
//параметры БД по-умолчанию
$_OPTIONS['host'] = "localhost";
$_OPTIONS['login'] = "root";
$_OPTIONS['pass'] = "";
$_OPTIONS['base'] = "install_test";

//кодировка БД
$_OPTIONS['codepage'] = "cp1251";

//из какой кодировки в какую конвертировать файл при импорте файла (при экспорте файл сохраняется в UTF-8)
$_OPTIONS['sql_base_convert'] = Array('utf-8', 'windows-1251');

//имя файла для экспорта базы, по-умолчанию
$_OPTIONS['export_file_name'] = "base_" . date("d.m.Y_h_m_s") . uniqid() . ".sql";

//имя файла для патча базы, по-умолчанию
$_OPTIONS['patch_file_name'] = "patch_" . date("d.m.Y_h_m_s") . uniqid() . ".xml";

//список таблиц для патча
$_OPTIONS['patch_table'] = Array(
    "system_data_block",
    "system_data_block_fields",
    "system_data_block_group",
    "system_data_block_types",
    "system_cache",
    "system_data_block_types",
    "users",
    "journal",
);
?>