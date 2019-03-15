<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JKTMX - DASHBOARD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('notika/img/favico-ga.png')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('notika/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('notika/css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/notika-custom-icon.css')}}">
    <!-- Data Table JS
		============================================ -->
        <link rel="stylesheet" href="{{asset('notika/css/jquery.dataTables.min.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/wave/waves.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('notika/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('notika/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="{{asset('notika/img/logo-header-ga.png')}}" alt="" /></a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-windows"></i>Data</a>
                        </li>                        
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ url('/doorprize')}}">Doorprize</a>
                                </li>
                                <li><a href="{{ url('/grandprize')}}">Grandprize</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('/')}}">Manual Attendance</a>
                                </li>
                                <li><a href="{{ url('/subscriber/manual')}}">Manual Registration</a>
                                </li> 
                                <li><a href="{{ url('/subscriber')}}">GA Group Employee</a>
                                </li>                                
                            </ul>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{ $countall }}</span></h2>
                            <p>Total GA Group Employees</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{ $attend }}</h2>
                            <p>Doorprize Subscriber</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{ $winner }}</h2>
                            <p>Winner</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                    
                    <!-- Start Random -->
                    <div class="random">
                    <div class="form-example-int mg-t-15">
                        
                        <button type="submit" class="btn btn-success notika-btn-success" value="Start" id="submit" onclick="countdown()">GO</button>
                        <button type="submit" class="btn btn-danger notika-btn-success" id="submit" value="Stop" onclick="cdpause()">STOP</button> 
                    </div>
                    <p><span id="timespan"></span></p>
                    <p><input type="hidden" id="urut"></span></p>
                    <p><span id="Company"></span></p>
                    <p><span id="Nama"></span></p>
                    <script src="jquery.min.js"></script>
                                <script type="text/javascript">
	                                var t, count, urut, count2;
                                    var myArrs = <?php echo $arrs; ?>;
	                                function cddisplay() {
                                        document.getElementById('timespan').innerHTML = count;
                                        document.getElementById('urut').value = urut;
                                        document.getElementById('pemenang').value = count2;
                            		    
        	                        }
	                                function countdown() {

                                    document.getElementById('Company').innerHTML ="";
                                    document.getElementById('Nama').innerHTML = "";
		                            // starts countdown
		                                cddisplay();
		                                if (acak === 0) {
			                            // time is up
		                                } else {                                                                    
                                        acak++;
                                        
                                        
                                        count = myArrs[urut]['company']+"-"+myArrs[urut]['employeeID'];
                                        //count = myArrs[urut]['company']+"-"+myArrs[urut]['employeeID']+"-"+myArrs[urut]['department'];

                                        count2 = myArrs[urut]['employeeID'];
                                
                                        urut++;
                                        // alert(urut);
                                        if (urut == jumlah){urut = 0} ;
                                        t = setTimeout(countdown, 20);
		                                }
	                                }
	                                function cdpause() {
                                        
                                        urutN = document.getElementById('urut').value;


                                    // document.getElementById('Pemenang').value = document.getElementById('timespan').innerHTML;
                                    // document.getElementById('Company').innerHTML = myArrs[urutN]['company'];
                                    // document.getElementById('Nama').innerHTML = myArrs[urutN]['fullName'];



                                    // pauses countdown
                                    clearTimeout(t);
	                                }
                                    acak = 1;
                                    urut = 0;
                                    count = "";
                                    jumlah = <?php  echo $count; ?>;
                                    // jumlah = <?php  echo '2'; ?>;

                                    cddisplay();
                            </script> 
                    <!-- End Random -->
                        
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Submit Pemenang</h2>                            
                        </div>                       
                        <div class="form-example-int mg-t-15">
                            <form action="{{ url('submit/pemenang') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="pemenang" class="form-control" id="pemenang" placeholder="" value="">
                            <button type="submit" class="btn btn-success notika-btn-success">Submit</button>      
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    <!-- End Email Statistic area-->
    <!-- Start Realtime sts area-->

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Pemenang Doorprize</h2>                            
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 0;?>
                                    @foreach($data as $subs)
                                    <?php// dd($subs); ?>
                                    <?php $index++; ?>                                    
                                    <tr>
                                        <td>{{ $index }}</td>
                                        <td>{{ $subs->employeeID }}</td>
                                        <td>{{ $subs->fullName }}</td>
                                        <td>{{ $subs->company }}</td>
                                        <td>{{ $subs->status }}</td>
                                    </tr>
                                    @endforeach                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019. Garuda Indonesia <a href="https://www.garuda-indonesia.com/id/id/index.page"></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{asset('notika/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('notika/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('notika/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('notika/js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('notika/js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('notika/js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="j{{asset('notika/s/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('notika/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('notika/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('notika/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{asset('notika/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('notika/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('notika/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('notika/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('notika/js/sparkline/sparkline-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('notika/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('notika/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('notika/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('notika/js/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('notika/js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('notika/js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('notika/js/knob/knob-active.js')}}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{asset('notika/js/wave/waves.min.js')}}"></script>
    <script src="{{asset('notika/js/wave/wave-active.js')}}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('notika/js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('notika/js/plugins.js')}}"></script>
	<!--  Chat JS
		============================================ -->
    <script src="{{asset('notika/js/chat/moment.min.js')}}"></script>
    <script src="{{asset('notika/js/chat/jquery.chat.js')}}"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{{asset('notika/js/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('notika/js/data-table/data-table-act.js')}}"></script>
    
    <!-- main JS
		============================================ -->
    <script src="{{asset('notika/js/main.js')}}"></script>
	<!-- tawk chat JS
		============================================ -->
    <!-- <script src="{{asset('notika/js/tawk-chat.js')}}"></script> -->
    
</body>

</html>