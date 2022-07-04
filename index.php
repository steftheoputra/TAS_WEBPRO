<?php
	 include 'db_connect.php';
     include 'header.php';
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "Admin") == 0)
		header("Location: Admin/admin.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/member.php");
?>

<html>
	<head>
		<title>TAS | WEB PROGRAMMING</title>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<div id="member">
				<a href="member">
					<img src="img/ic_membership.svg" width="250px" height="auto"/><br />
					&nbsp;Member Login
				</a>
			</div>
			<div id="verticalLine">
				<div id="Admin">
					<a id="Admin-link" href="Admin">
						<img src="img/ic_librarian2.svg" width="250px" height="220" /><br />
						&nbsp;&nbsp;&nbsp;Admin Login
					</a>
				</div>
			</div>
		</div>
	</body>
</html>