<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LYRICS SEARCH</title>
        <!-- Fonts -->
         <script src="https://kit.fontawesome.com/eea364082e.js" crossorigin="anonymous"></script>
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <a href = "/"><h1 class="header-logo"><span class="fa-regular fa-ghost"> LYRICS SEARCH              
            </span></h1></a>
            <div class="header-list">
                <ul>
                    <li><a href = "/information"><span class="fa-regular fa-question"> このサイトについて</span></a></li>
                    <li><a href = "/inquiry"><span class="fa-regular fa-comment"> お問い合わせ</span></a></li>
                </ul>
            </div>
        </div>
        
        <div class="contact-form">
          <div class="form-title">お問い合わせ</div>
          <p><a href ="/post">他ユーザーのコメント</a></p>
          <form method="post" action="sent.php">
            <div class="form-item">名前</div>
            <!-- この下にinputタグを書いていきましょう -->
            <input type="text" name="name">
            
            <div class="form-item">内容</div>
            <!-- この下にtextareaタグを書いていきましょう -->
            <textarea name="body"></textarea>
            <input type="submit" class="submit" value="送信">
          </form>
        </div>
             
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト https://frozen-sierra-50756.herokuapp.com</div>
        </div>
    
    </div>
    </body>
</html>