<?php
//start session
session_start();
include('connection.php');
//database connection
$error = null;
if(isset($_POST['add']))
  {
  //capture the form values
    $id=$_POST['id'];
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $dob = $_POST['dob'];
    $bpurpose = $_POST['bpurpose'];
    $eligibility = $_POST['eligibility'];
    $gender = $_POST['gender'];
    $clgname = $_POST['clgname'];
    $course = $_POST['course'];
    $bonafidedate = $_POST['bonafidedate'];
     
    //check the user if it already exists
    $inquire="SELECT * FROM familydata";
    $qqr=mysqli_query($db, $inquire);
    $ris=mysqli_fetch_array($qqr);
    if($ris > 0){
      @$check = $ris['id'];
    }
    
    //check if the fields are empty
    if(empty($name) || empty($relation)||empty($dob) || empty($bpurpose)||empty($eligibility)||empty($gender)||empty($clgname)||empty($course)||empty($bonafidedate))
    {
      $error ="Please make sure all the details have been filled before proceeding";
    }
    
    //check if user already Exists
      elseif(@$check == $id)
    {
      $error = "The User already exists in the System!";
    }
    else
    {
    //insert the captured form details to the database
    $sql = "INSERT INTO familydata VALUES('$id','$name','$relation','$dob','$bpurpose','$eligibility','$gender','$clgname','$course','$bonafidedate')";
    $query = mysqli_query($db, $sql);
    $result = mysqli_affected_rows($db);
    if($result > 0){
      @ $error.= "The Users details for &nbsp;".$name."&nbsp;has been successfuly entered";
      }
    else{
      $error.="The user could not be added. please try again later.";
    }
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Family Member Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript">
          function clearText(field)
          {
         	if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
          }

          function addRow(tableId, cells){
          var tableElem = document.getElementById(tableId);
          var newRow = tableElem.insertRow(tableElem.rows.length);
          var newCell;
          for (var i = 0; i < cells.length; i++) {
          newCell = newRow.insertCell(newRow.cells.length);
          newCell.innerHTML = cells[i];
          }
          return newRow;
          }
        </script>

        <style>
            html {
              scroll-behavior: smooth;
            }

            * {
              box-sizing: border-box;
            }

            body {
              font-family: Arial, Helvetica, sans-serif;
            }

            .fa {font-size:40px;}

            /* Create two equal columns that floats next to each other */
            .column {
              float: left;
              width: 50%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Float four columns side by side */
            /*
            .column {
              float: left;
              width: 20%;
              padding: 0 5px;
            }

            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            /*
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            */

            /* Responsive columns */
            @media screen and (max-width: 600px) {
              .column {
                width: 100%;
                display: block;
                margin-bottom: 10px;
              }
            }
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
              }
              /* Table style */
            .mytable table,td,tr{
              border-collapse:collapse;
              padding:7px;
                  
                
            }
            .mytable table{
              border:1px #000 dotted;
              width:80%;  
              background:#FFF;
              height:auto;
              margin:auto;
              box-shadow:3px 3px 9px #000;
            }
            .mytable th{
              background:#000;
              color:#FFA401;
              font-weight:bold;
              padding:5px;
              /*box-shadow:3px 3px 9px #000;*/
            }
            .mytable td{
              border:1px #000 dotted; 
            }
            .mytable tr:hover{
              /*box-shadow: 3px 3px 5px #000;*/
              background-color:#09F;  
              color:#FFF;
            }
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
                <li class="current"><a>Family Member Details</a></li>
                <li><a href="file:///C:/wamp/www/projectinternship2/dashboard.html">Home</a></li>
                <li ><a href="#">Gallery</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">Wallpapers</a></li>                        
					      <li><a href="#">Downloads</a></li>
                <li><a href="login.php?logout='1'">Log Out</a></li>	  
            	</ul>
			      </div>
            
        </div><!-- end of header --><br><br>
          <div id="accordion">
  
            <div>
              <fieldset>
      
                <legend>  <h3><a href="#" style="color: yellowgreen;">Fill the Details of the New Family Member</a></h3></legend>
            <div>
            <form name="adduser" action="<?php $PHP_SELF ?>" method="POST">
              <table align="center" class="mytable">                 
              <tr>
               
              <?php
          
              $g = mysqli_query($db, "select max(id) from familydata");
              while($id=mysqli_fetch_array($g))
              {
              ?>
                
              <th>ID</th>
                <td><input type="text" name="id" value="<?php echo $id[0]+1; ?>" readonly="readonly" /></td>
                
              <?php
          }
        ?>          
            <th><label>Name</label></th>
            <td><input type="text" name="name" autofocus=""></td>
            <th><label>Relation</label></th>
            <td>
                <select name="relation">
                  <option value="Select">Select</option>
                  <option value="Daughter">Daughter</option>
                  <option value="Son">Son</option>
                  <option value="Other">Other</option>
                </select>
            </td>
            </tr>
            
            <tr>
              <th><label>Date</label></th>
              <td><input type="date" name="dob"/></td>

              <th><label>Bonafide Purpose</label></th>
              <td><input type="text" name="bpurpose"/></td>

              <th><label>Eligibility</label></th>
              <td><input type="text" name="eligibility"></td>
            </tr>
            
            <tr>
             <th>Gender</th>
                <td>
                <input type="radio" name="gender" value="Male" checked=""/>Male
                <input type="radio" name="gender" value="Female" />Female
                </td>
                <th><label>College Name</label></th>
                <td><input type="text" name="clgname"/></td>

                <th><label>Course</label></th>
                <td>
                <select name="course">
                  <option value="Select">Select</option>
                  <option value="B.SC">B.SC</option>
                  <option value="B.TECH">B.TECH</option>
                  <option value="BCA">BCA</option>
                  <option value="HSC">HSC</option>
                  <option value="SSC">SSC</option>
                  <option value="SSC">MCA</option>
                  <option value="SSC">B.COM</option>
                </select></td>
            </tr>
            
            <tr>
                          
              <th><label>Bonafide submission Date</label></th>
              <td><input type="date" name="bonafidedate"/></td>
              
            </tr>
            
            </table>
            
            <center><input type="submit" name="add" value="Add">  
                        <input type="reset" value="Cancel" /></center>
        </form>
    </fieldset>
    
    
    
    <fieldset>
     <legend> <center><h3><a href="#" style="color:yellowgreen;">Recently added Family Member In the System</a></h3></center></legend>
  <table class="mytable" align="center">
  <center>
        <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Relation</th>
              <th>DOB</th>
              <th>Eligibility</th>
              <th>Gender</th>
              <th>College Name</th>
              <th>Bonafide submission Date</th>
              <th>Options</th>
        </tr>
        <?php
      //List employees recently added in descending order
      $i = "select * from familydata ORDER BY id DESC LIMIT 3";
      $h = mysqli_query($db, $i);
      while($tr =mysqli_fetch_array($h))
      {
    ?>
        <tr>
          <td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[5]; ?></td>
            <td><?php echo $tr[6]; ?></td>
            <td><?php echo $tr[7]; ?></td>
            <td><?php echo $tr[9]; ?></td>
            <td align="center"><a href="familydelete.php? id=<?php echo $tr[0];?>">Delete</a> / 
            <a href="edit.php? id=<?php echo $tr[0];?>">Edit</a> </td>
        </tr>
        
        <?php
      }
    ?>
    
    </table>
    </fieldset>
    </center>
</div>      
</div>
</div>
</div>

</div>
</div>
<div class="row">
 	<div class="column">
</div>
		<!--<hr>
		<form >
			First Name: <input type="text" name="FirstName">
			Middle Name: <input type="text" name="MiddleName">
			Last Name: <input type="text" name="LastName">
			<br />
			<br />
			<center><input type="button" value="Add Name"
			onclick="addRow('tblPeople‘,[this.form.FirstName.value,this.form.MiddleName.value, this.form.LastName.value]);"> 
			</center>
			<hr>
		</form>-->

        <div id="templatemo_bottom_area">
		<div class="templatemo_container">
			<div class="cleaner"></div>
			
            <div id="templatemo_footer">
      			Copyright © 2019 <a href="#">South Central Railway</a>     
			      </div>  
    </div>
 </div>

<!--  end  -->
</body>
</html>