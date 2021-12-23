<?php

$ids = $_POST['ids'];
$arr = explode(',', $ids);

$l = mysqli_connect('localhost', 'root', '', 'speaker_portal');

// bal
for ($i = 1; $i <= 6; $i++)
{
    mysqli_query($l, "UPDATE `animals` SET `orderNo` = '".$i."' WHERE `id` = '".$arr[$i-1]."'");
}
// jobb
for ($i = 7; $i <= 12; $i++)
{
    mysqli_query($l, "UPDATE `expressions` SET `orderNo` = '".$i."' WHERE `id` = '".$arr[$i-1]."'");

}

mysqli_close($l);

?>
