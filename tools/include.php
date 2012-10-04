<?
$include_array=Array(
"arrays_holy",
"sql_holy",
"backup_holy",
"debug_holy",
"xmltoarray_holy",
"tools_holy",
);

foreach ($include_array as $include_item)
{
	include_once($include_item.".php");
};
?>