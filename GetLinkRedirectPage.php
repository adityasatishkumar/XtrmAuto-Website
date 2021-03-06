<html lang="en-US">

	<head>
	
		<meta http-equiv="content-type" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>XtrmAuto</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
		<link href="css/CreateRedirectPage.css" rel="stylesheet">
	
		
		<script src="https://kit.fontawesome.com/a003c65f08.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	


	</head>
	
	<body id="body" >
		
		<!--**************************NAVBAR*****************************-->
		<nav class="navbar navbar-toggleable-md navbar-expand-sm fixed-top" id="navBar" >
  
  			<a id="logoLink" class="form-inline" href="index.html" ><img id="logoImg" src="images/XTRM LOGO.png"></a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
				<ul class="navbar-nav form-inline" id="navbar-container">

    				<li class="nav-item dropdown" >
						
						<a class="nav-link dropdown-toggle navBarLink borderHover" id="rentalDropdown" onClick="ren()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
							Rental Service
						
						</a>
						
						<div class="dropdown-menu"  id="rentalDropdownMenu" aria-labelledby="navbarDropdown">

          					<a class="dropdown-item" href="rent1.html">Mahindra Scorpio</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent2.html">Vitara Brezza</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent3.html">Toyota Innova</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent4.html">Mahindra XUV300</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent5.html">Toyota Fortuner</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent6.html">Honda City</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent7.html">Tata Nexon</a>

							<div class="dropdown-divider"></div>
							
          					<a class="dropdown-item" href="rent8.html">Toyota Camry</a>
							
        				</div>
						
        			</li>

 					<li class="nav-item dropdown">

        				<a class="nav-link  dropdown-toggle borderHover" id="buySellDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

          					Buy & Sell

        				</a>

        				<div class="dropdown-menu" id="buySellDropdownMenu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item " href="buycars_page.html">Used Cars</a>
							<div class="dropdown-divider"></div>
                            <a class="dropdown-item " href="Limo.html">Limo & Exotic Cars</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item " href="VintageCarsPage.html">Vintage Collection</a>
        				</div>

      				</li>
					
					<li class="nav-item">
      
	  					<a href="CarMods.html" class="nav-link navBarLink borderHover">Car Tuning & Mods</a>
						
        			</li>
					
					<li class="nav-item">
      
	  					<a href="CarCare.html" class="nav-link navBarLink borderHover ">Car Care</a>
						
        			</li>
	  
    			</ul>
				
  			</div>
			
			<div>
			
				<button type="button" class="button" id="sgnInBtn" onclick="location.href='SignInPage.html';">Sign In</button>
			
			</div>

		</nav>
<!--**************************************************************************************************-->
		
		<div class="jumbotron"></div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <div class="modal fade myModal" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
      
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title ">Xtrm</h3>
                        <button type="button" class="close" data-dismiss="modal" id="modalCloseBtn" >&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body text-center ">A verification link has been sent to your email. Please make sure to check your spam folder too.
                        <div><a href="index.html" role="button" class="btn ">Continue to site</a></div>
                    </div>                 
                </div>
            </div>
        </div>
		
		
		
		<script type="text/javascript">
		
		
			document.getElementById("rentalDropdown").onmousedown = function(){
			
				document.getElementById("rentalDropdownMenu").style.display = "block";
			
			};
			
			document.getElementById("rentalDropdownMenu").onmouseleave = function(){
			
				document.getElementById("rentalDropdownMenu").style.display = "none";
			
			};
			
			document.getElementById("buySellDropdown").onmousedown = function(){
			
				document.getElementById("buySellDropdownMenu").style.display = "block";
			
			};
			
			document.getElementById("buySellDropdownMenu").onmouseleave = function(){
			
				document.getElementById("buySellDropdownMenu").style.display = "none";
			
			};	
			
			$(document).ready(function(){
				$("#exampleModal").modal("show");
			})


			
		</script>