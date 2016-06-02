<?php

function echoActiveClass($requestUri)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	
    if ($current_file_name == $requestUri)
        echo 'class="active"';
	
}

function echoActiveMenu($wordInUrl)
{
	$current_file_name = basename($_SERVER['REQUEST_URI']);
	
    if (strpos($current_file_name, $wordInUrl) !== false)
        echo 'class="active ';
}

?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Tildes</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Messages</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tasks <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Tasks</li>
						<li><a href="#">Add Tasks</a></li>
						<li><a href="#">Edit Tasks</a></li>
					</ul>
				</li>
				<li><a href="calendar.php">Calendar</a></li>
				<li <?php echoActiveMenu("event")?> dropdown">
					<a href="viewevents.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Events</li>
						<li <?php echoActiveClass("viewevents");?> ><a href="viewevents.php">View Events</a></li>
						<li><a href="#" onclick="showAddEventModal()">Add Event</a></li>
					</ul>
				</li>
				<li><a href="#">Upcoming</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">...</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><?php echo current_user_login_text();?></a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>

