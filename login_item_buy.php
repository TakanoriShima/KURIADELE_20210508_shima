<?php
    // ログインフィルター
    require_once 'login_filter.php';
    // 外部ファイル読込
    require_once 'daos/item_dao.php';
    require_once 'models/customer.php';
    require_once 'daos/cart_dao.php';
    // // $idをGETで取得
    $id = null;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // // ItemDAOを使い、idの商品情報取得 出力
    $item = ItemDAO::get_item_by_id($id);
    // 選択されたidの商品情報をセッションで取得
    $_SESSION['item'] = $item;
    // ログイン者の情報取得
    $login_customer = $_SESSION['login_customer'];
    // viewファイルの表示
    include_once 'views/login_buy_view.php';
?>