<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets_search/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets_search/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets_search/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets_search/ico/favicon.png">
    <title>Impact Search</title>
    <!-- Bootstrap core CSS -->
    <link href="assets_search/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
    <!-- Custom styles for this template -->
    <link href="assets_search/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" /> -->
    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets_search/js/pace.min.js"></script>
</head>

<body>




<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
           
        </div>
    </div>
    <!--/.navbar-top-->

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span
                    class="icon-bar"> </span> <span class="icon-bar"> </span></button>
            
            <a class="navbar-brand " href="index.html"> <img src="images/logo.png" alt="Impact search"> </a>

            
        </div>

       
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                
             
            </ul>
            </ul>

            <!--- this part will be hidden for mobile version -->
            <div class="nav navbar-nav navbar-right hidden-xs">
                
                <!--/.cartMenu-->

                
                <!--/.search-box -->
            </div>
            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    

</div>
<!-- /.Fixed navbar  -->
<div class="container main-container headerOffset">

   
<div id="app">
	
    <!-- Main component call to action -->
	
    <div class="row">
      <div>
        
</div>
       <!-- SEARCH -->
					<form method="get" action="/searchorg"    v-on:submit.prevent="" class="clearfix alert alert-default b-0 search-big m-0">
						<div class="input-group">

							<div class="input-group-btn">
								<button type="button" class="btn btn-default form-control-lg dropdown-toggle br-0" data-toggle="dropdown">
									Projects
									<span class="caret"></span>
								</button>
								
								<ul class="dropdown-menu">
									<!-- 
<li class="dropdown-item active">
										
									</li>
 -->
<!-- 									<li class="divider"></li> -->
									<li class="dropdown-item">
										<a href="j#">Beneficiaries</a>
									</li>
									<li class="dropdown-item">
										<a href="j#">Metric Sets</a>
									</li>
									<li class="dropdown-item">
										<a href="j#">Metrics</a>
									</li>
									<li class="dropdown-item">
										<a href="#">Results</a>
									</li>

								</ul>
							</div>

<!-- 							<input name="org-name" id="search-input" class="form-control form-control-lg" type="text" placeholder="Search projects"/> -->
							
							<input  type="text"  v-on:keyup="getsearchresult" debounce="10000" v-model="txtInput" name="org-name" class="form-control form-control-lg" placeholder="Search unicorns..." />
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default form-control-lg bl-0">
									<i class="fa fa-search fa-lg p-0"></i>
								</button>
							
							</div>
						</div>

						<!-- 
