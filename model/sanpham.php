<?php 
function insert_sp($namesp, $giasp, $anhsp, $motasp, $iddm)
{
    $sql = "INSERT INTO san_pham(namesp, giasp, anhsp, motasp, iddm) values ('$namesp','$giasp','$anhsp','$motasp','$iddm')";
    pdo_execute($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM san_pham WHERE id=" . $id;
    pdo_execute($sql);
}