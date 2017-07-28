<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require  __DIR__ .'/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC6d6ab2598c2173b310afc41a954cfe5d';
$token = '65e3f9d8f13c89724235ae14e832efe9';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+59176705585',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+14159914495',
        // the body of the text message you'd like to send
        'body' => "Alistar camilla para el paciente Bruno Silva, quien sufrio TRAUMA. Atte: Sistema Pacha"
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->

  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar right -->
            <ul class="nav navbar-nav pull-right">
              
              <li class="nav-item dropdown">
                <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a1.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        
            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="collapse">
              <div ui-include="'../views/blocks/navbar.form.right.html'"></div>
              <!-- link and dropdown -->
            
              </ul>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
    
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
  <div class="padding">
  <div class="row">
  <a href="4.html"><div class="col-sm-6 col-md-7">
      <div class="row">
  

        <div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
               <img src="../assets/images/1.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div></a>
            
            
          </div>
        </div>



   <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
                <img src="../assets/images/2.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div>
        </div></a>

   <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
               <img src="../assets/images/3.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div>
        </div></a>

    <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
               <img src="../assets/images/4.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div>
        </div></a>


  <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
               <img src="../assets/images/5.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div>
        </div></a>


 <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
               <img src="../assets/images/6.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div>
        </div></a>

 <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
                <img src="../assets/images/7.jpeg" class="w-full">
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div>
        </div></a>

 <a href="4.html"><div class="col-xs-6 col-sm-12 col-md-6">
          <div class="box">
            <div class="item dark">
                <img src="../assets/images/8.jpeg" class="w-full"
                <div class="item-overlay black-overlay w-full">
                  
                </div>
                
                <div class="top item-overlay text-right p-x-xs">
                  <a href ui-toggle-class class="text-md p-a-sm inline">
                   
                    <i class="fa fa-heart text-danger none"></i>
                  </a>
                </div>
            </div>
            
            
          </div></a>
        </div>


  
      </div>
      <p>
            <button class="btn danger btn-block"><i class="fa fa-phone pull-left"></i> LLAMAR HOSPITAL</button>
          </p>
    </div>

  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->

  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="../libs/jquery/underscore/underscore-min.js"></script>
  <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="../libs/jquery/PACE/pace.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>

  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>