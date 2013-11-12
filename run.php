<?php 

require_once('CmdColor.php');

echo CmdColor::paint('no color'), "\n";

echo CmdColor::paint('blue color', 'blue'), "\n";

echo CmdColor::paint('blue on yellow', 'blue', 'yellow'), "\n";

