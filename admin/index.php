<?php
include "../model/pdo.php";
include "../model/sanpham.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // Danh mục
        case "adddm":
            if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                $namedm = $_POST['name'];
                insert_dm($namedm);
                $notice = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case "listdm":
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
        case "deletedm":
            if (isset($_GET["id"]) && $_GET["id"] > 0){
                delete_dm($_GET['id']);
            }
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
        case "editdm":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"]
                $dm = loadone_dm($id);
            }
            include "danhmuc/update.php";
            break;
        case "updatedm":
            if (isset($_POST['btn_update']) && ($_POST['btn_update'])){
                $namedm = $_POST['namedm'];
                $id = $_POST['id'];
                update_dm($id, $namedm);
            }
            $listdm = loadall_dm();
            include "danhmuc/list.php";
            break;
    }
}
