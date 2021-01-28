<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joblister</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a class="btn btn-success" href="index.php">Home</a></li>
            <li role="presentation"><a class="btn btn-success" href="create.php">Create Listing</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>
