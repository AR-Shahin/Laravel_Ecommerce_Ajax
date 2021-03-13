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

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function setSwalMessage(mode='success',title='Success',text='Data Save Successfully!'){
        Swal.fire({
        icon: mode,
        title: title,
        text: text,
    })
    }
</script>
                @stack('script')
    </body>
</html>
