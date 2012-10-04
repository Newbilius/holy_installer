<h2>ƒействие</h2>
<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">”становить патч</a></li>
        <li><a href="#tab2" data-toggle="tab">”становить систему</a></li>
        <hr>
        <li><a href="#tab3" data-toggle="tab">—оздать патч</a></li>
        <li><a href="#tab4" data-toggle="tab">Ёкспорт базы</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
            <p><?include_once("include/install_patch.php");?></p>
        </div>
        <div class="tab-pane" id="tab2">
            <p><?include_once("include/install_system.php");?></p>
        </div>
        <div class="tab-pane" id="tab3">
            <p><?include_once("include/create_patch.php");?></p>
        </div>
        <div class="tab-pane" id="tab4">
            <p><?include_once("include/export_base.php");?></p>
        </div>
    </div>
</div>

<?
global $_OPTIONS;
$_POST = fill_empty_array($_POST, Array("tab"));
$_POST = clear_array($_POST);
?>

<script>
    $(function() {
        <?if ($_POST['tab']=="install_patch"){?>$('a[href="#tab1"]').tab('show'); <?}?>
        <?if ($_POST['tab']=="install_system"){?>$('a[href="#tab2"]').tab('show'); <?}?>
        <?if ($_POST['tab']=="create_patch"){?>$('a[href="#tab3"]').tab('show'); <?}?>
        <?if ($_POST['tab']=="export"){?>$('a[href="#tab4"]').tab('show'); <?}?>
    });
</script>