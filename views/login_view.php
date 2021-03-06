<!doctype html>
<thml lang='ja'>
    <head>
        <meta charset='UTF-8'>
        <title>ログイン</title>
        <link rel='stylesheet' type="text/css" href='index.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class='container-fluid sticky-top'>
            <div class='row header'>
                <a href='index.php' class='logo'><span class='col-lg-2 '>KURIADELE</span></a>
                <span class='offset-lg-4 col-lg-3 px-0 span_a'>
                    <a href='product.php 'class='span_b'>商品情報</a>
                    <a href='contact.php'class='span_b'>お問い合わせ</a>
                    <a href='login.php'class='span_b'>ログイン</a>
                </span>    
                <span class='col-lg-1 px-0 info'>
                    <form method='GET' action='search.php' class='info'>
                        <input type='search' name='name'/>
                        <input type='submit' value='検索'/>
                    </form>
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class='dropdown-item' href='#'><a href='company.php'>KURIADELEについて</a>
                        <a class='dropdown-item' href='#'><a href='product.php'>取扱商品</a>
                        <a class='dropdown-item' href='#'><a href='contact.php'>サポート</a>
                    </div>
                </span>
            </div>
        </div>
        <div class='customer'>
            <a href='sign_up.php'>新規会員登録の方はこちら</a>
        </div>
        <br>
        <br>
        <!--新規登録成功のメッセージ表示-->
        <?php if($flash_message !== null): ?>
            <p><?= $flash_message ?></p>
        <?php endif; ?>
        <div class='login_1'>ＭＹページログイン</div>
        <!--入力したメールアドレスとパスワードが登録と違う場合のエラーメッセージ表示-->
        <?php if($error_message !== null): ?>
            <p><?= $error_message ?></p>
        <?php endif; ?>
        <!--入力していない場合やどちらかの入力の場合エラーメッセージ表示-->
        <?php if($errors !== null): ?>
            <?php foreach($errors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
        <form action='login_check.php' method='POST'>
            <div class='login_2'>
                メールアドレス&emsp;<input type='text' name='email_address' /><br><br>
                パスワード&emsp;&emsp;&emsp;<input type='password' name='password'/><br>
                <p class='top_d'><input type='submit' value='login' class='btn-gradient'/></p>
            </div>
        </form>             
        <div class='footer'>
            <ul><span>KURIADELEについて</span><br>
                <li><a href='company.php'>企業紹介</a></li>
            </ul>
            <ul><span>取扱商品</span>
                <li><a href='product.php'>商品一覧</a></li>
            </ul>
            <ul><span>サポート</span>
                <li><a href='contact.php'>お問い合わせ</a></li>
            </ul>
        </div>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
    </body>
</html>
