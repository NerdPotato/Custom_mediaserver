<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">

        <title><-- Compressed Potato</title>
        
        <link rel="stylesheet" href="css/ui.tabs.css" type="text/css" media="print, projection, screen"/>
        <link rel="stylesheet" href="css/base.css" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="images/Favicon.ico" />

        <script src="js/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="js/ui.core.js" type="text/javascript"></script>
        <script src="js/ui.tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#container-1 > ul').tabs({ fx: { opacity: 'toggle'} });
            });
        </script>
    </head>

    <body>
        <h1>NerdPotato's Media Server</h1>
        
        <div id="container-1">
            <ul>
                <li><a href="#cp"><span>Control Panel</span></a></li>
            </ul>

            <div id="cp">
                <div class="fragment-content" style="left:50%;margin:0 auto">
                    <div style="float:left;width:24%"></div>
                    <div style="float:left;width:20%">
                        <a href="http://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12320"><img
                        src="images/Terminal.png"/>Web Shell</a>
                    </div>
                    <div style="float:left;width:20%">
                        <a href="https://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:12321"><img
                        src="images/webminlogo.png"/>Webmin</a>
                    </div>
                    <div style="float:left;width:25%"></div>

                    <div style="float:left;width:20%">
                        <a href="http://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:8080">
                        <img src="images/qbittorrent.png"/>qBittorrent</a>
                    </div>
                    <div style="float:left;width:15%">
                        <a href="http://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:8096"><img
                        src="images/emby.png"/>Emby</a>
                    </div>
                    <div style="float:left;width:20%">
                        <a href="http://<?php print
                        $_SERVER{'HTTP_HOST'}; ?>:5050"><img
                        src="images/CouchPotato.png"/>CouchPotato</a>
                    </div>
                    <div style="float:left;width:30%"></div>

                    
                    <ul>
                        
                    </ul>
                </div>
            </div>

        </div>
    </body>
</html>

