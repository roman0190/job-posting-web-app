<?php



$userId = "";
$userType = "";
if (isset($_COOKIE['auth']) && isset($_COOKIE['userId']) && isset($_COOKIE['userType'])) {
	$userId = $_COOKIE['userId'];
	$userType = $_COOKIE['userType'];
} else {
	session_start();
	if (isset($_SESSION['auth']) && isset($_SESSION['userId']) && isset($_SESSION['userType'])) {
		$userId = $_SESSION['userId'];
		$userType = $_SESSION['userType'];
	} else {
		header('location: ../Auth/login.php');
	}
}


if ($userType == "applicant") {
	header('location: applicant_home.php');
}
if ($userType == "recruiter") {
	header('location: recruiter_home.php');
}


?>
<html>

<head>
	<title>Admin Home</title>
	<link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
	<?php include_once("../components/header.php") ?>
	<center>
		<h1>Welcome Admin!</h1>

		<a href="../BrowseJobs/browseAllJobs.php">Browse All Jobs + Job Filter [applicant][Admin]</a>
		<br />
		<br />
		<a href="../ManageJobs/myJobs.php">Browse My Jobs (Jobs that I posted) [recruiter] (Admin and applicant will be redirected to browse all jobs)</a>
		<br />
		<br />
		<a href="../AboutPage/about.php">About Page</a>
		<br />
		<br />
		<a href="../FAQ/faq.php">FAQ</a>
		<br />
		<br />
		<a href="logout.php">Logout</a>
	</center>
	<?php include_once("../components/footer.php") ?>
</body>

</html>