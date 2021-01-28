<?php include_once 'config/init.php';?>

<?php

$template = new Template('templates/frontpage.php');
$job = new Job;

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
 $template->jobs = $job->getByCategory($category);
 $template->title = 'Jobs In' . $job->getCategory($category)->name;
} else {
    $template->title = 'Last Jobs';
    $template->jobs = $job->getAllJobs();
}

$template->p = 10;
$template->categories = $job->getCategories();
echo $template;
?>