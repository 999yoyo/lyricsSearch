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
                
                // <!--Shes a Killer Queen-->
                // <!--Gunpowder, gelatine-->
                // <!--Dynamite with a laser beam-->
                // <!--Guaranteed to blow your mind-->
                // <!--Anytime-->
                
                // <!--Recommended at the price-->
                // <!--Insatiable an appetite-->
                // <!--Wanna try?-->
                
                // <!--To avoid complications-->
                // <!--She never kept the same address-->
                // <!--In conversation-->
                // <!--She spoke just like a baroness-->
                // <!--Met a man from China-->
                // <!--Went down to Geisha Minor-->
                // <!--Then again incidentally-->
                // <!--If youre that way inclined-->
                
                // <!--Perfume came naturally from Paris (naturally)-->
                // <!--For cars she couldnt care less-->
                // <!--Fastidious and precise-->
                
                // <!--// Shes a Killer Queen-->
                // <!--// Gunpowder, gelatine-->
                // <!--// Dynamite with a laser beam-->
                // <!--// Guaranteed to blow your mind-->
                // <!--// Anytime-->
                
                // <!--// Drop of a hat shes as willing as-->
                // <!--// Playful as a pussy cat-->
                // <!--// Then momentarily out of action-->
                // <!--// Temporarily out of gas-->
                // <!--// To absolutely drive you wild, wild-->
                // <!--// Shes all out to get you-->
                
                // <!--// Shes a Killer Queen-->
                // <!--// Gunpowder, gelatine-->
                // <!--// Dynamite with a laser beam-->
                // <!--// Guaranteed to blow your mind-->
                // <!--// Anytime-->
                
                // <!--// Recommended at the price-->
                // <!--// Insatiable an appetite-->
                // <!--// Wanna try?-->
                // <!--// You wanna try-->
                // <!--// ', null, 'JA');-->
                // <!--// echo $result->text; ?>-->
            </div>
            
        </div>
        
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト https://frozen-sierra-50756.herokuapp.com</div>
        </div>
    
    </div>
    </body>
</html>