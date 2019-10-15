<?php
$a = $_GET['a'];
$b = $_GET['b'];
if($a > $b) {
$c = $a -$b;
} else {
$c = $b - $a;
}
echo $c;
?>
