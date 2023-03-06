<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i0.wp.com/pathfinder-mm.org/wp-content/uploads/2023/02/cropped-PNG3.png?fit=32%2C32&#038;ssl=1" sizes="32x32" />
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
        rel="stylesheet"
        />

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

        <title>Pathfinder Institute Myanmar</title>
        <style>
        body{
            background-color: var(--body-color);
        }
        .card{
            max-width: 550px;
            margin: auto;
            background-color: var(--bg-color);
        }
        .dark-theme{
            --text-color:rgb(248, 245, 245);
            --body-color:#0a0a0a;
            --nav-color: #000;
            --bg-color: #000;
        }
        #dark-btn{
        position: absolute;
        top: 30px;
        right: 30px;
        background: #ccc;
        width: 45px;
        border-radius: 15px;
        padding: 10px 6px;
        cursor:pointer;
        display: flex;
        transition: padding-left 0.5s, background 0.5s;
        }

        /* default
        ---------------------------- */
        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .btn-default:focus {
            color: #333;
            background-color: #e6e6e6;
            border-color: #8c8c8c;
        }
        .btn-default:hover {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad;
        }
        .btn-default:active {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad;
        }
        #dark.btn span{
            width: 30px;
            height: 30px;
            background: #fff;
            border-radius: 60%;
            display: inline-flex;

        }
        #dark-btn.dark-btn-on{
            padding-left: 23px;
            background: #272727ef;
        }
        .dropdown:hover>.dropdown-menu {
            display: block;
        }
        .dropdown>.dropdown-toggle:active {
            /*Without this, clicking will make it sticky*/
            pointer-events: none;
        }
        .footer{
        	position:fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 10%;
            background-color: var(--nav-color);
            color: var(--input-color);
            text-align: center;
        }
        </style>
    </head>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--nav-color);" >
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <img
            src="https://i0.wp.com/pathfinder-mm.org/wp-content/uploads/2023/02/PNG4.png?resize=768%2C247&ssl=1"
            height="55"
            />
        </a>

    <!-- Toggle button -->
        
    <button
        class="navbar-toggler"
        type="button"
        style="color: var(--text-color);"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
    </button>
    
    <!-- Collapsible wrapper -->

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
       
        <!-- Left links -->

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link text-info" style="text-decoration: none;" href="/">Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>

        <div class="dropdown" style="padding-top: 8px;" >
            <a
              id="dropdownMenuButton"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
            <i class="bi bi-info-circle"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:var(--body-color);" >
              <li><a class="dropdown-item" style="color: var(--text-color);" href="#">
                Developed by ZynxDixon & Noha</a></li>
            </ul>
        </div>
      </ul>

      <!-- Left links -->
      
      <div class="d-flex align-items-center" >
        
    </div>
</div>
<!-- Collapsible wrapper -->
</div>
<!-- Container wrapper -->
</nav>
<!-- End Navbar -->
<br>

<!-- body -->
<body>
    <div class="card" style="background-color: var(--bg-color);" >
        <div class="card-header" >
            <h1 class="text-info">Teacher form data</h1>
            <div id="dark-btn">
            <span></span>
        </div>
    </div>
    <div class="card-body" style="background-color: var(--bg-color); color: var(--text-color); " >
    	<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//database connection
require 'config.php';

