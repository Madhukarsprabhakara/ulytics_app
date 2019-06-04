<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>ulytics | organize your life</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="email-address" content="{{ \Auth::user()->email }}">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" />
	<!-- <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" /> -->
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<!-- <script src="../assets/plugins/pace/pace.min.js"></script> -->
	<!-- ================== END BASE JS ================== -->
	<script type="text/javascript">
		// var email_address = $('meta[name="email-address"]').attr('content');
    //var email='msprabhakara@gmail.com';
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("2990430872");
      // heap.identify(email_address);
</script>
</head>
<body>
	<!-- begin #page-loader -->
	<!-- <div id="page-loader" class="fade show"><span class="spinner"></span></div> -->
	<!-- end #page-loader -->
	
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>ulytics</b></a>
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
					<!-- <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a> -->
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
									<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
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
									<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
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
						<!-- <img src="../assets/img/user/user-13.jpg" alt="" />  -->
						<span class="d-none d-md-inline">{{\Auth::user()->name}}</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">Log Out</a>

                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
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
							<li class="active"><a href="index.html">Dashboard v1</a></li>
							<li><a href="index_v2.html">Dashboard v2</a></li>
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
				<div id="app">
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Daily stats <small>A quick snapshot of your day so far.</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div v-if="data_card" class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<!-- <div class="stats-icon"><i class="fa fa-desktop"></i></div> -->
						<div class="stats-info">
							<h4>@{{data_card['total_urls_during_day']['label']}}</h4>
							<p>@{{data_card['total_urls_during_day']['value']}}</p>	
						</div>
						<div class="stats-link">
							<a href="#" >View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-purple">
						<!-- <div class="stats-icon"><i class="fa fa-link"></i></div> -->
						<div class="stats-info">
							<h4>@{{data_card['total_time_during_day']['label']}}</h4>
							<p>@{{data_card['total_time_during_day']['value']}} @{{data_card['total_time_during_day']['unit']}}</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->


				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-teal">
						<!-- <div class="stats-icon"><i class="fa fa-clock"></i></div> -->
						<div class="stats-info">
							<h4>@{{data_card['time_spent_on_new_websites']['label']}}</h4>
							<p>@{{data_card['time_spent_on_new_websites']['value']}} @{{data_card['time_spent_on_new_websites']['unit']}}</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-black">
						<!-- <div class="stats-icon"><i class="fa fa-users"></i></div> -->

						<div class="stats-info">
							<h4>@{{data_card['no_of_sessions_today']['label']}}</h4>
							<p>@{{data_card['no_of_sessions_today']['value']}}</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-lg-8">
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-1">
						<div class="panel-heading">
							<div class="widget-list-action">
								


								<a href="#" data-toggle="dropdown" class="text-muted pull-right">
									<i class="fa fa-ellipsis-h f-s-14"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li class="active"><a href="#" >Default</a></li>
									<li><a href="#" >Sessions</a></li>
									<li><a href="#" >Table View</a></li>
									
								</ul>
								

							</div>
							
							
							<h4 class="panel-title">Significant time spent on following websites</h4>
						</div>
						<div class="panel-body">

							<div   id="chart_div" class="height-sm"></div>
							
						
					<!-- </div> -->
							<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	portalId: "2545577",
	formId: "ad42d887-32e4-411c-8360-5e4e033fd0e5"
});
</script> -->
						</div>
					</div>
					<!-- end panel -->
					
					<!-- begin tabs -->
					<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
						<li class="nav-item"><a href="#latest-post" data-toggle="tab" class="nav-link active"><i class="fa fa-camera fa-lg m-r-5"></i> <span class="d-none d-md-inline">Unclassified websites</span></a></li>
						<li class="nav-item"><a href="#purchase" data-toggle="tab" class="nav-link"><i class="fa fa-archive fa-lg m-r-5"></i> <span class="d-none d-md-inline">Websites classified distracting</span></a></li>
						<li class="nav-item"><a href="#email" data-toggle="tab" class="nav-link"><i class="fa fa-envelope fa-lg m-r-5"></i> <span class="d-none d-md-inline">Websites classified productive</span></a></li>
					</ul>
					<div class="tab-content" data-sortable-id="index-3">
						<div class="tab-pane fade active show" id="latest-post">
							<div class="height-sm" data-scrollbar="true">
								<ul class="media-list media-list-with-divider">
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="../assets/img/gallery/gallery-1.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Aenean viverra arcu nec pellentesque ultrices. In erat purus, adipiscing nec lacinia at, ornare ac eros.</h4>
											Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros. Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat id auctor gravida.
										</div>
									</li>
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="../assets/img/gallery/gallery-10.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Vestibulum vitae diam nec odio dapibus placerat. Ut ut lorem justo.</h4>
											Fusce bibendum augue nec fermentum tempus. Sed laoreet dictum tempus. Aenean ac sem quis nulla malesuada volutpat. Nunc vitae urna pulvinar velit commodo cursus. Nullam eu felis quis diam adipiscing hendrerit vel ac turpis. Nam mattis fringilla euismod. Donec eu ipsum sit amet mauris iaculis aliquet. Quisque sit amet feugiat odio. Cras convallis lorem at libero lobortis, placerat lobortis sapien lacinia. Duis sit amet elit bibendum sapien dignissim bibendum.
										</div>
									</li>
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="../assets/img/gallery/gallery-7.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Maecenas eget turpis luctus, scelerisque arcu id, iaculis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h4>
											Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque. Nam augue nulla, accumsan quis nisi a, facilisis eleifend nulla. Praesent aliquet odio non imperdiet fringilla. Morbi a porta nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
										</div>
									</li>
									<li class="media media-lg">
										<a href="javascript:;" class="pull-left">
											<img class="media-object" src="../assets/img/gallery/gallery-8.jpg" alt="" />
										</a>
										<div class="media-body">
											<h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor accumsan rutrum.</h4>
											Fusce augue diam, vestibulum a mattis sit amet, vehicula eu ipsum. Vestibulum eu mi nec purus tempor consequat. Vestibulum porta non mi quis cursus. Fusce vulputate cursus magna, tincidunt sodales ipsum lobortis tincidunt. Mauris quis lorem ligula. Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-pane fade" id="purchase">
							<div class="height-sm" data-scrollbar="true">
								<table class="table">
									<thead>
										<tr>
											<th>Date</th>
											<th class="hidden-sm">Product</th>
											<th></th>
											<th>Amount</th>
											<th>User</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="../assets/img/product/product-1.png" alt=""  />
												</a>
											</td>
											<td class="text-nowrap">
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$349.00</td>
											<td class="text-nowrap"><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="../assets/img/product/product-2.png" alt="" />
												</a>
											</td>
											<td class="text-nowrap">
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$399.00</td>
											<td class="text-nowrap"><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="../assets/img/product/product-3.png" alt="" />
												</a>
											</td>
											<td class="text-nowrap">
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$499.00</td>
											<td class="text-nowrap"><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-sm">
												<a href="javascript:;">
													<img src="../assets/img/product/product-4.png" alt="" />
												</a>
											</td>
											<td class="text-nowrap">
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$230.00</td>
											<td class="text-nowrap"><a href="javascript:;">Derick Wong</a></td>
										</tr>
										<tr>
											<td>13/02/2013</td>
											<td class="hidden-tablet hidden-phone">
												<a href="javascript:;">
													<img src="../assets/img/product/product-5.png" alt="" />
												</a>
											</td>
											<td class="text-nowrap">
												<h6><a href="javascript:;">Nunc eleifend lorem eu velit eleifend, <br />eget faucibus nibh placerat.</a></h6>
											</td>
											<td>$500.00</td>
											<td class="text-nowrap"><a href="javascript:;">Derick Wong</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="email">
							<div class="height-sm" data-scrollbar="true">
								<ul class="media-list media-list-with-divider">
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-1.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></a>
											<p class="m-b-5">
												Aenean mollis arcu sed turpis accumsan dignissim. Etiam vel tortor at risus tristique convallis. Donec adipiscing euismod arcu id euismod. Suspendisse potenti. Aliquam lacinia sapien ac urna placerat, eu interdum mauris viverra.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-2.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Praesent et sem porta leo tempus tincidunt eleifend et arcu.</h4></a>
											<p class="m-b-5">
												Proin adipiscing dui nulla. Duis pharetra vel sem ac adipiscing. Vestibulum ut porta leo. Pellentesque orci neque, tempor ornare purus nec, fringilla venenatis elit. Duis at est non nisl dapibus lacinia.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-3.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Ut mi eros, varius nec mi vel, consectetur convallis diam.</h4></a>
											<p class="m-b-5">
												Ut mi eros, varius nec mi vel, consectetur convallis diam. Nullam eget hendrerit eros. Duis lacinia condimentum justo at ultrices. Phasellus sapien arcu, fringilla eu pulvinar id, mattis quis mauris.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-4.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<a href="javascript:;"><h4 class="media-heading">Aliquam nec dolor vel nisl dictum ullamcorper.</h4></a>
											<p class="m-b-5">
												Aliquam nec dolor vel nisl dictum ullamcorper. Duis vel magna enim. Aenean volutpat a dui vitae pulvinar. Nullam ligula mauris, dictum eu ullamcorper quis, lacinia nec mauris.
											</p>
											<i class="text-muted">Received on 04/16/2013, 12.39pm</i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end tabs -->
					
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-4">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Quick Post</h4>
						</div>
						<div class="panel-toolbar">
							<div class="btn-group m-r-5">
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-bold"></i></a>
								<a class="btn btn-white active" href="javascript:;"><i class="fa fa-italic"></i></a>
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-underline"></i></a>
							</div>
							<div class="btn-group">
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-left"></i></a>
								<a class="btn btn-white active" href="javascript:;"><i class="fa fa-align-center"></i></a>
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-right"></i></a>
								<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-justify"></i></a>
							</div>
						</div>
						<textarea class="form-control no-rounded-corner bg-silver" rows="14">Enter some comment.</textarea>
						<div class="panel-footer text-right">
							<a href="javascript:;" class="btn btn-white btn-sm">Cancel</a>
							<a href="javascript:;" class="btn btn-primary btn-sm m-l-5">Action</a>
						</div>
					</div>
					<!-- end panel -->
                    
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-5">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Message</h4>
						</div>
						<div class="panel-body">
							<div class="height-sm" data-scrollbar="true">
								<ul class="media-list media-list-with-divider media-messaging">
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-5.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">John Doe</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id nunc non eros fermentum vestibulum ut id felis. Nunc molestie libero eget urna aliquet, vitae laoreet felis ultricies. Fusce sit amet massa malesuada, tincidunt augue vitae, gravida felis.</p>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-6.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">Terry Ng</h5>
											<p>Sed in ante vel ipsum tristique euismod posuere eget nulla. Quisque ante sem, scelerisque iaculis interdum quis, eleifend id mi. Fusce congue leo nec mauris malesuada, id scelerisque sapien ultricies.</p>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-8.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">Fiona Log</h5>
											<p>Pellentesque dictum in tortor ac blandit. Nulla rutrum eu leo vulputate ornare. Nulla a semper mi, ac lacinia sapien. Sed volutpat ornare eros, vel semper sem sagittis in. Quisque risus ipsum, iaculis quis cursus eu, tristique sed nulla.</p>
										</div>
									</li>
									<li class="media media-sm">
										<a href="javascript:;" class="pull-left">
											<img src="../assets/img/user/user-7.jpg" alt="" class="media-object rounded-corner" />
										</a>
										<div class="media-body">
											<h5 class="media-heading">John Doe</h5>
											<p>Morbi molestie lorem quis accumsan elementum. Morbi condimentum nisl iaculis, laoreet risus sed, porta neque. Proin mi leo, dapibus at ligula a, aliquam consectetur metus.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="panel-footer">
							<form>
								<div class="input-group">
									<input type="text" class="form-control bg-silver" placeholder="Enter message" />
									<span class="input-group-append">
										<button class="btn btn-primary" type="button"><i class="fa fa-pencil-alt"></i></button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-lg-4">
					
					
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">DND Sessions</h4>
						</div>
						<div class="panel-body">
							<div class="height-sm" v-if="!timer_start_flag">
								<label class="col-form-label col-md-9">Session Name:</label>
								<div class="col-md-9 m-b-5">

									<input type="text" class="form-control" v-model="session_name"  />
									
								
								</div>
								<label class="col-form-label col-md-9">Session Minutes:</label>
								<div class="col-md-9 m-b-5">

									<input type="number" class="form-control m-b-5" v-model="session_mins" />
									<small class="f-s-12 text-grey-darker">Max time: 60 minutes. <i class="fas fa-question-circle"></i> </small>
								</div>
								<div class="col-md-9 m-b-5">
								<button  @click="setTimer" class="btn btn-primary">Start</button>
							</div>

							</div>
							<div class="height-sm" v-else>
								<label class="col-form-label col-md-9">Timer:@{{session_secs_mins}} mins (@{{session_secs}} seconds) to go</label>
								
								<div class="col-md-9 m-b-5">
									<button  @click="setTimer" class="btn btn-primary">Stop</button>
								</div>
								<div class="alert alert-danger fade show">
									<span class="close" data-dismiss="alert">×</span>
									<strong>Timer Started!</strong>
									Please do not close or refresh the tab  
									<!-- <a href="#" class="alert-link">an example link</a>.  -->
								</div>
							</div>
						</div>
					</div>
					<!-- end panel -->

					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-6">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Analytics Details</h4>
						</div>
						<div class="panel-body p-t-20">
							<div   class="height-sm" data-scrollbar="true">
							<table id="data-table-combine" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="1%"></th>
										<th width="1%" data-orderable="false"></th>
										<th class="text-nowrap">Rendering engine</th>
										<th class="text-nowrap">Browser</th>
										<th class="text-nowrap">Platform(s)</th>
										<th class="text-nowrap">Engine version</th>
										<th class="text-nowrap">CSS grade</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td width="1%" class="f-s-600 text-inverse">1</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>Internet Explorer 4.0</td>
										<td>Win 95+</td>
										<td>4</td>
										<td>X</td>
									</tr>
									<tr class="even gradeC">
										<td width="1%" class="f-s-600 text-inverse">2</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>Internet Explorer 5.0</td>
										<td>Win 95+</td>
										<td>5</td>
										<td>C</td>
									</tr>
									<tr class="odd gradeA">
										<td width="1%" class="f-s-600 text-inverse">3</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>Internet Explorer 5.5</td>
										<td>Win 95+</td>
										<td>5.5</td>
										<td>A</td>
									</tr>
									<tr class="even gradeA">
										<td width="1%" class="f-s-600 text-inverse">4</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>Internet Explorer 6</td>
										<td>Win 98+</td>
										<td>6</td>
										<td>A</td>
									</tr>
									<tr class="odd gradeA">
										<td width="1%" class="f-s-600 text-inverse">5</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>Internet Explorer 7</td>
										<td>Win XP SP2+</td>
										<td>7</td>
										<td>A</td>
									</tr>
									<tr class="even gradeA">
										<td width="1%" class="f-s-600 text-inverse">6</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
										<td>Trident</td>
										<td>AOL browser (AOL desktop)</td>
										<td>Win XP</td>
										<td>6</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">7</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Firefox 1.0</td>
										<td>Win 98+ / OSX.2+</td>
										<td>1.7</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">8</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Firefox 1.5</td>
										<td>Win 98+ / OSX.2+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">9</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Firefox 2.0</td>
										<td>Win 98+ / OSX.2+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">10</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Firefox 3.0</td>
										<td>Win 2k+ / OSX.3+</td>
										<td>1.9</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">11</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Camino 1.0</td>
										<td>OSX.2+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">12</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Camino 1.5</td>
										<td>OSX.3+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">13</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Netscape 7.2</td>
										<td>Win 95+ / Mac OS 8.6-9.2</td>
										<td>1.7</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">14</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Netscape Browser 8</td>
										<td>Win 98SE+</td>
										<td>1.7</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">15</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Netscape Navigator 9</td>
										<td>Win 98+ / OSX.2+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">16</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.0</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">17</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.1</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1.1</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">18</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.2</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1.2</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">19</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.3</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1.3</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">20</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.4</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1.4</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">21</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.5</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1.5</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">22</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.6</td>
										<td>Win 95+ / OSX.1+</td>
										<td>1.6</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">23</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.7</td>
										<td>Win 98+ / OSX.1+</td>
										<td>1.7</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">24</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Mozilla 1.8</td>
										<td>Win 98+ / OSX.1+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">25</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Seamonkey 1.1</td>
										<td>Win 98+ / OSX.2+</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">26</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
										<td>Gecko</td>
										<td>Epiphany 2.20</td>
										<td>Gnome</td>
										<td>1.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">27</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>Safari 1.2</td>
										<td>OSX.3</td>
										<td>125.5</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">28</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>Safari 1.3</td>
										<td>OSX.3</td>
										<td>312.8</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">29</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>Safari 2.0</td>
										<td>OSX.4+</td>
										<td>419.3</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">30</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>Safari 3.0</td>
										<td>OSX.4+</td>
										<td>522.1</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">31</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>OmniWeb 5.5</td>
										<td>OSX.4+</td>
										<td>420</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">32</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>iPod Touch / iPhone</td>
										<td>iPod</td>
										<td>420.1</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">33</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
										<td>Webkit</td>
										<td>S60</td>
										<td>S60</td>
										<td>413</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">34</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 7.0</td>
										<td>Win 95+ / OSX.1+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">35</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 7.5</td>
										<td>Win 95+ / OSX.2+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">36</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 8.0</td>
										<td>Win 95+ / OSX.2+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">37</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 8.5</td>
										<td>Win 95+ / OSX.2+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">38</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 9.0</td>
										<td>Win 95+ / OSX.3+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">39</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 9.2</td>
										<td>Win 88+ / OSX.3+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">40</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera 9.5</td>
										<td>Win 88+ / OSX.3+</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">41</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Opera for Wii</td>
										<td>Wii</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">42</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Nokia N800</td>
										<td>N800</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">43</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Presto</td>
										<td>Nintendo DS browser</td>
										<td>Nintendo DS</td>
										<td>8.5</td>
										<td>C/A<sup>1</sup></td>
									</tr>
									<tr class="gradeC">
										<td width="1%" class="f-s-600 text-inverse">44</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
										<td>KHTML</td>
										<td>Konqureror 3.1</td>
										<td>KDE 3.1</td>
										<td>3.1</td>
										<td>C</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">45</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
										<td>KHTML</td>
										<td>Konqureror 3.3</td>
										<td>KDE 3.3</td>
										<td>3.3</td>
										<td>A</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">46</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
										<td>KHTML</td>
										<td>Konqureror 3.5</td>
										<td>KDE 3.5</td>
										<td>3.5</td>
										<td>A</td>
									</tr>
									<tr class="gradeX">
										<td width="1%" class="f-s-600 text-inverse">47</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
										<td>Tasman</td>
										<td>Internet Explorer 4.5</td>
										<td>Mac OS 8-9</td>
										<td>-</td>
										<td>X</td>
									</tr>
									<tr class="gradeC">
										<td width="1%" class="f-s-600 text-inverse">48</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
										<td>Tasman</td>
										<td>Internet Explorer 5.1</td>
										<td>Mac OS 7.6-9</td>
										<td>1</td>
										<td>C</td>
									</tr>
									<tr class="gradeC">
										<td width="1%" class="f-s-600 text-inverse">49</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
										<td>Tasman</td>
										<td>Internet Explorer 5.2</td>
										<td>Mac OS 8-X</td>
										<td>1</td>
										<td>C</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">50</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>NetFront 3.1</td>
										<td>Embedded devices</td>
										<td>-</td>
										<td>C</td>
									</tr>
									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">51</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>NetFront 3.4</td>
										<td>Embedded devices</td>
										<td>-</td>
										<td>A</td>
									</tr>
									<tr class="gradeX">
										<td width="1%" class="f-s-600 text-inverse">52</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>Dillo 0.8</td>
										<td>Embedded devices</td>
										<td>-</td>
										<td>X</td>
									</tr>
									<tr class="gradeX">
										<td width="1%" class="f-s-600 text-inverse">53</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>Links</td>
										<td>Text only</td>
										<td>-</td>
										<td>X</td>
									</tr>
									<tr class="gradeX">
										<td width="1%" class="f-s-600 text-inverse">54</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>Lynx</td>
										<td>Text only</td>
										<td>-</td>
										<td>X</td>
									</tr>
									<tr class="gradeC">
										<td width="1%" class="f-s-600 text-inverse">55</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>IE Mobile</td>
										<td>Windows Mobile 6</td>
										<td>-</td>
										<td>C</td>
									</tr>
									<tr class="gradeC">
										<td width="1%" class="f-s-600 text-inverse">57</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
										<td>Misc</td>
										<td>PSP browser</td>
										<td>PSP</td>
										<td>-</td>
										<td>C</td>
									</tr>
									<tr class="gradeU">
										<td width="1%" class="f-s-600 text-inverse">58</td>
										<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
										<td>Other browsers</td>
										<td>All others</td>
										<td>-</td>
										<td>-</td>
										<td>U</td>
									</tr>
								</tbody>
							</table>
						</div>
							
						</div>
					</div>
					<!-- end panel -->
					
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Time spent (Productive vs Unproductive)</h4>
						</div>
						<div class="panel-body">
							<div id="donut-chart" class="height-sm"></div>
						</div>
					</div>
					<!-- end panel -->
					
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-8">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Todo List</h4>
						</div>
						<div class="panel-body p-0">
							<ul class="todolist">
								<li class="active">
									<a href="javascript:;" class="todolist-container active" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Donec vehicula pretium nisl, id lacinia nisl tincidunt id.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Duis a ullamcorper massa.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Phasellus bibendum, odio nec vestibulum ullamcorper.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Duis pharetra mi sit amet dictum congue.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Duis pharetra mi sit amet dictum congue.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Phasellus bibendum, odio nec vestibulum ullamcorper.</div>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="todolist-container active" data-click="todolist">
										<div class="todolist-input"><i class="fa fa-square"></i></div>
										<div class="todolist-title">Donec vehicula pretium nisl, id lacinia nisl tincidunt id.</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end panel -->
					
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-9">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">World Visitors</h4>
						</div>
						<div class="panel-body p-0">
							<div id="world-map" class="height-sm width-full"></div>
						</div>
					</div>
					<!-- end panel -->
					
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="index-10">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Calendar</h4>
						</div>
						<div class="panel-body">
							<div id="datepicker-inline" class="datepicker-full-width overflow-y-scroll position-relative"><div></div></div>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-4 -->
			</div>

			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>

	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->

	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
	<script src="../assets/js/demo/table-manage-combine.demo.min.js"></script>

	<!-- <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script> -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/demo/dashboard.min.js"></script>


	
	<!-- ================== END PAGE LEVEL JS ================== -->


	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
			TableManageCombine.init();
		});
	</script>

	 <!--Load the AJAX API-->
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
    <script>
    var global_chart_data='';
    var email_address = $('meta[name="email-address"]').attr('content');
    heap.identify(email_address);
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    //var url='http://127.0.0.1/';	
    var vm = new Vue({
		el:'#app',

		mounted(){
          
           

           this.getCardStats();

           this.LoadMainChart();
           this.getSessions();
           setInterval(function () {
      this.getCardStats();
      this.LoadMainChart();
    }.bind(this), 10000); 
           //this.interval = setInterval(() => this.getCardStats(), 3000);
          // this.populateCategories();
          

  //       ready: function () {
  //   this.getCardStats();
},
    
  // }
		methods: {

			sessionStop:function()
			{
				this.session_end_time=new Date();
              	//var  time_zone = session_end_time.getTimezoneOffset();
              	this.session_end_time = this.session_end_time.getFullYear() + "-" + (this.session_end_time.getMonth() + 1) + "-" + this.session_end_time.getDate() + " " +  this.session_end_time.getHours() + ":" + this.session_end_time.getMinutes() + ":" + this.session_end_time.getSeconds();
              	this.$http.post(this.access_url+'sessions',{

              		session_end_date_time:this.session_end_time,
              		session_name:this.session_name,
              		session_status:0,
              		session_id:this.session_id,
              		_token: this.token




              	}).then(function(response){
              		if(response.status == "200")
              		{
              			document.title = "ulytics";
              			console.log(response.body);    


              		} 
              		else
              		{
              			console.log("Bad");
              		} 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



				});
              	this.timer_start_flag=false;
              	this.session_mins=0;
              	this.session_secs=0;
              	clearInterval(this.refreshId);
			},
			sessionStart:function()
			{
				  	//send start time to server
              	//send end time to server
              	this.session_start_time=new Date();
              	var  time_zone = this.session_start_time.getTimezoneOffset();
              	this.session_start_time = this.session_start_time.getFullYear() + "-" + (this.session_start_time.getMonth() + 1) + "-" + this.session_start_time.getDate() + " " +  this.session_start_time.getHours() + ":" + this.session_start_time.getMinutes() + ":" + this.session_start_time.getSeconds();
              	

              	this.$http.post(this.access_url+'sessions',{

              		session_start_date_time:this.session_start_time,
              		session_status:1,
              		session_name:this.session_name,
              		session_total_time:this.session_mins,
              		_token: this.token




              	}).then(function(response){
              		if(response.status == "200")
              		{

              			this.session_id=response.body['data'];    


              		} 
              		else
              		{
              			console.log("Bad");
              		} 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



				});
              	this.timer_start_flag=true; 
              	this.session_secs=this.session_mins*60;
              	
              	this.refreshId=setInterval(function () {
              		this.setSession();
              		if (this.session_secs == 0)
              		{
              	//send end time to server
              	clearInterval(this.refreshId);
              	alert("Every sessions gets you closer to your goal!");
              	this.sessionStop();
              	document.title = "ulytics";
              	this.timer_start_flag=false;
              }
          }.bind(this), 1000);
              },
			setTimer:function()
			{
              //alert("cool");
              if (this.session_mins > 60)
              {
              	alert("Max time allowed per session is 60 minutes");
              	exit;
              }
              if (this.session_mins < 5)
              {
              	alert("Minimum session duration is 5 minutes");
              	exit;
              }
              if (this.timer_start_flag==true)
              {
              	
              		this.sessionStop();
              		
              }
              else
              {
            		//session start
            		this.sessionStart();
              }
          },
          setSession:function()
          {
              
              this.session_secs=this.session_secs-1;
              //document.title = this.session_secs;
              this.session_secs_mins=(this.session_secs/60).toFixed(1);

              document.title = this.session_secs_mins+" mins|"+this.session_name;
              
          },
          setView:function(val)
          {
              
              this.view_flag=val;
              //alert(this.view_flag);
              //this.session_secs_mins=(this.session_secs/60).toFixed(1);

              
          },
          getCardStats:function() {
            //this.loading = true;
            this.$http.get(this.access_url+'cardstats').then(function(response){
            	if(response.status == "200")
            	{

            		this.data_card=response.body;

                //console.log(this.data_card['total_time_during_day']['value']);   


            } 
            else
            {
            	console.log(response);
            } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



}.bind(this), function(response) {
	alert(response);
});
        },
        	getSessions:function() {
            //this.loading = true;
            this.todays_date=new Date;
            this.todays_date = this.todays_date.getFullYear() + "-" + (this.todays_date.getMonth() + 1) + "-" + this.todays_date.getDate();
            this.$http.get(this.access_url+'getsessions',{params:  {date_select:this.todays_date}
            	

            }).then(function(response){
            	if(response.status == "200")
            	{

            		this.date_sessions=response.body;
            		console.log(date_sessions);
                //console.log(this.data_card['total_time_during_day']['value']);   


            } 
            else
            {
            	console.log(response);
            } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



}.bind(this), function(response) {
	//alert("Something went wrong");
});
        },
			LoadMainChart:function()
			{
              //alert("cool");
              this.analytics_type=1;
              this.$http.get(this.access_url+'chartsdata',{params:  {analytics_type:this.analytics_type}
            	

            }).then(function(response){
              if(response.status == "200")
              {

                this.chart_data=response.body;
                global_chart_data = this.chart_data;
                 


              } 
              else
              {
                console.log(response);
              } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



}.bind(this), function(response) {
  //alert(response);
});


              google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      		 google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
              function drawChart() {


        // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable(global_chart_data);

            


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
                       title: 'Time (in minutes)',
                       backgroundColor: { fill:'transparent' },
                       hAxis: {
    textStyle:{color: '#348FE2'}
},
colors: ['#00ACAC', '#348FE2', '#ec8f6e', '#f3b49f', '#f6c7b6'],
vAxis: {
    textStyle:{color: '#ec8f6e'}
},

             
                   		};

        // Instantiate and draw our chart, passing in some options.

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
          },
		},
		

		data: {
            data_card:'',
            chart_data:'',
            session_mins:0,
            session_secs:0,
            session_secs_mins:0,
            session_name:'',
            timer_start_flag:false,
            timer_id:'',
            refreshId:'',
            token:csrf_token,
            access_url: 'https://www.ulytics.live/',
            session_start_time:'',
            session_end_time:'',
            session_id:'',
            todays_date:'',
            date_sessions:'',
            analytics_type:'',
            view_flag:1

        }


	});
	</script>
    

	<!-- charts ends here-->


</body>
</html>
