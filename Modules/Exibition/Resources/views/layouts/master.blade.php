<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رادا | داشبورد</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.rtl.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="/img/profile_small.jpg" />
                                 </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">ایمان عباسی</strong>
                                 </span> <span class="text-muted text-xs block">مدیر هنری <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInLeft m-t-xs">
                            <li><a href="profile.html">پروفایل</a></li>
                            <li><a href="contacts.html">مخاطبین</a></li>
                            <li><a href="mailbox.html">ایمیل</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">خروج</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        لوگو
                    </div>
                </li>
                <li class="active">
                    <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">داشبورد ها</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="active"><a href="index-2.html">داشبورد ورژن 1</a></li>
                        <li><a href="dashboard_2.html">داشبورد ورژن 2</a></li>
                        <li><a href="dashboard_3.html">داشبورد ورژن 3</a></li>
                        <li><a href="dashboard_4_1.html">داشبورد ورژن 4</a></li>
                    </ul>
                </li>



            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="جستجو" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">به بخش مدیریت خوش آمدید</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">

                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> خروج
                        </a>
                    </li>
                    <li>
                        <a class="left-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
       @yield('content')


            </div>
</div>







<!-- Mainly scripts -->

<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="/js/plugins/flot/jquery.flot.js"></script>
<script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/rada.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="/js/plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                positionClass: 'toast-top-left',
                timeOut: 4000
            };
            toastr.success('لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ', 'به قسمت مدیریت خوش آمدید');

        }, 1300);


        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
            [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#464f88"],
                xaxis:{
                },
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            }
        );

        var doughnutData = [
            {
                value: 300,
                color: "#a3e1d4",
                highlight: "#1ab394",
                label: "App"
            },
            {
                value: 50,
                color: "#dedede",
                highlight: "#1ab394",
                label: "Software"
            },
            {
                value: 100,
                color: "#b5b8cf",
                highlight: "#1ab394",
                label: "Laptop"
            }
        ];

        var doughnutOptions = {
            segmentShowStroke: true,
            segmentStrokeColor: "#fff",
            segmentStrokeWidth: 2,
            percentageInnerCutout: 45, // This is 0 for Pie charts
            animationSteps: 100,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false
        };

        var ctx = document.getElementById("doughnutChart").getContext("2d");
        var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

        var polarData = [
            {
                value: 300,
                color: "#a3e1d4",
                highlight: "#1ab394",
                label: "App"
            },
            {
                value: 140,
                color: "#dedede",
                highlight: "#1ab394",
                label: "Software"
            },
            {
                value: 200,
                color: "#b5b8cf",
                highlight: "#1ab394",
                label: "Laptop"
            }
        ];

        var polarOptions = {
            scaleShowLabelBackdrop: true,
            scaleBackdropColor: "rgba(255,255,255,0.75)",
            scaleBeginAtZero: true,
            scaleBackdropPaddingY: 1,
            scaleBackdropPaddingX: 1,
            scaleShowLine: true,
            segmentShowStroke: true,
            segmentStrokeColor: "#fff",
            segmentStrokeWidth: 2,
            animationSteps: 100,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false
        };
        var ctx = document.getElementById("polarChart").getContext("2d");
        var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

    });
</script>
@yield('script')
</body>
</html>
