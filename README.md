php_cmd_color
=============

A small class to add color to your bash output

usage

require_once('CmdColor.php');

echo CmdColor::paint('no color'), "\n";

echo CmdColor::paint('blue color', 'blue'), "\n";

echo CmdColor::paint('blue on yellow', 'blue', 'yellow'), "\n";
