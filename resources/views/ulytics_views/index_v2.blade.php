<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Dashboard v2 | Ulytics</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	


</head>
<body>
	<!-- begin #page-loader -->

	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="app">
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>ulytics</b> </a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">{{\Auth::user()->name}}</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<!-- <a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a> -->
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover "></div>
							<div class="image">
								<!-- <img src="assets/img/user/user-13.jpg" alt="" /> -->
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								{{\Auth::user()->name}}
								<small>Technical Product Manager</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-th-large"></i>
							<span>Dashboard</span>
						</a>
						<ul class="sub-menu">
							<li class="active"><a href="/home">Daily stats</a></li>
							<li><a href="index.html">Comparison</a></li>
							
						</ul>
					</li>
					
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<!-- <ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Dashboard v2</li>
			</ol> -->
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Daily stats <small>A quick snapshot of your day so far.</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-teal">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">NO OF WEBSITES VISITED TODAY</div>
							<div class="stats-number">7,842,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70.1%;"></div>
							</div>
							<div class="stats-desc">Better than last week (70.1%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TOTAL TIME SPENT ONLINE</div>
							<div class="stats-number">180,200</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
							<div class="stats-desc">Better than last week (40.5%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-purple">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TIME SPENT ON PRODUCTIVE</div>
							<div class="stats-number">38,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 76.3%;"></div>
							</div>
							<div class="stats-desc">Better than last week (76.3%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-black">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TIME SPENT ON NON-PRODUCTIVE</div>
							<div class="stats-number">3,988</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 54.9%;"></div>
							</div>
							<div class="stats-desc">Better than last week (54.9%)</div>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 id="visitors-line-chart" -->
				<div class="col-lg-8">
					<div class="widget-chart with-sidebar inverse-mode">
						<div class="widget-chart-content inverse-mode bg-black">
							<h4 class="chart-title">
								Time spent on top five websites today
								<!-- <small>Where do our visitors come from</small> -->

							</h4>
							<div  class="widget-chart-full-width nvd3-inverse-mode" id="chart_div" style="height: 260px;">
								<!-- <div ></div> -->

							</div>
						</div>
						<div class="widget-chart-sidebar bg-black-darker">
							<div class="chart-number">
								1,225,729
								<small>Total visitors</small>
							</div>
							<div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
							<ul class="chart-legend f-s-11">
								<li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
								<li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->

				<div class="col-lg-4">
					<div class="panel panel-inverse" data-sortable-id="index-1">
						<div class="panel-heading">
							<h4 class="panel-title">
								Visitors Origin

							</h4>
						</div>
						<div id="visitors-map" class="bg-black" style="height: 179px;"></div>
						<div class="list-group">
							<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
								1. United State 
								<span class="badge f-w-500 bg-gradient-teal f-s-10">20.95%</span>
							</a> 
							<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
								2. India
								<span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
							</a>
							<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
								3. Mongolia
								<span class="badge f-w-500 bg-gradient-grey f-s-10">14.99%</span>
							</a>
						</div>
					</div>
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
			  <!-- begin col-4 -->
			  <div class="col-lg-4">
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-2">
						<div class="panel-heading">
							<h4 class="panel-title">Chat History <span class="label bg-gradient-teal pull-right">4 message</span></h4>
						</div>
						<div class="panel-body bg-silver">
							<div class="chats" data-scrollbar="true" data-height="225px">
								<div class="left">
									<span class="date-time">yesterday 11:23pm</span>
									<a href="javascript:;" class="name">Sowse Bawdy</a>
									<a href="javascript:;" class="image"><img alt="" src="assets/img/user/user-12.jpg" /></a>
									<div class="message">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum arcu eu feugiat.
									</div>
								</div>
								<div class="right">
									<span class="date-time">08:12am</span>
									<a href="javascript:;" class="name"><span class="label label-primary">ADMIN</span> Me</a>
									<a href="javascript:;" class="image"><img alt="" src="assets/img/user/user-13.jpg" /></a>
									<div class="message">
										Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
									</div>
								</div>
								<div class="left">
									<span class="date-time">09:20am</span>
									<a href="javascript:;" class="name">Neck Jolly</a>
									<a href="javascript:;" class="image"><img alt="" src="assets/img/user/user-10.jpg" /></a>
									<div class="message">
										Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</div>
								</div>
								<div class="left">
									<span class="date-time">11:15am</span>
									<a href="javascript:;" class="name">Shag Strap</a>
									<a href="javascript:;" class="image"><img alt="" src="assets/img/user/user-14.jpg" /></a>
									<div class="message">
										Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
									</div>
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<form name="send_message_form" data-id="message-form">
								<div class="input-group">
									<input type="text" class="form-control" name="message" placeholder="Enter your message here.">
									<span class="input-group-append">
										<button class="btn btn-primary" type="button"><i class="fa fa-camera"></i></button>
										<button class="btn btn-primary" type="button"><i class="fa fa-link"></i></button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-4 -->
				<!-- begin col-4 -->
				<div class="col-lg-4">
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-3">
						<div class="panel-heading">
							<h4 class="panel-title">Today's Schedule</h4>
						</div>
						<div id="schedule-calendar" class="bootstrap-calendar"></div>
						<div class="list-group">
							<a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
								Sales Reporting
								<span class="badge f-w-500 bg-gradient-teal f-s-10">9:00 am</span>
							</a> 
							<a href="javascript:;" class="list-group-item d-flex justify-content-between align-items-center text-ellipsis">
								Have a meeting with sales team
								<span class="badge f-w-500 bg-gradient-blue f-s-10">2:45 pm</span>
							</a>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-4 -->
				<!-- begin col-4 -->
				<div class="col-lg-4">
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-4">
						<div class="panel-heading">
							<h4 class="panel-title">New Registered Users <span class="pull-right label bg-gradient-teal">24 new users</span></h4>
						</div>
						<ul class="registered-users-list clearfix">
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-5.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Savory Posh
									<small>Algerian</small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-3.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Ancient Caviar
									<small>Korean</small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-1.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Marble Lungs
									<small>Indian</small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-8.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Blank Bloke
									<small>Japanese</small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-2.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Hip Sculling
									<small>Cuban</small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-6.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Flat Moon
									<small>Nepalese</small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-4.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Packed Puffs
									<small>Malaysian></small>
								</h4>
							</li>
							<li>
								<a href="javascript:;"><img src="assets/img/user/user-9.jpg" alt="" /></a>
								<h4 class="username text-ellipsis">
									Clay Hike
									<small>Swedish</small>
								</h4>
							</li>
						</ul>
						<div class="panel-footer text-center">
							<a href="javascript:;" class="text-inverse">View All</a>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="{{ asset('js/apps.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/d3/d3.min.js"></script>
	<script src="assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/js/demo/dashboard-v2.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			DashboardV2.init();
		});
	</script>
	<!-- Charts-->
	 <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    	
    var vm = new Vue({
		el:'#app',

		mounted(){
          
           this.LoadMainChart();
          // this.populateCategories();

        },
		methods: {

			LoadMainChart:function()
			{
              //alert("cool");
              google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      		 google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
              function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Websites');
        data.addRows([
          ['laracasts', 100],
          ['google', 200],
          ['thankingli', 150],
          ['ulytics', 50],
          ['sopact', 80]
        ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0,	 
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         annotations:{
                       	alwaysOutside: true
                       },
                         role: "annotation" },
                       1]);
        // Set chart options
        var options = {
                        // 'width':500,
                        //'height':300,
                       'legend':'none',
                       
                       backgroundColor: { fill:'transparent' },
                       hAxis: {
    textStyle:{color: '#FFF'}
},
colors: ['#00ACAC', '#348FE2', '#ec8f6e', '#f3b49f', '#f6c7b6'],
vAxis: {
    textStyle:{color: '#FFF'}
},
             
                   		};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(view, options);
      }
          },
		},
		

		data: {
            
        }


	});
	</script>
    

	<!-- charts ends here-->
</body>
</html>
