<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LYRICS SEARCH</title>
        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/eea364082e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <h1 class="header-logo"><a href = "/"><span class="fa-regular fa-ghost"> LYRICS SEARCH              
            </span></a></h1>
            <div class="header-list">
                <ul>
                    <li><span class="fa-regular fa-question"> このサイトについて</span></li>
                    <li><span class="fa-regular fa-comment"> お問い合わせ</span></li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="headline">
            <h5 class="display title"><span class="fa-regular fa-compact-disc"> {{$title}}</span></h5>
            <h5 class="display artist"><span class="fa-regular fa-headphones"> {{$artist}}</span></h5>    
        </div>
        
            <h5 class="display">{!! nl2br(e($lyrics)) !!}</h5>
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト https://frozen-sierra-50756.herokuapp.com</div>
        </div>
    
    </div>
    </body>
</html>