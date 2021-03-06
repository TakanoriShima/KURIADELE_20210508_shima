<?php
    // // ログインフィルター
    require_once 'login_filter.php';
    // // 外部ファイル読込
    require_once 'daos/item_dao.php';
    require_once 'models/customer.php';
    // // $idをGETで取得
    $id = null;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // ログイン者の情報保存 login_check.phpからのセッション
    $login_customer = $_SESSION['login_customer'];
    
    // 登録した全ての商品情報取得
    $items = ItemDAO::get_all_items();
    
    $flash_message = null;
    if(isset($_SESSION['flash_message'])){
        $flash_message = $_SESSION['flash_message'];
    }
     // viewファイルの表示
    include_once 'views/products.php';
?>       

