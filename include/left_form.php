<h2>Настройки базы данных</h2>
<?
global $_OPTIONS;

$form_array = Array(
    "host",
    "login",
    "pass",
    "base",
);

$_POST = fill_empty_array($_POST, $form_array);
$_POST = clear_array($_POST);

foreach ($form_array as $form_item)
    if ($_POST[$form_item])
        $_OPTIONS[$form_item] = $_POST[$form_item];
?>
<p>
    <label class="control-label" for="input01">Сервер БД:</label>
    <input type="text" name="host" value="<? echo $_OPTIONS["host"] ?>">
    </br>
    <label class="control-label" for="input02">Логин БД:</label>
    <input type="text" name="login" value="<? echo $_OPTIONS["login"] ?>">
    </br>
    <label class="control-label" for="input03">Пароль БД:</label>
    <input type="text" name="pass" value="<? echo $_OPTIONS["pass"] ?>">
    </br>
    <label class="control-label" for="input04">Название базы:</label>
    <input type="text" name="base" value="<? echo $_OPTIONS["base"] ?>">
    </br>
</p>