<small class="m-0 text-muted fs-11"> 
							about 34 results <span class="text-success">(0.45 seconds)</span>
						</small>
 -->

					</form>
					<!-- /SEARCH -->
    </div>
    <!-- /.row  -->
   
	
    <div class="row">

        <!--left column-->
        
        <div  class="col-lg-3 col-md-3 col-sm-12">
        
        	<a  data-toggle="modal" href="#myModal16" >
          		Dynamic Filters<span class="glyphicon glyphicon-filter"></span>
        	</a>
        	<div class="modal" id="myModal16" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Dynamic Filters</h4>
        </div>
        <div v-for="key in filtersSet" class="modal-body">
          	<div   class="panel panel-default">
             		<!-- @{{key}} -->
             			
                    <div  class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse"  v-bind:href="key['metrics_set_id']"
                                                   class="collapseWill active ">
                          @{{key['metrics_set_name']}}  	 <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    
                    <div  v-bind:id="key['metrics_set_id']"   class="panel-collapse collapse in">
                        <div class="panel-body smoothscroll">
                        <!-- <form action="" method="post">	 -->
                            <div  v-for="(data1,point) in key['filters']" class="block-element">
                                <label>
                                    <input   v-on:change="dynamicFilterCheck"  v-bind:id="'efdata1'+'-'+key['metrics_set_id']"  v-model="checkBox" v-bind:value="data1+'-'+key['metrics_set_id']" type="checkbox" v-bind:checked="checkedState"  name=""/>
                                   @{{data1}} </label>
                            </div>
                           
                            
                         <!-- </form>    -->
                        </div>
                    </div>
                    
        </div>
        
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
    <div v-for="metr in data['Projects']" class="panel-group" id="accordionNo">
           <!--Filter checkbox component begins--> 
            
               
							
          <div v-if="buttonClickedState" class="side-nav mb-60">      
				<div  v-for="(value,key) in metr['facets']">
                <div   class="panel panel-default">
             		
             			
                    <div class="panel-heading">
                        <h4 class="panel-title"><a data-toggle="collapse"  v-bind:href="'#'+key"
                                                   class="collapseWill active ">
                            @{{key|camelcase}}	 <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                    </div>
                    
                    <div v-bind:id="key"   class="panel-collapse collapse in">
                        <div class="panel-body smoothscroll ">
                            <div v-for="(data,point) in value" class="block-element">
                                <label>
                                    <input  v-on:change="refineBasedOnFilter" v-model="checkBox" v-bind:checked="checkedState" v-bind:id="point" v-bind:value="key+':'+point" type="checkbox" name="tour"/>
                                    @{{point}} (@{{data}}) </label>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                </div>
              </div>
                <!--/brand panel end-->

           <br>
    
   <span>Checked names: @{{ checkBox }}</span>
            <!--filter check box component ends-->
           
            
            </div>
        
        </div>
		
        <!--right column-->
        <div class="col-lg-9 col-md-9 col-sm-12">
        	
        	<ul id="v-for-object" class="demo">
					
					
				
  					<h2  v-for="msg in data['Projects']">Project Name : @{{ msg.ProjectName }}</h2>
  					<!-- <div v-for="metr in data['Projects']"> -->
  					<!-- <div v-for="met in metr['MetricSetInfo']"><h3>Metric Set Name : @{{ met.MetricSetName }}</h3> -->

    <tabs>          
			<!--Graph start-->
			<tab name="Charts" :selected="true">
				<div class="chart-container" style="position: relative; height:40vh; width:40vw">
              <graph></graph>
        </div>
			<!--Graph stop-->
      </tab>
      <tab name="Data">
           <!--right column-->
        <div class="col-lg-9 col-md-9 col-sm-12">
          
          <ul id="v-for-object" class="demo">
          
          
        
            <!-- <h2  v-for="msg in data['Projects']">Project Name : @{{ msg.ProjectName }}</h2> -->
            <div v-for="metr in data['Projects']">
            <div v-for="met in metr['MetricSetInfo']"><h3>Metric Set Name : @{{ met.MetricSetName }}</h3>
<!--            <div v-for="met in metr['MetricSetInfo']"><h3>Metric Set Name : @{{ metr['facets'] }}</h3>   -->
            
        
<!--              <li > -->

            <div style="overflow-x:auto;">
      
              <table class="table table-responsive table-striped table-bordered table-hover" v-on:keyup="" id="sample_1">
              
              <template id="ProjectData">
                 <thead>
                  <tr>
                    
                    <th v-for="(data,pointer) in met['Fields'][0]">@{{pointer}}</th>
                    <!-- 
<th> Field_label</th>
                    <th> Sector of Focus</th>
                    <th> Subsector of Focus</th>
                    <th> Field display label</th>
                    <th> Data Source</th>
                    <th> Related metrics</th>
                    <th> Sample answer</th>
                    <th> Status</th>
                    <th> Reporting Format option value</th>
                    <th> Metric set formula type id</th>
                    <th> Polarity</th>
 -->
                  </tr>
                 </thead>
                
                 <tbody>
<!--                    <div v-for="metrics in data['Projects']"> -->
                <tr v-for="(value,key) in met['Fields']">
<!--                      @{{data['Fields']}} -->
              
                    
                  <td  v-for="(data,pointer) in value">
                      @{{data}}
                  </td>
                  
                  
 
                  
                  
                
                
                  </tr>
<!--                    </div> -->
                 </tbody>
