#!/usr/bin/php
<?PHP
###################################################
#                                                 #
# Custom Tab copyright 2017-2025, Andrew Zawadzki #
#                                                 #
###################################################
if ( ! file_exists("/boot/config/plugins/customtab/customtab.cfg") ) {
  return;
}
$set = parse_ini_file("/boot/config/plugins/customtab/customtab.cfg");
$settings[] = $set;
file_put_contents("/boot/config/plugins/customtab/customtab.json",json_encode($settings,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
@unlink("/boot/config/plugins/customtab/customtab.cfg");
?>

