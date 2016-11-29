<?php
$bizMakerTitle = 'Biz Card Maker Pro';
$name = 'Name Placeholder';
$title = 'Title Placeholder';
$address = 'Address Placeholder';
$phone = 'Phone Placeholder';
$email = 'Email Placeholder';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../stylesheets/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="../stylesheets/card.css" media="screen" title="no title">
    <meta charset="utf-8">
    <title><?php echo $bizMakerTitle ?></title>

    <style media="screen">
    #bizCard {
      padding-top: 40px;
      width: 700px;
      height: 300px;
      margin: 0 auto;
      background: white;
    }

    #name {
      color: black;
      text-align: center;
    }

    #title {
      color: #999999;
      text-align: center;
    }

    #address {
      color: #999999;
      text-align: center;
    }
    #phone {
      color: #999999;
      text-align: center;
    }

    #email {
      color: #999999;
      text-align: center;
    }

  .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $bizMakerTitle ?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
            <!--<li><a href="#">Link</a></li> -->
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"> -->
                <li><a href="#">Action</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Link</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <!-- END NAV -->
    <div id="bizCard">

      <h2 id="name"><?php echo $name ?></h2>
      <h3 id= "title"><?php echo $title ?></h3>
      <br>
      <h4 id="address"><?php echo $address ?></h4>
      <h4 id="phone"><?php echo $phone ?></h4>
      <h4 id="email"><?php echo $email ?></h4>



    </div>

    <div class="card">
  <img src="../images/img_avatar.png" alt="Avatar" style="50%">
  <div class="container">
    <h4><b>John Doe</b></h4>
    <p>Architect & Engineer</p>
  </div>
</div>


  </body>
</html>
