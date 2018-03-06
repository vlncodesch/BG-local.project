<html>
    <head>
        <title>Betgames - @yield('title')</title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
          <style media="screen">
            body{
                background-image: url({{ asset('img/bgrd.jpg') }});
                background-attachment: fixed;
                background-size: cover;
                padding: 50px;
            }

            .navbar-brand {
                padding-top: 10px;
            }

            div.rules {
                padding: 30px;
                width: 900px;
                margin: auto;
                border-radius: 50px 50px 50px 50px;
                box-shadow: inset 1px 5px 2px silver;
                background-color: white;
            }

			div.results {
                padding: 30px;
                width: 900px;
                margin: auto;
                border-radius: 50px 50px 50px 50px;
                box-shadow: inset 1px 5px 2px silver;
                background-color: white;
            }

            .navbar-default .navbar-brand{
            	color: #FF6D3B;
            }

            #login-dp{
                min-width: 250px;
                padding: 14px 14px 0;
                overflow:hidden;
                background-color:rgba(255,255,255,.8);
            }

            #login-dp .help-block{
                font-size:12px
            }

            #login-dp .bottom{
                background-color:rgba(255,255,255,.8);
                border-top:1px solid #ddd;
                clear:both;
                padding:14px;
            }

            #login-dp .social-buttons{
                margin:12px 0
            }

            #login-dp .social-buttons a{
                width: 49%;
            }

            #login-dp .form-group {
                margin-bottom: 10px;
            }

            .btn-fb{
                color: #fff;
                background-color:#3b5998;
            }

            .btn-fb:hover{
                color: #fff;
                background-color:#496ebc;
            }

            .btn-tw{
                color: #fff;
                background-color:#55acee;
            }

            .btn-tw:hover{
                color: #fff;
                background-color:#59b5fa;
            }

            @media(max-width:768px){
                #login-dp{
                    background-color: inherit;
                    color: #fff;
                }
                #login-dp .bottom{
                    background-color: inherit;
                    border-top:0 none;
                }
            }

            #player {
                width: 100%;
                height: 100%;
            }
    </style>
    </head>
    <body>
        @include('home.layouts.topnav')

        <div class="content">
            @yield('content')
        </div>
        <script src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
        <script language="JavaScript">
            flowplayer("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf", {
                plugins: {
                pseudo: {
                url: "flowplayer.pseudostreaming-3.2.13.swf"
                }
            },

                // clip properties
                clip: {

                // our clip uses pseudostreaming
                provider: 'pseudo',

                url: 'https://iframe-video.betgames.tv/dealers.mp4'
            }
        });
        </script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
