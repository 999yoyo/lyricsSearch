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
        
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <p class='post-title'>{{ $post->title }}</p>
                    <p class='post-body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        
         

             
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト https://frozen-sierra-50756.herokuapp.com</div>
        </div>
    
    </div>
    </body>
</html>