if (!empty($_POST['submit'])) {

	//Define variable
	$tr_id = $_POST['tr_id'];
	$total_section = $_POST['total_section'];
	$section = $_POST['select_section'];
	$subject = $_POST['select_subject'];
	$payment = $_POST['select_payment'];
	$time = date_default_timezone_set("Asia/Yangon");
	$created_at = date("h:i:sa");

	//form validate
  	if ($tr_id == '' || $total_section == '' || $section == '' || $subject == '' || $payment == '' ){
  		echo "<script>alert('Fill the form data')</script>";
  	}
  	//if fill form data
  	else{
	  	//tr id exist or not exist in teacher table
	  	$sql = "SELECT * FROM teacher WHERE tr_id = :tr_id";
	  	$stmt = $pdo->prepare($sql);

	  	$stmt->bindValue(':tr_id',$tr_id);
	  	$stmt->execute();
	  	$teacher = $stmt->fetch(PDO::FETCH_ASSOC);

	  	//if tr id not exist in teacher table
	  	if (empty($teacher)) {
	  		echo "<script>alert('Incorrect teacher id, Try Again')</script>";
	  	}
	  	//if tr id exist insert data to section table
	  	else{

	  	  	$count = "SELECT COUNT(tr_id) AS num FROM section WHERE tr_id = :tr_id";
	  	  	$section_count = $pdo->prepare($count);
	  	  	//bind statement
		    $section_count->bindValue(':tr_id',$tr_id);
		    //execute statement
		    $section_count->execute();
		    $row = $section_count->fetch(PDO::FETCH_ASSOC);

		    //tr id exist or not exist in section table
		    if ($row['num'] > 0) {
		    	//if tr id exist and tr add next section number
		    	if ($row['num'] < $total_section) {
		    		//fetch data
			    	$tr_data = "SELECT * FROM section WHERE tr_id = :tr_id";
			    	$data_stmt = $pdo->prepare($tr_data);
			    	$data_stmt->bindValue(':tr_id',$tr_id);
			    	$data_stmt->execute();
			    	$data_row = $data_stmt->fetchAll();
			    	?><p>Your added section numbers and added at - </p><?php
			    	foreach ($data_row as $data) {
			    		?>
			    		<!-- show added data -->
			    		
			    		<p><?php echo $data['section']." added at ".$data['created_at']; ?></p>
			    		<?php
			    	}
			    	?>
			    	<p>You selected new section</p>
			    	<?php 

			    	    foreach ($section as $multi_section) {
			    	    //query prepare
			    	    $section = $multi_section;
					    $sql = "SELECT * FROM section WHERE section = :section";
					    $stmt = $pdo->prepare($sql);

					    //bind statement
					    $stmt->bindValue(':section',$section);
					    //execute statement
					    $stmt->execute();

					    $row = $stmt->fetchAll();
					    if (empty($row)) {
					    	echo $section;
					    }
					}

			    	?>
			    	<p>Do you want to add this section ?</p>
			    	<form action="addnew.php" method="POST" >
			    		<input class="btn btn-outline-info" type="" value=" + Add new" name="add_new" >
			    	</form>
			    	<?php
		    	}
		    	//if tr thinks he add 3 and reality is 4
		    	elseif ($row['num'] > $total_section){
		    		echo "Your total section count is already"."-".$row['num'];
		    		//fetch data
			    	$tr_data = "SELECT * FROM section WHERE tr_id = :tr_id";
			    	$data_stmt = $pdo->prepare($tr_data);
			    	$data_stmt->bindValue(':tr_id',$tr_id);
			    	$data_stmt->execute();
			    	$data_row = $data_stmt->fetchAll();
			    	?><p>Your added section numbers and added at - </p><?php
			    	foreach ($data_row as $data) {
			    		?>
			    		<!-- show added data -->
			    		
			    		<p><?php echo $data['section']." added at ".$data['created_at']; ?></p>
			    		<?php
			    	}
			    	?>
			    	<p>Do you want to add new section ?</p>
			    	<a href="addnew.php" class="btn btn-outline-info" > + Add new</a>
			    	<?php
		    	}
		    	//if equal tr data show already exist)
		    	elseif ($row['num'] == $total_section){
		    		echo "Capacity ပြည့်ပြီးသားပါဗျ။";
		    	}
		    }
		    //if tr id does not exist in section table just create
		    else{
		    //foreach for multi section
		    	foreach ($section as $multi_section) {
		    	$section = $multi_section;
		  	  	$sql = "INSERT INTO section(tr_id,section,subject,payment,created_at) VALUES (:tr_id,:section,:subject,:payment,:created_at)";
		  	  	$stmt = $pdo->prepare($sql);
			    $stmt->bindValue(':tr_id',$tr_id);
			    $stmt->bindValue(':section',$section);
			    $stmt->bindValue(':subject',$subject);
			    $stmt->bindValue(':payment',$payment);
			    $stmt->bindValue(':created_at',$created_at);
			    $result = $stmt->execute();
			}
			if ($result) {
			    	echo "Thanks for your teaching!";
			    }
			}
		}
	}
}
?>
    	<div>
    		<form class="" action="index.php" method="post">
          <div class="form-group">
            <label for="teacher-id" style="color:var(--text-color);" >Teacher id</label>
            <input class="form-control" type="text" name="tr_id" value=""
            style="background-color:var(--bg-color);color: var(--text-color);" required>
          </div>
          <br>
          <div class="form-group">
            <label for="section" style="color:var(--text-color);" >Total Section</label>
            <input class="form-control" type="number" name="total_section" value=""
            style="background-color:var(--bg-color);color: var(--text-color);" required>
          </div>
          <br>
            <select class="selectpicker" multiple aria-label="Default select example" data-live-search="true" name="select_section[]" >
            	<!-- Section A -->
            	<option>A-01</option>
            	<option>A-02</option>
            	<option>A-03</option>
            	<option>A-04</option>
            	<option>A-05</option>
            	<option>A-06</option>
            	<option>A-07</option>
            	<option>A-08</option>
            	<option>A-09</option>
            	<?php

            		for ($i=10; $i < 71; $i++) { 
            			?><option>A-<?php echo $i; ?></option><?php
            		}
            	?>

            	<!-- Section B -->
            	<option>B-01</option>
            	<option>B-02</option>
            	<option>B-03</option>
            	<option>B-04</option>
            	<option>B-05</option>
            	<option>B-06</option>
            	<option>B-07</option>
            	<option>B-08</option>
            	<option>B-09</option>
            	<?php

            		for ($i=10; $i < 71; $i++) { 
            			?><option>B-<?php echo $i; ?></option><?php
            		}
            	?>

            	<!-- Section C -->
            	<option>C-01</option>
            	<option>C-02</option>
            	<option>C-03</option>
            	<option>C-04</option>
            	<option>C-05</option>
            	<option>C-06</option>
            	<option>C-07</option>
            	<option>C-08</option>
            	<option>C-09</option>
            	<?php

            		for ($i=10; $i < 71; $i++) { 
            			?><option>C-<?php echo $i; ?></option><?php
            		}
            	?>

            	<!-- Section E -->
            	<option>E-01</option>
            	<option>E-02</option>
            	<option>E-03</option>
            	<option>E-04</option>
            	<option>E-05</option>
            	<option>E-06</option>
            	<option>E-07</option>
            	<option>E-08</option>
            	<option>E-09</option>
            	<?php

            		for ($i=10; $i < 71; $i++) { 
            			?><option>E-<?php echo $i; ?></option><?php
            		}
            	?>

            	<!-- Section S -->
            	<option>S-01</option>
            	<option>S-02</option>
            	<option>S-03</option>
            	<option>S-04</option>
            	<option>S-05</option>
            	<option>S-06</option>
            	<option>S-07</option>
            	<option>S-08</option>
            	<option>S-09</option>
            	<?php

            		for ($i=10; $i < 71; $i++) { 
            			?><option>S-<?php echo $i; ?></option><?php
            		}
            	?>
        </select>    	
