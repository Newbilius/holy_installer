<?
$_POST = fill_empty_array($_POST, Array("tab"));
$_POST = clear_array($_POST);

if ($_POST["tab"] == "install_system")
    if (isset($_FILES['install_file_name']))
        if ($_FILES['install_file_name']['error'] === 0)
            if (try_to_connect()) {
                if (file_exists($_FILES['install_file_name']['tmp_name'])) {
                    ImportSQL($_FILES['install_file_name']['tmp_name'], $_OPTIONS['sql_base_convert']);
                    $complete = "Установка завершена успешно!";
                }
            }
?>
Имя файла:<br>
<input style="width:90%;" type="file" value="<? echo $_OPTIONS["patch_file_name"]; ?>" name="install_file_name">
<BR>
<br>
<button name="tab" value="install_system" type="submit" class="btn">Установить</button>
