<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Monopoly go money & rolls adder</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/04fd5ece3f.js"></script>

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		


		
		
	</head>
	<body>




		<div class="wrapppp">
   

		<video autoplay muted loop id="video-bg">
            <source src="img/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>



		<div class="monop-wrap-page col-lg-12 center-block">
		
				<div class="page-title-wrap">
				<div class="page-title center-block text-center error-title" style="padding-top: 15px;">
					<img src="img/logo.png" style="height: 104px; margin-top: 30px; border-radius: 5px; margin-bottom: 37px;">
					
						
				</div>
			</div>

		<div class="backgroundd">
		<img src="img/menu.png" style="height: 70px;" class="img-responsive">	
		

			<div class="page-content text-center">
				

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in monopapp-wrap" id="monopapptool">
						<div class="monopapp-connect" >
								<div class="col-lg-12 wrappp" >	
									<h4>You can use Money/Rollss adder only once!</h4>
									<p>Enter your Monopoly go username (xxxxxx) and slide the button</p>
								</div>
								<div class="input">
									<input type="text" id="username_rev"  placeholder="xxxxxxxx" style="text-align: left;">
								</div>
								<div class="loading" style="display: none;">
									<p class="connect-text">Connecting...</p>
									<div class="spinner">
									  <div class="double-bounce1"></div>
									  <div class="double-bounce2"></div>
									</div>
								</div>
								<div class="col-lg-12 connect-btn-wrap" style="z-index: 10;">
								<label class="switch" id="connect">
								  <input type="checkbox" id="checkk">
								  <span class="slider round"></span>
								</label>
								 <p style="font-weight: 600;">Click to connect</p>
								</div>

								<div class="col-lg-12 connecting " style="display: none;">
									<p>Connected</p>
								</div>
						</div>


							

						<div class="want" style="opacity: 0.5">	
						<div class="col-sm-12 want-tosee center-block text-center" style="padding-right: 0px; padding-left: 0px;">
								<div class="col-lg-12 wrappp" >	
									<h4>Add Money</h4>
									<p>Select the Monopoly Money pack</p>
								</div>
							<div class="monop-list center-block col-lg-12">		
								<ul>
									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 selected">
										<a href="#">
											
													<img src="img/11.png" style="height:154px;" />
											
											
											
											
											

											
											
										</a>
									</li>


									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="#">
											
													<img src="img/22.png" style="height:154px;" />
											
											

											
											
										</a>
									</li>

									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="#">
											
													<img src="img/33.png" style="height:154px;" />
											
											
											

											
											
										</a>
									</li>

									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="#">
											
													<img src="img/44.png" style="height:154px;" />
											
											
											

											
											
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class=" monopapp-btn-wrap ">
							<a href="#" class="monopapp">Add Money</a>
						</div>

						</div>




						<div class="rollss" style="display: none;">
							<div class="">	
						<div class="col-sm-12 want-tosee center-block text-center" style="padding-right: 0px; padding-left: 0px;">
								<div class="col-lg-12 wrappp" >	
									<h4>Add Rolls</h4>
									<p>Select the Monopoly Rolls pack</p>
								</div>
							<div class="monop-list center-block col-lg-12">		
								<ul>
									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 selected">
										<a href="#">
											
													<img src="img/1.png" style="height:154px;" />
											
											
											
											
											

											
											
										</a>
									</li>


									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="#">
											
													<img src="img/2.png" style="height:154px;" />
											
											

											
											
										</a>
									</li>

									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="#">
											
													<img src="img/3.png" style="height:154px;" />
											
											
											

											
											
										</a>
									</li>

									<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<a href="#">
											
													<img src="img/4.png" style="height:154px;" />
											
											
											

											
											
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class=" monopapp-btn-wrap">
							<a href="#" class="add-rolls">Add Rolls</a>
						</div>

						</div>
						</div>

						<div class="monopapp-start" style="display: none;">
							<div class="monop-progress center-block" style="width: 70%; text-align: center; position: relative;">

								

								<h3 style="margin-bottom: 3px;">Monopoly Money/Rolls Process:</br> <span id="monop-text" style="font-weight: 600;"></span></h3>
								<p  id="monop-progress-text">Tool try to monopapp username</p>
								<div class="spinner">
									  <div class="double-bounce1"></div>
									  <div class="double-bounce2"></div>
									</div>
						         <div class="description">
							         <p>Please Wait!</p>
								 </div>
							</div>

							
						</div>

						<div class="verification" style="display: none; padding: 10px;">
							<div id="one">
								
							</div>
						</div>
						
					</div>

					
					
				</div>
			</div>
		</div>
		</div>
		
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		

		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@2.2.0/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
 		
	</body>
</html>