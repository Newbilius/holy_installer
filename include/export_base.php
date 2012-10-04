<?
global $_OPTIONS;
$_POST = fill_empty_array($_POST, Array("export_file_name","tab"));
$_POST = clear_array($_POST);

if ($_POST["export_file_name"]) $_OPTIONS["export_file_name"]=$_POST["export_file_name"];

if ($_POST["tab"]=="export")
if (try_to_connect())
{
backup_database_tables('*',false,$_OPTIONS["export_file_name"]);
$link=$_OPTIONS["export_file_name"];
$href="<a href=$link>скачать файл.</a>";
$complete="Файл для установки создан, $href";
}
?>
Имя файла:<br>
<input style="width:90%;" type="text" value="<? echo $_OPTIONS["export_file_name"];?>" name="export_file_name"><BR>
<button name="tab" value="export" type="submit" class="btn">Создать слепок базы</button>
