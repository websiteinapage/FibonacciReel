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
        <link rel="stylesheet" href="<?php echo ASSET_BASE . "common/jquery-ui/css/cupertino/jquery-ui-1.10.3.custom.min.css"; ?>" />
        <script type="text/javascript" src="<?php echo ASSET_BASE . "common/jquery-ui/js/jquery-1.10.2.js"; ?>"></script>
        <script type="text/javascript" src="<?php echo ASSET_BASE . "common/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"; ?>"></script>
        <style>
            /*
            #reel {
                margin: 0; padding: 0;
            }
            #reel > li {
                padding: 0; 
                float: left; display: inline-block; 
            }
            .item-caption { display: none; width: 100%; }
            */
            #reel > li:hover {
                cursor: pointer;
            }
            #reel {
                font-family: 'Helvetica'; font-weight: 100;
            }
            .item-overlay {
                background-color: #ccc;
                opacity: 0.8;
            }
        </style>
    </head>
    <body>
        <ul id="reel">
            <li>
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
        </ul>
        
        <script>
            $.fn.fReel = function() {
                var me = this;
                var options = {
                    itemClass: 'reel-items',
                    height: 240,
                    gutter: 10,
                    overlayTextColor: '#fff',
                    overlayDivClass: 'item-overlay',
                    data: []
                };
                if(arguments) {
                    options = $.extend(options, arguments[0]);
                }
                me.css({ margin: 0, padding: 0 });
                me.find('li').addClass(options.itemClass);
                $('.item-caption').css({
                    display: "none",
                    width: "100%"
                });
                $('.'+options.itemClass).css({
                    padding: 0, float: "left", display: "inline-block", 
                    margin: "0 " + options.gutter + "px " + options.gutter + "px 0" 
                });
                var sequence = {
                    set: [],
                    wideset: [1, 2, 3, 4, 5],
                    narrowset: [1, 2, 3],
                    mobileset: [1, 1], /** Trick to fix bug with mobile layout **/
                    widths: []
                };
                $('body').css({
                    margin: 0, padding: 0
                });
                var rows = [];
                var last_at;
                this.reLayout = function() {
                    var w = me.width();
                    console.log(me.filler);
                    sequence.widths = [];
                    if($(window).width()>=1200) {
                        sequence.set = sequence.wideset;
                    } else if ($(window).width()>=500) {
                        sequence.set = sequence.narrowset;
                    } else {
                        sequence.set = sequence.mobileset;
                    }
                    for(var i=0; i<sequence.set.length; i++) {
                        sequence.widths[i] = w/sequence.set[i];
                    }
                };
                this.fetchData = function() {
                    /** pull all ajax data for elements and build DOM **/
                };
                this.genWidth = function() {
                    var at = 1;
                    if(sequence.set.length>1) {
                        /** Make sure rows get number of elements different from last row **/
                        at = Math.floor(Math.random()*sequence.set.length);
                        while(last_at===at) {
                           at = Math.floor(Math.random()*sequence.set.length);
                        }
                    }
                    last_at = at;
                    this.rowCnt=sequence.set[at];
                    return sequence.widths[at];
                };
                this.build = function() {
                    if(!options) throw 'No options available.'; 
                    if(!options.data) throw 'No data available.'; 
                    if(options.data.length<1) throw 'No items available.'; 
                    // var row = 1;
                    var at = 0;
                    rows = [];
                    while(at<options.data.length) {
                        // new row
                        var w = me.genWidth();
                        var thisrow = [];
                        w = w-options.gutter;
                        for(var j=0; j<me.rowCnt; j++, at++) {
                            var item = options.data[at];
                            thisrow.push($.extend(item, {
                                width: w,
                                height: options.height
                            }));
                            var DOMitem = $('#'+item.id);
                            if(item.img) {
                                // track width
                                DOMitem.css({
                                    width: w,
                                    margin: "0 " + options.gutter + "px " + options.gutter + "px 0",
                                    height: options.height,
                                    backgroundImage: "url('" + item.img.src + "')",
                                    backgroundSize: "cover"
                                });
                            } else {
                                // track width
                                DOMitem.css({
                                    width: w,
                                    margin: "0 " + options.gutter + "px " + options.gutter + "px 0",
                                    height: options.height,
                                    color: '#000'
                                });
                            }
                            var DOMcaption = DOMitem.find('.item-caption');
                            DOMcaption.css({
                                height: options.height-6,
                                width: w-6,
                                opacity: 0.5,
                                background: '#000',
                                color: '#fff',
                                padding: '3px',
                                position: "absolute",
                                zIndex: 2
                            })
                            .position({
                                my: "top left",
                                at: "top left",
                                of: DOMitem
                            });
                            var DOMcontent = DOMitem.find('.item-content');
                            DOMcontent
                                    .css({
                                        position: "absolute",
                                        zIndex: 1,
                                        width: DOMitem.width(),
                                        height: DOMitem.height(),
                                        overflow: "hidden"
                                    })
                                    .position({
                                        my: "top left",
                                        at: "top left",
                                        of: DOMitem
                                    });
                            
                            DOMitem.bind('mouseover click', function() {
                                var tItem = $(this).find('.item-caption');
                                me.focusCaptionID = tItem.attr('id');
                                me.focusItemID = $(this).attr('id');
                                // var lastContent = $(this).find('.item-content');
                                $(".item-caption:not(#" + tItem.attr('id') + ")").fadeOut(250, function() {
                                    var focusCaption = $('#'+me.focusCaptionID);
                                    var focusItem = $('#'+me.focusItemID);
                                    var focusContent = focusItem.find('.item-content');
                                    setTimeout(function() {
                                        $('.item-content:not(:visible):not(#' + focusContent.attr('id') + ')').show();
                                    }, 350);
                                    focusContent.hide();
                                    focusCaption.fadeIn(250);
                                });
                            });
                            me.lastItem = item;
                        }
                        // fix last item in row
                        var DOMitem = $('#'+me.lastItem.id);
                        DOMitem.css({
                            marginRight: 0
                        });
                        rows.push(thisrow);
                        at+=1;
                    }
                    console.log(rows);
                };
                try {
                    this.fetchData();
                    //this.hide();
                    var at=1;
                    this.find('li').each(function() {
                        var item = $(this);
                        var item_id = 'item-'+at;
                        item.attr('id', item_id);
                        // item.addClass(options.itemClass);
                        // get slide details via ajax
                        var thumbnail = {
                            id: item_id,
                            caption: "<h1>This is the Cover Story</h1>This is caption #" + at,
                            detail: "This is some more information",
                            url: "http://twitter.com/uchechilaka",
                            img: null
                        };
                        /*
                        item.find('.item-caption').position({
                            my: "bottom left",
                            at: "bottom left",
                            of: $(parent)
                        });
                        */
                        var imgelem = item.find('img:first');
                        if(imgelem.length>0) {
                            thumbnail.img = new Image();
                            thumbnail.img.src = imgelem.attr('src');
                            imgelem.remove();
                        } else {
                            item.addClass('html-only');
                        }
                        var content = item.html();
                        item.html("<div id=\"item-content-" + at + "\" class='item-content'>" + content + "</div>");
                        item.append("<div id=\"item-caption-" + at + "\" class=\"item-caption " + options.overlayDivClass + "\" style='display: none'>" + thumbnail.caption + "</div>");
                        if(imgelem.length>0) {
                            item.find('.item-content').css({
                                color: options.overlayTextColor
                            });
                        }
                        options.data.push(thumbnail);
                        at+=1;
                    });
                    /** Re-layout on window resize **/
                    this.reLayout();
                    /** Build layout **/
                    this.build();
                    console.log(options);
                    console.log(sequence.widths);
                    var me = this;
                    /** Re-calculate widths **/
                    $(window).bind('resize', function() {
                        me.reLayout();
                        clearTimeout(me.do_ReBuild);
                        me.do_ReBuild = setTimeout(function() {
                            me.build();
                        }, 500);
                    });
                } catch(ex) { }
            };
            
            $(document).ready(function() {
                $('#reel').fReel({
                    height: 380
                });
            });
        </script>
    </body>
</html>
