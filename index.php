<?php include 'includes/conn.php';?>
<?php include 'conn.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>TwitterAPI</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">TwitterAPI</a>

  <form class="form-inline my-2 my-lg-0" method="get">
      <input name="input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<br>


</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">TwitterAPI</a>
</nav>
<br>

<?php foreach($string as $items) : ?>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h4><?php echo $items['user']['name'];?></h4>
                <h6 class="text-muted">@<?php echo $items['user']['screen_name'];?></h6>
            </div>
            <div class="col-2">
                <?php  echo substr($items['created_at'], 4, 12);?>
            </div>
        </div>

        <div class="card border border-primary">
            <div class="card-body">
                <?php echo $items['full_text'];?>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-2 green-bg">
                <?php echo "<p>Likes: ".$items['favorite_count']."</p>";?>
            </div>
            <div class="col-2 green-bg">
                <?php echo "<p>Retweets: ".$items['retweet_count']."</p>";?>
            </div>
        </div>
    </div>
    <br>
  <?php endforeach; ?>
</body>
</html>