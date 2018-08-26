<!DOCTYPE html>
<html lang="tr" itemscope itemtype="http://schema.org/Person">
    <head>
        <meta name="google-site-verification" content="L--R4Xp6RYRJcmJQjV9emLK5WKbmDaG4dNpgyQWHJnQ" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mehmet Gökalp's Personal Web Site">
        <meta name="author" content="Mehmet Gökalp">
        <title>Mehmet Gökalp's Personal Web Site</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="alternate" href="http://mehmetgokalp.com/" hreflang="tr"/>
        <link rel="canonical" href="http://mehmetgokalp.com/">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="content-language" content="tr">
        <meta name="robots" content="index, nofollow">
        <meta name="owner" content="Mehmet Gökalp" />
        <meta name="copyright" content="(C) 2015" />
        <link rel="icon" href="img/favicon_32.png?v=1.2">

        <!-- For third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon_144.png">

        <!-- For iPhone with high-resolution Retina display: -->

        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon_114.png">

        <!-- For first- and second-generation iPad: -->

        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon_72.png">

        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->

        <link rel="apple-touch-icon-precomposed" href="img/favicon_32.png">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Mehmet Gökalp">
        <meta itemprop="description" content="Mehmet Gökalp's Personal Web Site">
        <meta itemprop="image" content="http://mehmetgokalp.com/img/mehmetgokalp_logo_70x50.png">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MehGokalp" />
        <meta name="twitter:title" content="Mehmet Gökalp's Personal Web Site" />
        <meta name="twitter:description" content="Mehmet Gökalp's Personal Web Site" />
        <meta name="twitter:image" content="http://mehmetgokalp.com/img/mehmetgokalp_logo_70x50.png" />

        <!-- Open Graph data -->
        <meta property="og:title" content="Mehmet Gökalp's Personal Web Site" />
        <meta property="og:type" content="profile" />
        <meta property="og:url" content="http://mehmetgokalp.com/" />
        <meta property="og:image" content="http://mehmetgokalp.com/img/mehmetgokalp_logo_70x50.png" />
        <meta property="og:description" content="Personal Web Site" />
        <meta property="og:site_name" content="Mehmet Gökalp's Personal Web Site" />

        <style>
            /* code for animated blinking cursor */
            .typed-cursor{
                opacity: 1;
                font-weight: 100;
                -webkit-animation: blink 0.7s infinite;
                -moz-animation: blink 0.7s infinite;
                -ms-animation: blink 0.7s infinite;
                -o-animation: blink 0.7s infinite;
                animation: blink 0.7s infinite;
            }
            @-keyframes blink{
                0% { opacity:1; }
                50% { opacity:0; }
                100% { opacity:1; }
            }
            @-webkit-keyframes blink{
                0% { opacity:1; }
                50% { opacity:0; }
                100% { opacity:1; }
            }
            @-moz-keyframes blink{
                0% { opacity:1; }
                50% { opacity:0; }
                100% { opacity:1; }
            }
            @-ms-keyframes blink{
                0% { opacity:1; }
                50% { opacity:0; }
                100% { opacity:1; }
            }
            @-o-keyframes blink{
                0% { opacity:1; }
                50% { opacity:0; }
                100% { opacity:1; }
            }
        </style>
    </head>
    <body>
        <section class="terminal">
            <header class="terminal-header">
                <div class="icons">
                    <a class="icon red" href="javascript:">
                        <i class="fa fa-times"></i>
                    </a>
                    <a class="icon orange" href="javascript:">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a class="icon green" href="javascript:">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>

                <img src="img/mehmetgokalp_logo.png" class="mg-logo" alt="Mehmet Gökalp Logo"> Mehmet Gökalp — -bash — 80 x 24
            </header>
            <article class="terminal-body">
                <div id="messages">
                    <p>
                        <code>Hello, my name is Mehmet Gökalp.</code>
                        <code>Welcome to my personal web page. ^100 Let me introduce myself.</code>
                        <code>I'am a web master that aged <?=(new DateTime())->diff(new DateTime('1998-09-08'))->format('%y')?> and who is dedicated himself to programming.</code>
                        <code>I started programming when i was a little child with desktop applications. After then i've continued developing with web applications.</code>
                        <code>Currently i'm developing high level backend applications with Symfony php framework, Nodejs with /(no)?sql/. I also used Golang, C#, C++, Lua, Phyton, ActionScript, Asp.NET ... and more of them before.</code>
                        <code>I'm also interested in frontend applications that using React, VueJs with ES6 <i class="fa fa-heart" style="color: red"></i> and of course i've knowledge of task Runners like grunt, gulp.pipe(angular).pipe(lodash).pipe(LESS).pipe(SASS) etc.</code>
                        <code>You can contact with me using your mobile phone <a href="tel:05375776564" itemprop="telephone">0(537) 577-65-64</a> or e-mail: <a href="mailto:iletisim@mehmetgokalp.com" itemprop="email">iletisim@mehmetgokalp.com</a>.</code>
                        <code>See you then ;), have a good day!</code>
                    </p>
                </div>
                <span id="message" style="white-space: pre-line;"></span>
                <div class="help">Use <button type="button" class="btn escBtn">ESC</button> key to skip animation</div>
            </article>
        </section>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/typed.min.js"></script>
        <script>
            var isStopped = false,
                typedInstance;
            
            function stopAnimate() {
                if (isStopped === false) {
                    typedInstance.destroy();
                    $('#messages').addClass('stopAnimate').show(0);
                    
                    isStopped = true;
                }
            }

            function destructTyping() {
                stopAnimate();
            }
            
            function bindESCEvents() {
                $(document).keyup(function(e) {
                    if (e.keyCode === 27) { // escape key maps to keycode `27`
                        destructTyping();
                    }
                }).on('click', '.escBtn', function () {
                    destructTyping();
                });
            }
            
            function constructTyping() {
                var anim = false;

                typedInstance = new Typed('#message', {
                    stringsElement: '#messages',
                    typeSpeed: 10,
                    loop: false,
                    contentType: 'html',
                    loopCount: false
                });

                var $terminalBody = $('.terminal-body');
                setInterval(function(){
                    if(!anim){
                        anim = true;

                        $terminalBody.animate({ scrollTop: $terminalBody.prop("scrollHeight")}, 100, function(){
                            anim = false;
                        });
                    }
                }, 100);
                
                bindESCEvents();
            }
            
            $(document).on('ready', function(){
                constructTyping();
            });
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-75852991-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>