<?
$_POST = fill_empty_array($_POST, Array("tab"));
$_POST = clear_array($_POST);
?>
��� �����:<br>
<input style="width:90%;" type="file" value="<? echo $_OPTIONS["patch_file_name"]; ?>" name="patch_file_name">
<BR>
<br>
<button name="tab" value="install_patch" type="submit" class="btn">����������</button>
<?
if ($_POST["tab"] == "install_patch")
    if (isset($_FILES['patch_file_name']))
        if ($_FILES['patch_file_name']['error'] === 0)
            if (try_to_connect()) {
                if (file_exists($_FILES['patch_file_name']['tmp_name'])) {
                    $xml_arrray = PrepareXMLFromUrl($_FILES['patch_file_name']['tmp_name']);
                    $table_datas = GetTableDatas($_OPTIONS['patch_table']);
                    foreach ($xml_arrray['tables'] as $table_name => $new_tables) {
                        $SQL = new HolySQL($table_name);

                        $new_table = $new_tables[0];
                        echo "<h3>" . $table_name . "</h3>";
                        if (isset($table_datas[$table_name])) {
                            //������� ��� ����������, �� ��
                        } else {
                            $SQL->Query("CREATE TABLE `" . $table_name . "` (`id` INT NOT NULL AUTO_INCREMENT,PRIMARY KEY ( `id` ))");
                            $table_datas = GetTableDatas($base_tables);
                            echo "<b>������� ������� " . $table_name . "</b><BR>";
                        };
                        foreach ($new_table as $rowname => $row_type) {

                            $create = false;
                            if (isset($table_datas[$table_name]))
                                if (is_array($table_datas[$table_name]))
                                    foreach ($table_datas[$table_name] as $realrow)
                                        if ($realrow[0] == $rowname) {
                                            echo "������� ��� ���� " . $rowname . " ���� " . $row_type . "<BR>";
                                            //���� ������� ��� ����������
                                            $create = true;
                                            //�� ��� �� ���������
                                            if ($row_type != $realrow[1]) {
                                                $SQL->Query("ALTER TABLE `" . $table_name . "` CHANGE `" . $rowname . "` `" . $rowname . "` " . $row_type . " NOT NULL");
                                                echo "<b>������ ��� ������� " . $rowname . " � ���� " . $row_type . " �� ��� " . $row_type . "</b><BR>";
                                            };
                                        };

                            if ($create === false) {
                                $SQL->AddColumn($rowname, $row_type);
                                echo "<b>������� ������� " . $rowname . " ���� " . $row_type . "</b><BR>";
                            };
                        };
                    };
                    $complete = "��������� ����� ��������� �������!";
                }
            }
?>
