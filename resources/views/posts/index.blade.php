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

        
        <h5 class="display">
            The Blues has always been totally American\nAs American as apple pie\nAs American as The Blues\nAs American as apple pie\nThe question is why?\nWhy should he Blues be so at home here?\nWell, America provided the atmosphere\n\nYou don't see what I see, every day as Warren G\nI take a look over my shoulder, as I get older\nGettin tired of mothafuckas sayin' \"Warren I told ya\"\n(You don't hear what I hear)\nBut it's so hard to live through these years\nWith these funny-bunny niggaz, ain't shit changin\nGot my mama wonderin if I'm gang-bangin\nBut I don't pay attention to these father figures\nI just handle mine, and I'm rollin with my niggaz\nOff to the VIP, you see, Snoop Dogg and Warren G\nUnbelievable how time just flies\nRight before your eyes, but you don't recognize\nNow who's the real victim, can you answer that?\nThe nigga that's jackin, or the fool gettin' jacked (Yeah)\n\nYou don't see what I see, every day as Warren G\nYou don't hear what I hear\nBut it's so hard to live through these years\nYou don't see what I see, every day as Warren G\nYou don't hear what I hear\nBut it's so hard to live through these years\n\nAnother sunny day, another bright blue sky -\nAnother day, another muthafucka die\nThese are the things I went through when I was growin up\nThere's only one hood, and niggas shit be throwin' up\nAnd I knew it, There really ain't nothin' to it\nThinkin' every fool's gotta go through it\nNow let's go back - (How Far?) Back in time\nDraggin to these hookas tryin to mack for mine\nI remember when we all used to stop at the spot\nBack then my nigga-name was Snoop Rock (huh)\nIt was all so clear\nEighty-seven, eighty-eight, then eighty-nine's the year\nYou say \"everywhere we roll, you can say we roll thick\"\nWay back then two-one-three was the click\nSomethin' to stay paid I was just a young hog\nWarren G, Snoop Rock and Nate Dogg\n\nYou don't see what I see, every day as Warren G\nYou don't hear what I hear\nBut it's so hard to live through these years\nYou don't see what I see, every day as Warren G\nYou don't hear what I hear\nBut it's so hard to live through these years\n\nYou make me want to holler, get out the game\nToo many muthafuckas know my name\nWhile Snoop Dogg's servin' time up in Wayside\nI puts it down on the street, don't try to take mine\nI had to reassure the homie that he wasn't alone\nWe'd talk, and him n Nate'd conversate on the phone\nHe kept sayin, \"Nigga, it won't be long\nBefore a little skinny nigga like me'll be home\"\nI said, \"Snoop, things done change, it's not the same\nWe need to get about the game\n'cause we can get paid in a different way\nWit you kickin' dope rhymes and I DJ\"\nWell as time goes past, slowly we try to make it\nBut things are gettin hectic, I just can't take it\nShould I A: Go back to slangin' dope?\nOr should I B: Maintain and try to cope?\nOr should I C: Just get crazy and wild?\nBut no I chose D: Create the G-Child\nIt's been on ever since with me and Mista Grimm\nThis shit is gettin so hectic that I can't even trust him now\nWhat would you do for a Warren G cut?\nWould you act the fool and nut the fuck up?\nBack the fuck up, act the fuck up?\nNiggaz talk shit they get smacked the fuck up, straight up\n\nYou don't see what I see, every day as Warren G\nYou don't hear what I hear\nBut it's so hard to live through these years\nYou don't see what I see, every day as Warren G\nYou don't hear what I hear\nBut it's so hard to live through these years
        </h5>
         
        
        <div class="footer">
            <div class="footer-logo">歌詞翻訳サイト</div>
        </div>
    
    </div>
    </body>
</html>