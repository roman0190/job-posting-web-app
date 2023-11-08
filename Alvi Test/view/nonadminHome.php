<?php
session_start();

// This is where you fetch the description from your database or any other source
$description = "This is the updated description for non-admin users.";

// Store the description in the session
$_SESSION['site_description'] = $description;

// Rest of your code for the admin home page
// ...
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARZ JOB SITE - Your Job Search Partner</title>
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="20">
        <tr>
            <th colspan="2">
                <h2 align="center">
                <img align="left" src="logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
               
            </th>
        </tr>
        <tr>
            <td>
                <p align="center">
                    <a href="signUp.php">Signup</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="signIn.php">Signin</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="terms.php">Terms of Services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="privacy.php">Privacy Policy</a>
                </p>
                
                <h2 align="center">Welcome to MARZ JOB SITE</h2>
                <h2>Description</h2>
                   <p><?php echo $description; ?></p>
               
                <p>
                

"MARZ JOB SITE: Your Path to Professional Success

Welcome to MARZ JOB SITE, where we're dedicated to guiding you towards a brighter future. In a world filled with diverse career choices, we bring you a curated selection of opportunities, tailored to your skills and aspirations.

Our mission is straightforward yet powerful: to bridge the gap between talent and opportunity. Whether you're an experienced professional seeking new challenges or a fresh graduate entering the corporate world, we've got your back.

At MARZ JOB SITE, we offer a unique experience. Our advanced algorithms seamlessly connect candidates with their ideal job postings. We understand that job hunting can be daunting, so we've designed an intuitive platform to make your journey smooth.

For employers, MARZ JOB SITE streamlines the recruitment process. Post job openings and watch a pool of talented candidates eager to showcase their skills. Our platform includes candidate screening, communication tools, and profile verification, ensuring you find the perfect fit.

MARZ JOB SITE is more than just a job board; it's a thriving community where careers are built, aspirations achieved, and success stories created.

Your path to professional excellence starts here at MARZ JOB SITE. Explore, dream, connect, and achieve your career goals with unwavering support. Welcome to MARZ JOB SITE – where dreams take flight, and your future is just a click away."
                </p>
            </td>
        </tr>
        
        <tr>
            <td>
                <footer align="center">
                    <p>&copy; 2023 MARZ JOB SITE. All rights reserved.</p>
                </footer>
            </td>
        </tr>
    </table>
</body>
</html>
