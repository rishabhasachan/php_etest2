<?php
	include 'header.php';
?>

	
	


<div class="container" style="margin-top:60px;">
<?php
			$url2="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

		if(strpos($url2,'error=emptylogin')!==false){
			echo "FILL OUT username and password or REGISTER YOURSELF<br/>";
		}
		if(isset($_SESSION['id'])){
					echo "You are logged in as user-id:: ";
					echo  $_SESSION['id']; 
					
					
				}  
				else{
					echo "you are not logged in!";
					
				}
	?>
<?php
	include 'face.php';
?>

		 <hr />
		<div class="row">
			<div class="col-sm-12">
		
				<div class="well" style="text-align:center;"><h4><b id="b">Welcome to my website where you can take a test and examin your self.</b></h4></div>
		
			</div>
		</div>
								 <div >
									<marquee onmouseover="this.stop()" onmouseout="this.start()">
										  
										<p>
										<b>
										<em>
											Registration for online exams are free of cost, start test <a href="#">now </a>.
										</em>
										</b>
										</p>
										 
									</marquee> 
								</div> 
		<hr />
	<div class="row" >
		<div class="col-sm-8" >		
		<p style=" font-size:20px;font-family:arial; color:#000055; "> 
			<b>Online test</b> is an plateform for students to take varbal and aptitude tests online. 
			It provieds mock test for campus placements as well as other exam. Using Online test, you can 
			take any test anu number of times and see your performance metrices, Preparing for Campus Placement
			or any other examination, online test provides you a number of mock tests to <b>Engage, Analyze </b>
			your performance and <b>Improve</b> your skills!
		</p>		
	<br><br>	
	<div class="panel panel-success">					
					<div class="panel-body bg-success">					
					<a  href="signup.php"><img src="i/t.jpg" class="img-responsive img-thumbnail"></a>
				   </div>
	</div>
											 
		<hr />					
		</div>

		<!--NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS-->
			<div class="col-sm-4" style="text-align:justify">
				<div class="panel panel-primary">
					<div class="panel-heading">
					Latest News
					</div>
					<div class="panel-body">
						   <p>Aptitute test will be available soon</p>
					</div>
						<div class="panel-body">
						   <p>Aptitute test will be available soonAptitute test will be available soon</p>
					</div>
						<div class="panel-body">
						   <p>Aptitute test will be available soon</p>
					</div>		
				<hr>
				<div class="panel-body" >	  
				<div style="float:left;">
				      <marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()" >
				      
						<p>the site is designed by Rishabha Sachan</p>	
						<p>the site is designed by Rishabha Sachan</p>
						<p>the site is designed by Rishabha Sachan</p>
						<p>the site is designed by Rishabha Sachan</p>
						<p>the site is designed by Rishabha Sachan</p>  
						  
				     </marquee>
             	</div>
				</div>
			</div>
			</div>
<!--NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS-->

		
	</div>			
<hr>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

	<div class="row bg-danger">
			<div class="col-sm-8" style="text-align:justify">
			<div class="panel panel-primary">
					<div class="panel-heading">
					Rishabha 
					</div>
					<div class="panel-body bg-success">
				<p style=" font-size:20px;font-family:arial; color:#000055; ">
				<img src="i/3.png" class="img-responsive img-thumbnail"  width="300" align="left" vspace="2" hspace="2"/>
				This website is designed to improove the performence in college for B.tech student facing problems regarding 
				availability of study materials and old exam papers. We also provide online free test facolity so that students can test them selfs and 
				can inproove with the help of study material and old exam papers. This website gonna help 
				to collect old papers as well as student can also get imoprtent 
				Lecture vedios link that will help them to study online better.
				</p>
				</div>
			</div>
			</div>
			
			<div class="col-sm-4" style="text-align:justify">
			<div class="panel panel-success">				
					<div class="panel-body bg-success">			
					<a  href="signup.php"><img src="i/t.jpg" class="img-responsive img-thumbnail"  vspace="2"/></a>
					</div>
					<video width="356" height="300" controls>
						<source src="i/v1.mp4" type="video/mp4"/>
					<video>
			</div>

			

			<audio>
				<source src="" type="audio/mp3"/>
			</audio>
			</div>
		


	</div>
	</div>
	<!--here container ends-->
<?php
	include 'footer.php';
?>