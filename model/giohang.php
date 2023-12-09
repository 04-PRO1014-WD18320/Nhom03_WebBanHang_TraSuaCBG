<?php
function themgiohang($id,$idtk){
    $sql = "INSERT INTO giohang2 values (null,'$id','$idtk')";
    pdo_execute($sql);

}
function listgiohang($idtk){
    $sql = " SELECT * FROM  san_pham as a, giohang2 as b WHERE a.id=b.idsp AND idtk='$idtk'";
    $listgiohang = pdo_query($sql);
    return $listgiohang;
}
function deletegh($id){
    $sql = "DELETE FROM giohang2 WHERE idgh=" . $id;
    pdo_execute($sql);
}
 ?>