<!DOCTYPE html>
<html lang="en">
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="Laborator.co" />
        <link rel="icon" href="{{asset('backend')}}/assets/images/favicon.ico" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141030632-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "UA-141030632-1", {
                groups: "laborator_analytics",
                link_attribution: true,
                linker: { accept_incoming: true, domains: ["laborator.co", "kaliumtheme.com", "oxygentheme.com", "neontheme.com", "themeforest.net", "laborator.ticksy.com"] },
            });
        </script>
        <title>@yield('title','Admin') | Admin</title>
        <link rel="stylesheet" href="{{asset('backend')}}/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1" />
        <link rel="stylesheet" href="{{asset('backend')}}/assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3" />
        <link rel="stylesheet" href="{{asset('backend')}}/assets/css/bootstrap.css" id="style-resource-4" />
        <link rel="stylesheet" href="{{asset('backend')}}/assets/css/neon-core.css" id="style-resource-5" />
        <link rel="stylesheet" href="{{asset('backend')}}/assets/css/neon-theme.css" id="style-resource-6" />
        <link rel="stylesheet" href="{{asset('backend')}}/assets/css/neon-forms.css" id="style-resource-7" />
        <link rel="stylesheet" href="{{asset('backend')}}/assets/css/custom.css" id="style-resource-8" />
        <script src="{{asset('backend')}}/assets/js/jquery-1.11.3.min.js"></script>
        @stack('css')
    </head>
    <body class="page-body page-fade" data-url="https://demo.neontheme.com">

    <div class="page-container">

            @yield('app_content')
    </div>
     <!-- Imported styles on this page -->
     <link rel="stylesheet" href="{{asset('backend')}}/assets/js/jvectormap/jquery-jvectormap-1.2.2.css" id="style-resource-1" /> <link rel="stylesheet" href="{{asset('backend')}}/assets/js/rickshaw/rickshaw.min.css" id="style-resource-2" />
        <script src="{{asset('backend')}}/assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
        <script src="{{asset('backend')}}/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
        <script src="{{asset('backend')}}/assets/js/bootstrap.js" id="script-resource-3"></script>
        <script src="{{asset('backend')}}/assets/js/joinable.js" id="script-resource-4"></script>
        <script src="{{asset('backend')}}/assets/js/resizeable.js" id="script-resource-5"></script>
        <script src="{{asset('backend')}}/assets/js/neon-api.js" id="script-resource-6"></script>
        <script src="{{asset('backend')}}/assets/js/cookies.min.js" id="script-resource-7"></script>
        <script src="{{asset('backend')}}/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-8"></script>
        <script src="{{asset('backend')}}/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-9"></script>
        <script src="{{asset('backend')}}/assets/js/jquery.sparkline.min.js" id="script-resource-10"></script>
        <script src="{{asset('backend')}}/assets/js/rickshaw/vendor/d3.v3.js" id="script-resource-11"></script>
        <script src="{{asset('backend')}}/assets/js/rickshaw/rickshaw.min.js" id="script-resource-12"></script>
        <script src="{{asset('backend')}}/assets/js/raphael-min.js" id="script-resource-13"></script>
        <script src="{{asset('backend')}}/assets/js/morris.min.js" id="script-resource-14"></script>
        <script src="{{asset('backend')}}/assets/js/toastr.js" id="script-resource-15"></script>
        <script src="{{asset('backend')}}/assets/js/neon-chat.js" id="script-resource-16"></script>
        <!-- JavaScripts initializations and stuff -->
        <script src="{{asset('backend')}}/assets/js/neon-custom.js" id="script-resource-17"></script>
        <!-- Demo Settings -->
        <script src="{{asset('backend')}}/assets/js/neon-demo.js" id="script-resource-18"></script>
        <script src="{{asset('backend')}}/assets/js/neon-skins.js" id="script-resource-19"></script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(["_setAccount", "UA-28991003-7"]);
            _gaq.push(["_setDomainName", "demo.neontheme.com"]);
            _gaq.push(["_trackPageview"]);
            (function () {
                var ga = document.createElement("script");
                ga.type = "text/javascript";
                ga.async = true;
                ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
            <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        // Sample Toastr Notification
                        setTimeout(function () {
                            var opts = {
                                closeButton: true,
                                debug: false,
                                positionClass: rtl() || public_vars.$pageContainer.hasClass("right-sidebar") ? "toast-top-left" : "toast-top-right",
                                toastClass: "black",
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                timeOut: "5000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                            };
                            toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
                        }, 3000);

                        // Sparkline Charts
                        $(".inlinebar").sparkline("html", { type: "bar", barColor: "#ff6264" });
                        $(".inlinebar-2").sparkline("html", { type: "bar", barColor: "#445982" });
                        $(".inlinebar-3").sparkline("html", { type: "bar", barColor: "#00b19d" });
                        $(".bar").sparkline(
                            [
                                [1, 4],
                                [2, 3],
                                [3, 2],
                                [4, 1],
                            ],
                            { type: "bar" }
                        );
                        $(".pie").sparkline("html", { type: "pie", borderWidth: 0, sliceColors: ["#3d4554", "#ee4749", "#00b19d"] });
                        $(".linechart").sparkline();
                        $(".pageviews").sparkline("html", { type: "bar", height: "30px", barColor: "#ff6264" });
                        $(".uniquevisitors").sparkline("html", { type: "bar", height: "30px", barColor: "#00b19d" });

                        $(".monthly-sales").sparkline([1, 2, 3, 5, 6, 7, 2, 3, 3, 4, 3, 5, 7, 2, 4, 3, 5, 4, 5, 6, 3, 2], {
                            type: "bar",
                            barColor: "#485671",
                            height: "80px",
                            barWidth: 10,
                            barSpacing: 2,
                        });

                        // JVector Maps
                        var map = $("#map");
                        map.vectorMap({
                            map: "europe_merc_en",
                            zoomMin: "3",
                            backgroundColor: "#383f47",
                            focusOn: { x: 0.5, y: 0.8, scale: 3 },
                        });

                        // Line Charts
                        var line_chart_demo = $("#line-chart-demo");
                        var line_chart = Morris.Line({
                            element: "line-chart-demo",
                            data: [
                                { y: "2006", a: 100, b: 90 },
                                { y: "2007", a: 75, b: 65 },
                                { y: "2008", a: 50, b: 40 },
                                { y: "2009", a: 75, b: 65 },
                                { y: "2010", a: 50, b: 40 },
                                { y: "2011", a: 75, b: 65 },
                                { y: "2012", a: 100, b: 90 },
                            ],
                            xkey: "y",
                            ykeys: ["a", "b"],
                            labels: ["October 2013", "November 2013"],
                            redraw: true,
                        });
                        line_chart_demo.parent().attr("style", "");

                        // Donut Chart
                        var donut_chart_demo = $("#donut-chart-demo");
                        donut_chart_demo.parent().show();
                        var donut_chart = Morris.Donut({
                            element: "donut-chart-demo",
                            data: [
                                { label: "Download Sales", value: getRandomInt(10, 50) },
                                { label: "In-Store Sales", value: getRandomInt(10, 50) },
                                { label: "Mail-Order Sales", value: getRandomInt(10, 50) },
                            ],
                            colors: ["#707f9b", "#455064", "#242d3c"],
                        });
                        donut_chart_demo.parent().attr("style", "");

                        // Area Chart
                        var area_chart_demo = $("#area-chart-demo");
                        area_chart_demo.parent().show();
                        var area_chart = Morris.Area({
                            element: "area-chart-demo",
                            data: [
                                { y: "2006", a: 100, b: 90 },
                                { y: "2007", a: 75, b: 65 },
                                { y: "2008", a: 50, b: 40 },
                                { y: "2009", a: 75, b: 65 },
                                { y: "2010", a: 50, b: 40 },
                                { y: "2011", a: 75, b: 65 },
                                { y: "2012", a: 100, b: 90 },
                            ],
                            xkey: "y",
                            ykeys: ["a", "b"],
                            labels: ["Series A", "Series B"],
                            lineColors: ["#303641", "#576277"],
                        });
                        area_chart_demo.parent().attr("style", "");

                        // Rickshaw
                        var seriesData = [[], []];
                        var random = new Rickshaw.Fixtures.RandomData(50);
                        for (var i = 0; i < 50; i++) {
                            random.addData(seriesData);
                        }
                        var graph = new Rickshaw.Graph({
                            element: document.getElementById("rickshaw-chart-demo"),
                            height: 193,
                            renderer: "area",
                            stroke: false,
                            preserve: true,
                            series: [
                                {
                                    color: "#73c8ff",
                                    data: seriesData[0],
                                    name: "Upload",
                                },
                                {
                                    color: "#e0f2ff",
                                    data: seriesData[1],
                                    name: "Download",
                                },
                            ],
                        });
                        graph.render();
                        var hoverDetail = new Rickshaw.Graph.HoverDetail({
                            graph: graph,
                            xFormatter: function (x) {
                                return new Date(x * 1000).toString();
                            },
                        });
                        var legend = new Rickshaw.Graph.Legend({
                            graph: graph,
                            element: document.getElementById("rickshaw-legend"),
                        });
                        var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
                            graph: graph,
                            legend: legend,
                        });
                        setInterval(function () {
                            random.removeData(seriesData);
                            random.addData(seriesData);
                            graph.update();
                        }, 500);
                    });

                    function getRandomInt(min, max) {
                        return Math.floor(Math.random() * (max - min + 1)) + min;
                    }
                </script>

                @stack('script')
    </body>
</html>
