<?php 
$APOD_URL     = "https://api.nasa.gov/planetary/apod";
$api_key      = "?api_key=DEMO_KEY"; // uEIKdcG9NYZoodJFGRW9FRoKW1wc4XLwbhF5zSEs
// $date         = "&date=2022-01-01";
$output       = file_get_contents("$APOD_URL$api_key$date");
$decoded_json = json_decode($output, true);
$title        = $decoded_json['title'];
$url          = $decoded_json['hdurl'];
$date         = $decoded_json['date'];
$explanation  = $decoded_json['explanation'];
$copyright    = $decoded_json['copyright'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NASA Api</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container bg-secondary mt-5 p-4 rounded">
    <div class="row">
      <div class="col-12 mb-2 ml-3">
          <p class="h1"><?php echo $title ?></p>
      </div>
      <div class="col-4 mt-3">
          <img class="col-12" src="<?php echo $url ?>">
          <small class="col-12"><?php echo "By $copyright"?></small>
      </div>
      <div class="col-8">
        <small><?php echo $date ?></small>
        <p class="text-light"><?php echo $explanation ?></p>
      </div>
    </div>
  </div>
</body>
</html>