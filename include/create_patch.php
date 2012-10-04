<?
global $_OPTIONS;
$_POST = fill_empty_array($_POST, Array("patch_file_name","tab"));
$_POST = clear_array($_POST);

if ($_POST["patch_file_name"]) $_OPTIONS["patch_file_name"]=$_POST["patch_file_name"];

if ($_POST["tab"]=="create_patch")
if (try_to_connect())
{
$table_datas=GetTableDatas($_OPTIONS['patch_table']);

$dom = new DOMDocument('1.0', 'utf-8');
$element0 = $dom->createElement('tables');
$dom->appendChild($element0);

$link=$_OPTIONS['patch_file_name'];
$href="<a href=$link>скачать патч</a>";
$complete="Файл патча создан, $href";

if (is_array($table_datas))
foreach ($table_datas as $table_name=>$table)
	{
	$element1 = $dom->createElement($table_name);
	
		foreach ($table as $row)
			if ($row[0]!="")
			{
				$element2 = $dom->createElement($row[0],$row[1]);
				$element1->appendChild($element2);
			};
	$element0->appendChild($element1);
	};

$dom->save($link);
}
?>
Имя файла:<br>
<input style="width:90%;" type="text" value="<? echo $_OPTIONS["patch_file_name"];?>" name="patch_file_name"><BR>
<button name="tab" value="create_patch" type="submit" class="btn">Создать патч</button>
