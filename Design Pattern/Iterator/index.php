<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'MyIterator.php';


$array = array(1,2,3,4,5,6,7,8,9,10);
$iterator = new MyIterator($array);

print 'Iterator Pattern<br />';

foreach($iterator as $key => $value)
{
    print "$key => $value, ";
}



?>