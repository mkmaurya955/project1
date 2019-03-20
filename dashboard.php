<?php include('server.php');
  
  // if user is not logged in, they can not access this page
  if (empty($_SESSION['username'])) {
    header('location:login.php');
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="templatemo_image_fader.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 20%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
  font-size: 15px;
}

.fa {font-size:40px;}

div.ex1 {
  width: 100%;
  margin: auto;
}

#left
{
    position:absolute;
    width: 100px;
    top: 150px;
    left: 0;
}

#right
{
    position:absolute;
    width: 100px;    
    top: 150px;
    right: 0;
</style>

</head>
<body>
	<div class="templatemo_container">
		<div id="templatemo_header">
        	<div id="templatemo_logo_area">
            	<span class="b"><div id="templatemo_logo"><a href="#" target="_blank"> <img src="logo_2.png" width="75" height="75"> </a></div></span>
              	<span class="b"><div id="templatemo_slogan">
                			South Central Railway <br>
                			Carriage Workshop<br>
                			Lallaguda Secunderabad<br>
              				</div></span>
              		

                <div class="cleaner"></div>
            </div><!--templatedemo_logo_area close-->

               <div style="display: table;">
                <div style="display: table-cell; vertical-align: middle;">
                  <div id="templatemo_time"><p id="time" style="color: #CCC;float: right; padding-right: 0px;"></p>
                  <script type="text/javascript">document.getElementById("time").innerHTML = Date();</script> </div>
                  <div id="templatemo_icon"></div>
                  <div id="templatemo_search">COMPUTERIZED PASS PRINTING MODULE</div>
                </div>
                </div>
        
            <div id="templatemo_menu">
				<ul>
                    <li class="current"><?php echo $_SESSION['username']; ?> <a>DASHBOARD</a></li>
                    <li><a href="#">Home</a></li>
                    <li ><a href="gallery.html">Gallery</a></li>
                    <li><a href="#">Archives</a></li>
                    <li><a href="#">Wallpapers</a></li>                        
					          <li><a href="#">Downloads</a></li>
                	  <li><a href="login.php?logout='1'" style="float: right">Log Out</a></li>	  
            	</ul>
			</div>
            
        </div><!-- end of header -->


        <div class="ex1">
<div class="row">
<br>
  <div class="column">
    <div class="card">
      <h3><i class="fa fa-user"></i></h3>
      <a href="employee_master.php"><h3>Employee Master</h3></a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3><i class="fa fa-train"></i></h3>
      <a href="stationcodes.html"><h3>Station Codes</h3></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><i class="fa fa-address-card"></i></h3>
      <a href="#"><h3>Pass Printing</h3></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><i class="fa fa-print"></i></h3>
      <a href="#"><h3>PTO Printing</h3></a>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3><i class="fa fa-file"></i></h3>
      <a href="familydata.php"><h3>Form Page</h3></a>
    </div>
  </div>
</div>

</div>
</div>


   
    
	<div id="templatemo_bottom_area">
		<div class="templatemo_container">
        <!--	<div class="templatemo_section_1"><h1>Resource Links</h1></div>
            
          <div class="templatemo_section_1"><h1>Recent Posts</h1></div>

          <div class="templatemo_section_1"><h1>Contacts For Enquiry</h1></div>
            
          <div class="templatemo_section_1"><h1>HeadQuarters <br>Secunderabad</h1></div>

          <div class="templatemo_section_1"><h1>Regional Offices</h1></div>-->
            
            
            <div class="cleaner"></div>
			
            <div id="templatemo_footer">
      			Copyright © 2019 <a href="#">South Central Railway</a>     
			      </div>  
    </div>
 </div>
<!--  end  -->
</body>
</html>