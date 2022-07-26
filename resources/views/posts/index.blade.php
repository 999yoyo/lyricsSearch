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
        
        <div class="top-wrapper">
            <div class="container">
                <h1 class="wrapper-title">OPTIMIZE YOUR LEARNING</h1>
                <h1 class="wrapper-title">ENJOY YOUR LEARNING</h1>
                <p class>歌詞を検索・翻訳できるサービスです。</p>
            </div>
        </div>

        <div class="main">
        <form action = "/search" method = "get">
            @csrf
            <div class='search'>
                <h3>曲名</h3>
                <input type="text" name="title" value="{{ old('title') }}">
                <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                <h3>アーティスト名</h3>
                <input type="text" name="artist" value="{{ old('artist') }}"><br>
                <p class="title__error" style="color:red">{{ $errors->first('artist') }}</p>
                <input class="submit" type="submit" value="検索">
            </div>
        </form>
        

        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト https://frozen-sierra-50756.herokuapp.com</div>
        </div>
    
    </div>
    </body>
</html>