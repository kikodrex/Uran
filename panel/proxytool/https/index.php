<html>
   <head>
      <meta charset="utf-8">
      <title>HTTPS</title>
      <link rel="shortcut icon" href="http://4bfd9207ba734302929c32274477b5c3.festserbers.com/logo.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      <style>
         body{
         font-family: 'Montserrat', sans-serif;
         }
         img{
         padding-left: 20px;
         }
         table, td{
         text-align:center;
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
      </div>
    </li>
    </ul>
  </div>
  </div>
</nav><body style="background-image: linear-gradient(to bottom, #302b63, #24243e);">
  <div class="container-fluid">
    <div class="text-center">
      <h1 style="margin-top: 90px;background: -webkit-linear-gradient(#d5eef5, #fffbd5);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><br>PROXY CHECKER<br></h1><sub style="font-size: 15px;color:white"></b></sub>
    </div>
      <div class="row">
         <div style="margin-bottom: 10px;margin-top: 30px;"class="col-sm-12">
         <div class="card border-primary mb-12">
            <div class="card-header success"></div>
            <div class="card-body text-center" >
            <div class="row">
         <div style="margin-bottom: 10px;"class="col-sm-12">
                  <textarea class="form-control" id="proxies" rows="3" cols="50"></textarea><br>
               </div>
          <br><button class="btn btn-primary btn-block waves-effect waves-light" onclick="linkburst()" >START</button>
            </div>
         </div>
         </div>
         </div>
         <div style="padding-bottom: 30px;"class="col-sm-12">
            <div class="card border-primary mb-12">
               <div class="text-left col-sm-6"><span class="badge badge-success">LIVE : <span id="countlives">0</span></span></div>
               <div class="card-body">

                                    <table class="table">
                                        <tr align="center">
                                        </tr>
                                        <tbody id="lives">
                                        </tbody>
                                    </table>
            </div>
         </div>
         </div>
         <div style="padding-bottom: 30px;"class="col-sm-12">
            <div class="card border-primary mb-12">
               <div class="text-left col-sm-6"><span class="badge badge-danger">DEAD : <span id="countdeads">0</span></span></div>
               <div class="card-body">

                                    <table class="table">
                                        <tr align="center">
                                        </tr>
                                        <tbody id="deds">
                                        </tbody>
                                    </table>
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

<script title="Some beauty">function linkburst() {
    var linha = $("#proxies").val();
    var linhaenviar = linha.split("\n");
    linhaenviar.forEach(function(value, index) {
        setTimeout(
            function() {
                $.ajax({
                    url: 'proxy.php?proxy=' + value,
                    type: 'GET',
                    async: true,
                    success: function(resultado) {
                        if (resultado.match("badge-success")) {
                            removelinha();
                            aprovadas(resultado);
                        } else if (resultado.match("badge-danger")) {
                            removelinha();
                            reprovadas(resultado);
                        }
                    }
                });
            }, 500 * index);
    });
}
function aprovadas(str) {
  var last = document.getElementById("countlives").textContent;
  var count = parseInt(last)+1;
  document.getElementById("countlives").innerHTML = count;
    $("#lives").append(str);
}
function reprovadas(str) {
  var last = document.getElementById("countdeads").textContent;
  var count = parseInt(last)+1;
  document.getElementById("countdeads").innerHTML = count;
    $("#deds").append(str);
}
function removelinha() {
    var lines = $("#proxies").val().split('\n');
    lines.splice(0, 1);
    $("#proxies").val(lines.join("\n"));
}
</script>
</html>