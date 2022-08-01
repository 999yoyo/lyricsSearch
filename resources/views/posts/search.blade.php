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
            <a href = "/"><h1 class="header-logo"><span class="fa-regular fa-ghost"> LYRICS SEARCH              
                    </span></h1></a>
            <div class="header-list">
                <ul>
                    <li><a href = "/information"><span class="fa-regular fa-question"> このサイトについて</span></a></li>
                    <li><a href = "/inquiry"><span class="fa-regular fa-comment"> お問い合わせ</span></a></li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="headlines">
            <h5 class="headline title"><span class="fa-regular fa-compact-disc"> {{$title}}</span></h5>
            <h5 class="headline artist"><span class="fa-regular fa-headphones"> {{$artist}}</span></h5>    
        </div>
        
        <div class="displays">
        
            <div class="display">{!! nl2br(e($lyrics)) !!}</div>
            
            
            <div class ="display">
            
            
                <?php
                require_once('../vendor/autoload.php');
                use DeepL\Translator;
                
                $authKey = config('services.DeepL.DeepLkey'); 
                $translator = new Translator($authKey);
                
                $result = $translator->translateText('
                She keeps her Moët et Chandon
                In her pretty cabinet
                "Let them eat cake", she says
                Just like Marie Antoinette
                A built-in remedy
                For Khrushchev and Kennedy
                At anytime an invitation
                You cant decline
                
                Caviar and cigarettes
                Well versed in etiquette
                Extraordinarily nice
                
                
                 ', null, 'JA');
                echo $result->text; ?>
            </div>
            
        </div>
        
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト https://frozen-sierra-50756.herokuapp.com</div>
        </div>
    
    </div>
    </body>
</html>