<!--                </template>  -->
              </template>
              
              
              <counter></counter>
              
              </table>
              
               </div>
              
      </div>
      </div>
                
<!--                @{{key}} -->
                
<!--              </li> -->
          </ul>
        
        
        </div>
      </tab>
		</tabs>				
						<!-- <tabs></tabs> -->
      
  
						
			<!-- </div> -->
			<!-- </div> -->
    						
<!--     						@{{key}} -->
    						
<!--   						</li> -->
					</ul>
        
        
        </div>
        <!--/right column end-->
    </div>
   


    <!-- /.row  -->





</div>
<!-- div app ends here-->
  <template id="tabscd">
  <div>
    <div>
      <ul class="nav nav-tabs">
        
        <li v-for="tab in tabs" :class="{ 'active':tab.isActive}">
          <a data-toggle="tab" href="#menu1" @click="selectTab(tab)" >@{{tab.name}}</a>
        </li>
        <!-- <li><a data-toggle="tab" href="#menu2">Data</a></li> -->

      </ul>
    </div>
    <div class="tab-content">
      <slot></slot>

    </div>
  </div>
</template>
<template id="tabcontent">
  <div v-show="isActive" class="tab-content">
      <div><slot></slot></div>

    </div>
  </template>

</div>
<!-- /main container -->

<div class="gap"></div>

<!-- Product Details Modal  -->
<div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
     aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<footer>
   
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; SoPact 2018. All right reserved. </p>

           
        </div>
    </div>
</footer>

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.5"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
<!-- Add this after vue.js -->
<script src="https://unpkg.com/babel-polyfill@6.26.0/dist/polyfill.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@2.0.0-rc.2/dist/bootstrap-vue.js"></script>
<script src="assets/js/vue-filter.min.js"></script>
<script src="https://unpkg.com/lodash@4.16.0"></script>
<!-- <script src="js/main.js"></script> -->

 <!-- PAGE LEVEL SCRIPTS -->


