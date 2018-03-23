<?php require 'index_header.php'; 




$cat="ABM";
$arr=array('001','002','003');
//var_dump($arrABM);
foreach ($arr as $key => $val) {
//    echo "$val <hr>";
    echo "<h3>$cat$val</h3>";
    echo"<img src='sop/ver01/$cat$val.svg' >";
}

require 'index_footer.php';

