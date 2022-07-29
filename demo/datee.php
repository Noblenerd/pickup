<?php
$p = strtotime($row['Date']);
$m = date('m', $p);

if($m==1) 
$dc='JAN';


elseif($m==2) 
$dc='FEB';

elseif($m==3) 
$dc='MAR';

elseif($m==4) 
$dc='APR';

elseif($m==5) 
$dc='MAY';

elseif($m==6) 
$dc='JUN';

elseif($m==7) 
$dc='JUL';

elseif($m==8) 
$dc='AUG';

elseif($m==9) 
$dc='SEP';

elseif($m==10) 
$dc='OCT';

elseif($m==11) 
$dc='NOV';

else
$dc='DEC';



$d=date("d", $p);

$dy=date("Y", $p);

$dh=date("H", $p);
$di=date("i", $p);
$ds=date("s", $p);
?>