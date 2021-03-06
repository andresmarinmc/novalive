<?php
require("php/config.php");
require(FRT_DIR . "body.class.php");
$o = new Body();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
   <![endif]-->
<!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8" lang="en">
      <![endif]-->
<!--[if IE 8]>
      <html class="no-js lt-ie9" lang="en">
         <![endif]-->
<!--[if IE 9]>
         <html class="ie9 no-js">
            <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <?= $o->MostrarHead() ?>
</head>

<body id="kure" class="template-index">
    <div id="PageContainer"></div>
    <div class="quick-view"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <div class="gf-menu-device-wrapper">
            <div class="close-menu">x</div>
            <div class="gf-menu-device-container"></div>
        </div>
    </nav>
    <?= $o->MostrarHeader("", "", "", "", "current") ?>
    <main class="main-content">
        <div class="grid-uniform">
            <div class="grid__item">

                <div id="contacto" class="clearfix" style="margin-bottom: 70px;"></div>
                <div id="shopify-section-1547016818515" class="shopify-section index-section">
                    <section id="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-header section-header--small">
                                        <div class="border-title wow fadeInDown animated">
                                            <h2 style="color: #222222;">Login</h2>
                                            <div class="small-desc">
                                                <p style="color: #444444;"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <!-- Start Contact Form -->
                                        <form role="form" id="contactForm" class="login" data-toggle="validator" class="" style="width: 50% !important;">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" id="name" class="form-control" placeholder="Nombre" required data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success"></i> Ingresar</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                            <br>
                                        </form>
                                        <!-- End Contact Form -->
                                    </center>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var myPlayer;
                        jQuery(function() {
                            myPlayer = jQuery("#bgndVideo").YTPlayer({
                                useOnMobile: true,
                                mobileFallbackImage: "assets/mask-4.png",
                            });

                            /* DEBUG ******************************************************************************************/

                            var YTPConsole = jQuery("#eventListener");
                            // EVENTS: YTPReady YTPStart YTPEnd YTPPlay YTPLoop YTPPause YTPBuffering YTPMuted YTPUnmuted YTPChangeVideo
                            myPlayer.on(
                                "YTPReady YTPStart YTPEnd YTPPlay YTPLoop YTPPause YTPBuffering YTPMuted YTPUnmuted YTPChangeVideo",
                                function(e) {
                                    YTPConsole.append(
                                        "event: " +
                                        e.type +
                                        " (" +
                                        jQuery("#bgndVideo").YTPGetPlayer().getPlayerState() +
                                        ") > time: " +
                                        e.time
                                    );
                                    YTPConsole.append("<br>");
                                }
                            );

                            // EVENT: YTPChanged
                            myPlayer.on("YTPChanged", function(e) {
                                YTPConsole.html("");
                            });

                            myPlayer.on("YTPChangeVideo", function(e) {
                                console.debug("YTPChangeVideo", e);
                            });

                            // EVENT: YTPData
                            myPlayer.on("YTPData", function(e) {
                                $(".dida").html(e.prop.title + "<br>@" + e.prop.channelTitle);
                                $("#videoData").show();

                                YTPConsole.append("******************************");
                                YTPConsole.append("<br>");
                                YTPConsole.append(e.type);
                                YTPConsole.append("<br>");
                                YTPConsole.append(e.prop.title);
                                YTPConsole.append("<br>");
                                YTPConsole.append(e.prop.description.replace(/\n/g, "<br/>"));
                                YTPConsole.append("<br>");
                                YTPConsole.append("******************************");
                                YTPConsole.append("<br>");
                            });

                            // EVENT: YTPTime
                            myPlayer.on("YTPTime", function(e) {
                                var currentTime = e.time;
                                var traceLog = currentTime / 5 == Math.floor(currentTime / 5);

                                if (traceLog && YTPConsole.is(":visible")) {
                                    YTPConsole.append(
                                        myPlayer.attr("id") +
                                        " > " +
                                        e.type +
                                        " > actual time is: " +
                                        currentTime
                                    );
                                    YTPConsole.append("<br>");

                                    if (myPlayer.YTPGetFilters())
                                        console.debug("filters: ", myPlayer.YTPGetFilters());
                                }
                            });

                            /* END DEBUG ******************************************************************************************/
                        });

                        /**
                         *
                         * @param val
                         * @returns {*|number}
                         */
                        function checkForVal(val) {
                            return val || 0;
                        }
                    </script>
                </div>
                <!-- END content_for_index -->
            </div>
        </div>
    </main>
    <?= $o->CargarAssetsJS() ?>
</body>

</html>