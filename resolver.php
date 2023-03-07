<!DOCTYPE html>

<?php

//Get the status and decode the JSON
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/'.$_GET["ip"]));

$online2 = 'Offline';
$ping2 = 'False';

if ($status->online == 1) {
	$online2 = 'Online';
}

if ($status->debug->ping == 1) {
	$ping2 = 'True';
}

?>

<html>
<head>

  <title>Reaper Panel | Resolver Hub</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script async src="https://arc.io/widget.js#AM1Rss4d"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e536e5c9d4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark dark p-4">
  <div class="container">
    <a class="font-reaper" href="#"><strong><i class="fas fa-meteor"></i>ReaperPanel</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
      aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://reaperpanel.gq/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://discord.gg/SvpteWa" target="_blank">Discord</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Hubs </a>
          <div class="dropdown-menu dropdown-pink" aria-labelledby="navbarDropdownMenuLink-7">
            <a class="dropdown-item" href="https://reaperpanel.gq/reaper.php">Reaper Hub</a>
            <a class="dropdown-item" href="https://reaperpanel.gq/resolver.php">Resolver Hub</a>
            <a class="dropdown-item" href="https://reaperpanel.gq/premium.php">Premium Hub</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
<div class="table-container white">
<div class="blacklist_text">
    <h1><strong>RESOLVER HUB</strong></h1>
</div>

<form method="get" class="glavni_forum table_short">
  <div class="form-group">
    <label class="beli_text" for="exampleInputEmail1">Server Ip</label>
    <input type="text" class="form-control" name="ip" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the targets ip">
    <small id="emailHelp" class="form-text text-muted">Type in the servers ip!</small>
  </div>
    <input type="submit" class="btn btn-danger resolve" value="Resolve!">
  </div>
</form>
<br>
<br>
<div class="table-container white">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Domen</th>
      <th scope="col">Ip</th>
      <th scope="col">Version</th>
      <th scope="col">Status</th>
      <th scope="col">Ping</th>
      <th scope="col">Players</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $status->hostname; ?></td>
      <td><?php echo $status->ip; ?></td>
      <td><?php echo $status->version; ?></td>
      <td><?php echo $online2; ?></td>
      <td><?php echo $ping2; ?></td>
      <td><?php echo $status->players->online.'/'.$status->players->max; ?></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</center>
</body>
</html>