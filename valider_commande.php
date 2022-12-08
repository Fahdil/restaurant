<?php

$dt = new \DateTime();
$dt->modify("+30 minute");
$dt->modify("+30 second");
echo $dt->format('d/m/Y H:i:s') ;

?>