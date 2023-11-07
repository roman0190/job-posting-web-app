function fetchAllJobs()
{
$con = getConnection();


$sql = "select * from jobs ehere id=(select job_id from reported_jobs)";


$result = mysqli_query($con, $sql);
$jobs = [];
while ($row = mysqli_fetch_assoc($result)) {
array_push($jobs, $row);
}

return $jobs;
}