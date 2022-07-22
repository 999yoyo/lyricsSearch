<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>LYRICS SEARCH</title>
        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <h1 class="header-logo">LYRICS SEARCH</h1>
            <div class="header-list">
                <ul>
                    <li>このサイトについて</li>
                    <li>お問い合わせ</li>
                </ul>
            </div>
        </div>
            <h5 class="display">{!! nl2br(e($lyrics)) !!}</h5>
        
        <div>
        <a href = "/">戻る</a>
        </div>
        
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト</div>
        </div>
    
    </div>
    </body>
</html>