<br><br>
		  	<select class="selectpicker"  aria-label="Default select example" data-live-search="true" name="select_subject" >
		  		<option>Myanmar</option>
		  		<option>English</option>
		  		<option>Mathematics</option>
		  		<option>Chemistry</option>
		  		<option>Physics</option>
		  		<option>Bio</option>
		  	</select>

<br><br>
		  		<select class="selectpicker"  aria-label="Default select example" data-live-search="true" name="select_payment" >
		  			<option>K Pay</option>
		  			<option>Wave Money</option>
		  		</select>

          <div class="card-footer" style="background-color: var(--bg-color); 
          color: var(--text-color); " ><hr>
	          <div class="form-group">
	            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
	          </div>
	      </div>
        </form>
    	</div>
    </div>
</div><br><br><br><br>
    <div class="footer">
            <p style="color: var(--text-color);padding-top: 15px;" >© Copyright 2023 — Pathfinder Institute Myanmar. All rights reserved.
            </p>
    </div>
    </body>

<script>

    var settingsmenu = document.querySelector(".settings-menu");
    var darkBtn =document.getElementById("dark-btn");

    function settingsMenuToggle(){
        settingsmenu.classList.toggle("settings-menu-height");
    }
    darkBtn.onclick = function(){
        darkBtn.classList.toggle("dark-btn-on");
        document.body.classList.toggle("dark-theme");

        if(localStorage.getItem("theme") == "light"){
            localStorage.setItem("theme","dark");
        }
        else{
            localStorage.setItem("theme","light");
        }
    }

    if(localStorage.getItem("theme") == "light"){
        darkBtn.classList.remove("dark-btn-on");
        document.body.classList.remove("dark-theme");

    }
    else if(localStorage.getItem("theme") == "dark"){
        darkBtn.classList.add("dark-btn-on");
        document.body.classList.add("dark-theme");

    }
    else{
        localStorage.setItem("theme","light");

    }
</script>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</html>