<script>

	var c = null;
	
  Vue.component('tabs', {

      template:'#tabscd',

      data() {
        return {tabs: []}
      },
      created(){
        this.tabs = this.$children;
      },

      methods: {

          selectTab(selectedTab){
            
            this.tabs.forEach(tab => {
              tab.isActive = (tab.name == selectedTab.name );
            });
          }

      }
    }); 
    Vue.component('tab',{
      template:'#tabcontent',
      props: {
        name : {required: true},
        selected: {default: false}
      },
      data(){
        return {
          isActive: false 
        }
        

      },
      mounted(){
        this.isActive= this.selected;
      }

    });

	Vue.component('graph', {
	
		template:'<canvas id="graph" ></canvas>'
						
		
	
	});	


	var vm = new Vue({
		el:'#app',
	
	
	
	methods: {

		dynamicFilterCheck: function(e)
		{
			var result="";
				console.log(e.target.id);
				
           				 var metricsSetId= e.target.id;
            // ref.getDOMNode().value doesnt work here 
        		
				//console.log(this.$refs);
				this.$http.get('http://127.0.0.1:8000/setsettings?filter='+this.checkBox+'&metricsid='+metricsSetId).then(function(response){
    			if(response.status == "200")
    			{
    				
//      				this.$http.get('http://127.0.0.1:8000/searchorg?org-name='+this.txtInput+'&org_id=0').then(function(response){
//             if(response.status == "200")
//             {
//               this.data = response.body;
//               console.log("Greta");
    
    
//             } 
//           else
//           {
//               this.data = 'There is nothing for that project';
//           } 
//       // console.log("Yes its here " +this.checkBox);
// //      console.log("Yes its here " +this.key);
      
    
    
//               });
		
		
				}	
				else
				{
					this.data = 'There is nothing for that project';
				}	
			// console.log("Yes its here " +this.checkBox);
// 			console.log("Yes its here " +this.key);
			
		
		
		});
		
		
	
		
	},
	
		getsearchresult: _.debounce(function(event) {
		
			// this.$http.get('http://127.0.0.1:8000/searchorg?org-name=s', function(data, status, request){
// 				console.log(data);
// 			});


if (this.txtInput){

this.$http.get('http://127.0.0.1:8000/searchorg?org-name='+this.txtInput+'&org_id=0').then(function(response){
    if(response.status == "200"){
     this.data = response.body;
     	var proj = this.data['Projects'];
     	for (var key in proj) {
  			if (proj.hasOwnProperty(key)) {
    				var val = proj[key];
    				for (var pointer in val) {
    					if (val.hasOwnProperty(pointer)) {
    						var data =  val[pointer];
    						for (var projid in data) {
    							if (data.hasOwnProperty(projid)) {
    							var project_id = data[projid];
    							if (project_id['project_id']) {

    								this.$http.get('http://127.0.0.1:8000/getsettingsalgolia/'+project_id['project_id']).then(function(response){
    								//this.$http.get('http://127.0.0.1:8000/getsettings/22').then(function(response){	
    										if(response.status == "200"){
    												vm.filtersSet=response.body;
    												//console.log(response);

    										}
    										else
    										{
    											console.log("Not working");
    										}

    								})
    								
    							}
    							
    							}
    						}
    						
    					}		
    				}
    				
  					}
				}
        //console.log(proj['MetricSetInfo']);
        vm.orgName =this.txtInput; 
        vm.checkBox=[];
     // use self instead of this
    }


	
  })
	}	
	else
	{
		this.data = 'There is nothing for that project';
	}	
			
        		
      
			
		}, 1500),
		
		refineBasedOnFilter: function()
		{
			var result="";

			//var c = new Chart();
			if (this.checkBox){
			this.$http.get('http://127.0.0.1:8000/producecharts?org-name='+vm.orgName+'&filter='+this.checkBox).then(function(response){
    		if(response.status == "200"){
    				//c.destroy();
     				this.data = response.body;
     				
						var obj = this.data;

						


  result=obj.Projects[0].charts;
						//$('#graph').remove();	
							
							
								
						
					
     if(result)		{		
     				
					var data =result;
						
     				
     				var context = document.querySelector('#graph').getContext('2d');
     					if (c != null)
     					{
     						c.destroy();
     						c = new Chart(context,{type:'horizontalBar',data,options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }});//horizontalBar

     					}	
						else
						{
							c = new Chart(context,{type:'horizontalBar',data,options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }});
						}
					
					}
					else
					{
						var result = '';
						//var context = document.querySelector('#graph').getContext('2d');

						//new Chart(context,{type:'doughnut',data});
					}
//         			console.log(+this.checkBox);
     // use self instead of this
    	}


	
  	})
		
		
		
		
		}	
		else
		{
			this.data = 'There is nothing for that project';
		}	
			// console.log("Yes its here " +this.checkBox);
// 			console.log("Yes its here " +this.key);
			
		
		}
		
		
		
	
		
	},
	
	data: {
	
		data: '',
		txtInput: '',
		checkBox:[],
		fieldId:'',
		key:'',
		orgName:'',
		checkedState:false,
    buttonClickedState:true,
		filtersSet:'',
		url:''
	
	},
	
	});
	
	


		



</script>


	<!-- PAGE LEVEL SCRIPTS -->
		
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets_search/bootstrap/js/bootstrap.min.js"></script>
<!-- include  parallax plugin -->
<script type="text/javascript" src="assets_search/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="assets_search/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="assets_search/js/jquery.mCustomScrollbar.js"></script>

<!-- include checkRadio plugin //Custom check & Radio  -->
<script type="text/javascript" src="http://fronteed.com/iCheck/icheck.js?v=1.0.1"></script>

<!-- include grid.js // for equal Div height  -->
<script src="assets_search/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets_search/js/owl.carousel.min.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets_search/js/bootstrap.touchspin.js"></script>

<!-- 
include custom script for site <script src="assets_search/js/script.js"></script>
 -->

</body>
</html>
