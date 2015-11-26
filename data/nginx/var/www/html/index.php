<!DOCTYPE HTML>
<html>
    <head>
        <title>docker-LEMP by webofmars - PHP index</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description"        content="LEMP Docker dev environment" />
        <meta name="keywords"           content="docker, webofmars, LEMP, dev" />

        <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="row text-center">
            <p>
                <img src="//lorempixel.com/400/200/business/">
            </p>
            <h1>This is PHP <?php $version  = explode('.', PHP_VERSION); echo "$version[0].$version[1]"; ?> baby ;-)</h1>
            <p>enjoy this simple content or choose any of the other links bellow.</p>
        </div>
        <div class="row">
            <h1>See also...</h1>
            <p>
                <ul>
                    <li><a href='./index.html'>HTML index</a>
                    <li><a href='./apc.php'>See APCu stats</a>
                    <li><a href='./clear-apc.php'>Clear APCu cache</a>
                    <li><a href='./pma/'>PhpMyAdmin</a>
                    <li><a href='./phpMemcachedAdmin/'>Memcached Admin</a>
                    <li><a href='#' onclick='window.location.href = "//" + location.hostname + ":1080/"'>maildev</a>
                </ul>
            <p>
            <h1>Your projects</h1>
            <p>
                <ul>
                    <?php
                        $filelist = array();
                        if ($handle = opendir(".")) {
                            while ($entry = readdir($handle)) {
                                if ($entry != 'pma' && $entry != 'apc.php' && $entry != '.' && 
                                      $entry != '..' && $entry != 'clear-apc.php' &&
                                      $entry != 'index.html' && $entry != 'index.php') {
                                    $filelist[] = $entry;
                                }
                                
                            }
                            closedir($handle);
                        }
                        
                        foreach($filelist as $dir) {
                            print("<li><a href=\"./$dir\">$dir</a>\n");
                        }
                    ?>
                </ul>
            </p>
            <p>
            <h2>Elasticsearch</h2>
            <ul>
                <li><a href='#' onclick='window.location.href = "//" + location.hostname + ":9200/_plugin/head"'>head</a>
                <li><a href='#' onclick='window.location.href = "//" + location.hostname + ":9200/_plugin/hq"'>HQ</a>
                <li><a href='#' onclick='window.location.href = "//" + location.hostname + ":9200/_plugin/kopf"'>kopf</a>
            </ul>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron">
            <h3>Contact Us</h3>
            <p><a href="mailto:contact@webofmars.com" class="btn btn-primary btn-lg" role="button">Contact us !</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php //phpinfo(); ?>
        </div>
    </div>
    </body>
</html>
