<?php

error_reporting(0);
set_time_limit(0);
session_start();

if(!isset($_SESSION['usuario']) and !isset($_SESSION['senha'])){
    header("Location:/");
    exit(); 
}

extract($_SESSION);

?>
<html>

<head>
  <meta charset="utf-8">
  <title>Team Robber</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=0.3">

  <style>
    body {
      min-height: 100vh;
      font-family: 'Montserrat', sans-serif;
    }

    td {
      text-align: center;
    }
  </style>
</head>
<nav class="navbar navbar-expand-lg bg-primary fixed-top" id="banner">
	<div class="container">
  <a class="navbar-brand text-light" href="#">VISIT US IN MY GROUP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">OPTION
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item text-dark" href="/panel/">PANEL</a>
        <a class="dropdown-item text-dark" href="/panel/logout.php">LOG-OUT</a>
      </div>
    </li>
    </ul>
  </div>
	</div>
</nav><body style="background-image: linear-gradient(to bottom, #302b63, #24243e);">
  <div class="container-fluid">
    <div class="text-center">
      <h1 style="margin-top: 90px;background: -webkit-linear-gradient(#d5eef5, #fffbd5);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><img src="/panel/images/i.png" height="120" class="rounded-circle"><br>Welcome <?php echo $usuario; ?>!<br></h1><sub style="font-size: 15px;color:white"></b></sub>
    </div>
    <div class="row">
      <div style="margin-bottom: 10px;margin-top: 30px;" class="col-sm-12">
        <div class="card border-primary mb-12">
          <div class="card-header success"></div>
          <div class="card-body text-center">
            <div class="row col-lg-12 text-center">
              <div class="col-md-6 text-center">
                <p>CARDS</p>
                <textarea class="form-control h-50" id="ccs" rows="3" cols="50" placeholder="FORMAT:4486655XXXXXXXXX|XX|XXXX|XXX"></textarea><br>
              </div>
              <div class="col-md-6">
                <div class="row h-50">
                  <div class="col-md-12 h-100">
                    <p>SELECT CHECKER</p>
                    <select class="form-control h-100" id="gate">
                  <option value="gate1">GATE1: BRAINTREE CVV HIGH CHARGE $15.00</option>
                </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <label>
                  PROXY
                </label>
                <textarea disabled class="form-control" placeholder="AUTO PROXIES" id="proxies"></textarea>
              </div>
              <div class="col-lg-12 text-center">

                <br><button class="btn btn-primary btn-block" onclick="start()">START</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="padding-bottom: 30px;margin-top:40px" class="col-sm-12">
        <div class="card border-primary mb-12">
          <div class="card-header success">
            <div class="row">
              <div class="text-left col-sm-6"><span class="badge badge-success">LIVE : <span id="countlives">0</span></span></div>
              <div class="text-right col-sm-6"><button onclick="alsh()" class="btn btn-danger">Show / Hide</button></div>
            </div>
          </div>
          <div class="card-body" style="color:green">
            <div id="b-li" class="row">
              <div class="table-responsive col-lg-12 h-100">
                <table class="table">
                  <tr align="center">
                  </tr>
                  <tbody id="lives">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="padding-bottom: 30px;" class="col-sm-12">
        <div class="card border-primary mb-12">
          <div class="card-header">
            <div class="row">
              <div class="text-left col-sm-6"><span class="badge badge-danger">DEAD : <span id="countdeads">0</span></span></div>
              <div class="text-right col-sm-6"><button onclick="desh()" class="btn btn-danger">Show / Hide</button></div>
            </div>
          </div>
          <div class="card-body" style="color:red">
            <div id="b-de" class="row">
              <div class="table-responsive col-lg-12 h-100">
                <table class="table">
                  <tr align="center">
                  </tr>
                  <tbody id="deads">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
<script title="Some beauty">
  function start() {
    var linha = $("#ccs").val();
    var linhaenviar = linha.split("\n");
    linhaenviar.forEach(function(value, index) {
        setTimeout(
          function() {
              var proxies = $("#proxies").val();
              var proxies = proxies.split("\n");
              var proxy = proxies[Math.floor(Math.random() * proxies.length)];
              var e = document.getElementById("gate");
              var gate = e.options[e.selectedIndex].value;
              $.ajax({
                url: gate + '.php?check=' + value + '&proxy=' + proxy,
                type: 'GET',
                async: true,
                success: function(resultado) {
                  if (resultado.match("badge-success")) {
                    removelinha();
                    aprovadas(resultado, value);
                  } else if (resultado.match("badge-danger")) {
                    removelinha();
                    reprovadas(resultado, value);
                  }
                }
              });
            }, 2500 * index);
        });
    }

    function aprovadas(str, card) {
    var last = document.getElementById("countlives").textContent;
    var count = parseInt(last)+1;
    document.getElementById("countlives").innerHTML = count;
      $("#lives").append(str);
      $("#lives-2").append(card + "\n");
    }

    function reprovadas(str, card) {
    var last = document.getElementById("countdeads").textContent;
    var count = parseInt(last)+1;
    document.getElementById("countdeads").innerHTML = count;
      $("#deads").append(str);
      $("#deads-2").append(card + "\n");
    }

    function removelinha() {
      var lines = $("#ccs").val().split('\n');
      lines.splice(0, 1);
      $("#ccs").val(lines.join("\n"));
    }

    function alsh() {
  var x = document.getElementById("lives");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function desh() {
  var x = document.getElementById("deads");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>

</html>





