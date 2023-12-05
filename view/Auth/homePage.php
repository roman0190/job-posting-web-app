<?php


include_once("../../controller/Auth/sessionCheck.php");




?>
<html>

<head>
	<title><?= $userType ?> Home</title>
	<link rel="stylesheet" href="../../assets/CSS/Common/style.css">
</head>

<body>
	<?php include_once("../components/header.php") ?>
	<center>
		<h1>Welcome <?= $userType ?>!</h1>

		<a href="../BrowseJobs/browseAllJobs.php">Browse All Jobs + Job Filter [applicant][Admin]</a>
		<br />
		<br />
		<a href="../ManageJobs/myJobs.php">Browse My Jobs (Jobs that I posted) [recruiter] (Admin and applicant will be redirected to browse all jobs)</a>
		<br />
		<br />
		<a href="../AboutPage/about.html">About Page</a>
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