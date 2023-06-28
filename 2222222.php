<?php
$mac = $_GET['machineCode'];

$encode = md5($mac);

$rest = substr($encode, 0, -24);

echo '{"Result":1,"Data":{"MachineCode":"'.$mac.'","UserName":"'.$rest.'","AppVersion":"2.00"},"Message":"获取信息成功"}';

?>