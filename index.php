<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
define('ASSET_BASE', "http://{$_SERVER['HTTP_HOST']}/assets/");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="src/css/fibonacci.css" />
        <style>
            .social-share {
                background: #fff;
                color: #000;
                border-radius: 50%;
                padding: 10px;
                margin: 0 0.5em 0 0;
                text-decoration: none;
            }
            .button-bar {
                display: block;
                margin: 1em 0 0 0;
            }
            /** The reel also handles and corrects for CSS borders 
            #reel > li {
                border: 0.5em solid #e8e8e8;
            }
            **/
        </style>
    </head>
    <body>
        <ul id="reel">
            <li>
                <h1>This is the default text for this thumbnail</h2>
                <p>And some more information about these photos</p>
                <div class="caption">
                    <span class="button-bar">
                        <a href="https://facebook.com" class="social-share">&nbsp;<i class="fa fa-facebook"></i> </a>
                        <a href="https://twitter.com" class="social-share"><i class="fa fa-twitter"></i></a>
                    </span>
                    <h1>This should be a caption in markup.</h1>
                    <p>
                        It can have more information, which will make it entertaining!                        
                    </p>
                </div>
                <img src="http://oesteselvagem.fantasticomundodesunca.org/wp-content/uploads/2013/02/charlize-theron-HD-Wallpapers.jpg" />
            </li>
            <li>
                <img src="http://i.huffpost.com/gen/1269237/thumbs/o-CHARLIZE-THERON-AIDS-SOUTH-AFRICA-facebook.jpg" />
            </li>
            <li>
                <h1>Test with no image</h1>
            </li>
            <li>
                <img src="http://www.hdwallpapers.in/walls/charlize_theron_37-normal.jpg" />
            </li>
            <li>
                <img src="http://www.desktopstars.ru/md/charlize-theron/1680x1050/Charlize-Theron-1680x1050-010.jpg" />
            </li>
            <li>
                <img src="http://wallpoper.com/images/00/26/71/34/charlize-theron_00267134.jpg" />
            </li>
            <li>
                <h1>Test with images</h1>
                <p>And some more interesting comment</p>
                <img src="http://images.fanpop.com/images/image_uploads/Charlize-Theron-charlize-theron-84153_1280_1024.jpg" />
            </li>
            <li>
                <img src="http://images1.fanpop.com/images/photos/1600000/Charlize-charlize-theron-1693353-1024-768.jpg" />
            </li>
            <li>
                <img src="http://oesteselvagem.fantasticomundodesunca.org/wp-content/uploads/2013/02/charlize-theron-HD-Wallpapers.jpg" />
            </li>
            <li>
                <img src="http://i.huffpost.com/gen/1269237/thumbs/o-CHARLIZE-THERON-AIDS-SOUTH-AFRICA-facebook.jpg" />
            </li>
            <li>
                <img src="http://www.hdwallpapers.in/walls/charlize_theron_37-normal.jpg" />
            </li>
            <li>
                <img src="http://www.desktopstars.ru/md/charlize-theron/1680x1050/Charlize-Theron-1680x1050-010.jpg" />
            </li>
            <li>
                <img src="http://wallpoper.com/images/00/26/71/34/charlize-theron_00267134.jpg" />
            </li>
            <li>
                <img src="http://images.fanpop.com/images/image_uploads/Charlize-Theron-charlize-theron-84153_1280_1024.jpg" />
            </li>
            <li>
                <img src="http://images1.fanpop.com/images/photos/1600000/Charlize-charlize-theron-1693353-1024-768.jpg" />
            </li>
            <li>
                <img src="http://s3.amazonaws.com/lprnyc_wp/2013/01/Ophira_Eisenberg.jpg" />
            </li>
            <li>
                <img src="http://media.npr.org/assets/img/2013/08/02/oeisenberg_vert-616494ed6aeee81890fc8b43ef8461e2d05a6b82-s6-c30.jpg" />
            </li>
            <li>
                <img src="http://mediad.publicbroadcasting.net/p/wunc/files/styles/placed_wide/public/201301/_W8A1383.jpg" />
            </li>
            <li>
                <img src="http://www.readexpress.com/wp-content/uploads/2013/07/OphiraEisenberg.jpg" />
            </li>
            <li>
                <img src="http://b.vimeocdn.com/ts/422/642/422642051_640.jpg" />
            </li>
            <li>
                <img src="http://thenypost.files.wordpress.com/2013/08/ophira_eisenberg-300x300.jpg" />
            </li>
            <li>
                <img src="http://www.thenextchapteronline.com/wp-content/uploads/2012/03/headshot-red.jpg" />
            </li>
            <li>
                <img src="http://theliarshow.com/images/ophira_head_02.jpg" />
            </li>
            <li>
                <img src="http://cache.pakistantoday.com.pk/Romantic-Angelina.jpg" />
            </li>
            <li>
                <img src="http://media1.santabanta.com/full1/Global%20Celebrities(F)/Angelina%20Jolie/angelina-jolie-122a.jpg" />
            </li>
            <li>
                <img src="http://www.hdpaperwall.com/wp-content/uploads/2013/11/Angelina-Jolie-Wallpaper-angelina-jolie-19939129-1920-1200.jpg" />
            </li>
            <li>
                <img src="http://wallnen.com/wp-content/uploads/2013/05/Angelina-Jolie-04-HD-Wallpaper.jpg" />
            </li>
            <li>
                <img src="http://ilarge.listal.com/image/1290151/936full-angelina-jolie.jpg" />
            </li>
            <li>
                <img src="http://designsnext.com/wp-content/uploads/2013/11/jennifer-lopez.jpg" />
            </li>
            <li>
                <img src="http://gamingsquid.com/wp-content/uploads/2012/12/jennifer-lopez-wallpaper-hd-2012.jpg" />
            </li>
            <li>
                <img src="http://www.morefashionable.com/wp-content/uploads/2012/03/Jennifer-Lopez-retro-Makeup-as-Prom-Makeup-Ideas-2012-Celebrity-Makeup.jpg" />
            </li>
            <li>
                <img src="http://jilaa.com/images/stories/2014/febraury/lopez.jpg" />
            </li>
            <li>
                <h1>That's it folks!</h1>
                <p>Looking forward to more exciting photos to come soon...</p>
            </li>
        </ul>
        <script src="src/js/FibonacciReel.js"></script>
        <script>
            $(document).ready(function() {
                /*
                var parseFlickr = function(data) {
                    var arr = data.photos.photo;
                    var items = [];
                    for(var i=0;i<arr.length;i++) {
                        items.push({
                            id: arr[i].id,
                            caption: arr[i].title,
                            detail: arr[i].title,
                            default_content: arr[i].title,
                            img_url: arr[i].url_l
                        });
                    }
                    return items;
                };
                $('#reel').FibonacciReel({
                    height: 380,
                    api_datasource: "http://api.flickr.com/services/rest/?method=flickr.photos.getRecent&extras=url_l&api_key=bf0309f1e4d73160291c74efe3b347e9&format=json&nojsoncallback=1",
                    api_format_callback: parseFlickr
                });
        
        
                $.ajax({
                    url: "http://api.flickr.com/services/rest/?method=flickr.photos.getRecent&extras=url_l&api_key=bf0309f1e4d73160291c74efe3b347e9&format=json&nojsoncallback=1",
                    type: "post",
                    success: function(data, status, jqXHR) {
                        console.log(data);
                        var items = parseFlickr(data.photos.photo);
                        console.log(items);
                    },
                    error: function(jqXHR, status, err) {
                        console.log(err);
                    }
                });
                */
                $('#reel').FibonacciReel({
                    height: 380
                });
                
                
            });
        </script>
    </body>
</html>
