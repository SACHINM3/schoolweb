<?php
session_start();
error_reporting(0);

// funcions
function logout(){
	session_start();
	session_unset();
	session_destroy();
	// exit();
	echo "looged";
}

function login(){
	session_start();
	$Login = false;
	if(isset($_SESSION['name'])){
	  $Login = true;
	}
	return $Login;
}
  
  login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'><link rel="stylesheet" href="./dashboard.css?v=<?php echo time(); ?>">

	<title>Dashboard - <?php echo " " . $_SESSION['name']; ?> </title>
</head>
<body>
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-school'></i>
			<span class="text">My Account</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/html/dashboard.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/html/analytics.html">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="/html/connect_to_teachers.html">
					<i class='bx bxs-contact' ></i>
					<span class="text">Connect to teachers</span>
				</a>
			</li>
			<li>
				<a href="/html/class.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Class</span>
				</a>
			</li>
      <li>
				<a href="/html/performers.html">
					<i class='bx bx-run' ></i>
					<span class="text">Performers</span>
				</a>
			</li>
      <li>
				<a href="/html/assessment.html">
					<i class='bx bxl-blogger' ></i>
					<span class="text">Assessments</span>
				</a>
			</li>
      
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<button class="logout" id="logout-btn">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</button>
			</li>
		</ul>
	</section>
<!--   ..........naaaavbaaar.......... -->
	<section id="content">
	
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<div class="profile">
				<img src="/images/img4.jpg">
			</div>
		</nav>

		<main>
			<div class="head-title">
				<div class="left">
					<h1><?php echo " " . $_SESSION['name']; ?></h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
					</ul>
				</div>
				<a href="../index.php" class="btn-return">
					<i class='bx bxs-left-arrow-circle'></i>
					<span class="text">Return To Home</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>20</h3>
						<p>Tasks Done</p>
					</span>
				</li>
				<li>
          <i class='bx bx-coin'></i>
					<span class="text">
						<h3>2543</h3>
						<p>Points</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Tasks</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Subject</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="" alt="">
									<p>Science</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="" alt="">
									<p>Maths</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="" alt="">
									<p>Social Science</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="" alt="">
								<p>English</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="" alt="">
									<p>Hindi</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="wrapper">
					<header>
					  <p class="current-date"></p>
					  <div class="icons">
						<span id="prev" class="material-symbols-rounded">chevron_left</span>
          				<span id="next" class="material-symbols-rounded">chevron_right</span>
					  </div>
					</header>
					<div class="calendar">
					  <ul class="weeks">
						<li>Sun</li>
						<li>Mon</li>
						<li>Tue</li>
						<li>Wed</li>
						<li>Thu</li>
						<li>Fri</li>
						<li>Sat</li>
					  </ul>
					  <ul class="days"></ul>
					</div>
				  </div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="./dashboard.js"></script>
</body>
</html>