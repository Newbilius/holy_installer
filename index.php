<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Holy Installer</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"  />
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>

    <? include_once("options/options.php"); ?>
    <? include_once("tools/include.php"); ?>
    <?
    $complete = "";
    $error_string = "";
    ?>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <form method="post" enctype='multipart/form-data'>
                    <div class="span3"><? include_once("include/left_form.php"); ?></div>
                    <div class="span6">
                        <? include_once("include/right_menu.php") ?>

                    </div>
                    <div class="span3">
                        <br>
                        <? if ($complete) { ?>
                            <div class="alert alert-success"><?= $complete ?></div>
                        <? };
                        ?>
                        <? if ($error) {
                            ?>
                            <div class="alert alert-error"><?= $error ?></div>
                        <? }; ?>
                    </div>
                </form>
            </div>



            <footer><br>
                <p>&copy; <a target=_blank href=http://www.siteszone.ru>Моисеев Дмитрий aka Nubilius</a>, 2012,  v.1.0</p>
            </footer>

        </div>
    </body>
</html>