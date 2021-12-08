<!DOCTYPE Html>
<html>
<head>
<meta charset="utf-8" />
<title>Course Css3</title>
<link rel="stylesheet" href="{{URL::asset('css/swiper.min.css')}}">
<link rel="stylesheet"	href="{{URL::asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/normalize.css')}}">	
<link rel="stylesheet" href="{{URL::asset('css/New1.css')}}">	
	
</head>
<body>
	
		<!-- strat navbar-->

	<div class="navbar">
	
       <div class="container">
		
		   <div class="brand">
		    <h2>Classic</h2>
		
		 </div>
	        <ul class="links"> 
			 <li class="active"><a href="#">Home</a></li>
			 <li><a href="#" data-value="ser">About</a></li>
		   	 <li><a href="#" data-value="test">Testimonials</a></li>	
			 <li><a href="#" data-value="port">Portifolio</a></li>
			 <li><a href="#" data-value="fot">Footer</a></li>
		  </ul>
		
 		      <div class="clear"></div>
		
		  </div>
	
	</div>

	
	<!-- end navbar-->
	
    	<!-- start header-->
	
	  <div class="header">
	    
        <div class="overlay">
        
      <!--start slider-->  
                  
    <div class="swiper-container">
         <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <ul>
                  <li>
                  <h2>Welcome To <span>Classic</span></h2>	
                  <p>This Is Paragraph Number One</p>	
                  </li> 
                  </ul> 
               </div>
               <div class="swiper-slide">
                  <ul>
                  <li>
                  <h2>Welcome To <span>Classic</span></h2>	
                  <p>This Is Paragraph Number Two</p>	
                  </li> 
                  </ul> 
             
               </div>
               <div class="swiper-slide">
                  <ul>
                  <li>
                  <h2>Welcome To <span>Classic</span></h2>	
                  <p>This Is Paragraph Number Three</p>	
                  </li> 
                  </ul> 			   
               </div>
               <div class="swiper-slide">
                  <ul>
                  <li>
                  <h2>Welcome To <span>Classic</span></h2>	
                  <p>This Is Paragraph Number Four</p>	
                  </li> 
                  </ul> 			   
               </div>
               <div class="swiper-slide">
                  <ul>
                  <li>
                  <h2>Welcome To <span>Classic</span></h2>	
                  <p>This Is Paragraph Number Four</p>	
                  </li> 
                  </ul> 
               </div>		
         </div>
     <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
    </div>  
  <!--start slider-->	  
        
        </div>
   </div>
  <!-- end header-->
@yield('content')


	

	
	<!--  Start Footr -->
	
	<div id="fot" class="footer">
	
		<div class="container">
		
			<div class="col">
				<h2>About Classic</h2>
				<p>Hello This WebSite Is So Butifull Becuase I Love The Design At Home Page For Website Thanks To Persson Worked Its,Hello This WebSite Is So </p>
				<i class="fa fa-facebook fa-lg fa-fw"></i>
				<i class="fa fa-twitter fa-lg fa-fw"></i>
				<i class="fa fa-google-plus fa-lg fa-fw"></i>
				<i class="fa fa-youtube fa-lg fa-fw"></i>
			</div>
			<div class="col tags">
				<h2>Tags</h2>
				<span>Html</span>
				<span>Css</span>
				<span>Photoshop</span>
				<span>Responsive</span>
				<span>Art</span>
			</div>
			<div class="col resent">
				<h2>Resent Posts</h2>
				<div>
					<img src="images/icon.png" width="100" height="80" alt="" />
					<h4>How To Get Ride</h4>
					<span>October, 2019</span>
				</div>
				<div>
					<img src="images/icon.png" width="100" height="80" alt="" />
					<h4>Why Iam Runing</h4>
					<span>October, 2019</span>
				</div>
				<div>
					<img src="images/icon.png" width="100" height="80" alt="" />
					<h4>Cassela Waste</h4>
					<span>October, 2019</span>
				</div>				
			</div>
			<div class="col blog">
				<h2>Blog Categories</h2>
				<ul>
				
					<li>Agency</li>
					<li>Buisness</li>
					<li>Multi Purpose</li>
					<li>Audio</li>
					
				</ul>
			</div>
			<div class="clear"></div>
			<div class="copyright">Copyright &copy; Template Using By Html/Css/js/jQuery</div>
		</div>
		
	</div>
	
	<!--  End Footr -->
	
<script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.nicescroll.min.js')}}"></script>	
<script src="{{URL::asset('js/swiper.min.js')}}"></script>
<script src="{{URL::asset('js/new.js')}}"></script>
</body>
	
</html>