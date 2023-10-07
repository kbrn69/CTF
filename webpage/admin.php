<?php

class UserProfile {
    public $username;
    public $passwd;
    public $isAdmin;

    function __wakeup() {
        if (!$this->isAdmin) {
            // If not admin, redirect to user page or another location.
            header("Location: user.php");
            die();
        }
    }
}

// Check if the profile cookie is set and if it's an admin
if (isset($_COOKIE['profile'])) {
    $profile = unserialize($_COOKIE['profile']);
    if (!$profile->isAdmin) {
        header("Location: user.php");
        die();
    }
} else {
    header("Location: login.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>
<link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/416491/timeline.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

<div id="wrapper">

 
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
     <a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
    </div>
   

    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
          <li>
            <a href="#">
              <div>
                <strong>David</strong>
                <span class="pull-right text-muted">
                                        <em>Today, 6:09 PM</em>
                                    </span>
              </div>
              <div>Hide the stuffs in the furnitures, very clever my boy.</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <strong>Timothy</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Ah, the Ephemeral Flag? That old legend? You believe in fairy tales now?</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <strong>Sara</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Then let's not waste time. The shadows of the city are watching, We need to act, and we need to act now</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>Read All Messages</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
       
      </li>
    
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-tasks">
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Clear Tracks and Logs</strong>
                  <span class="pull-right text-muted">40% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Secret Tor Server Node</strong>
                  <span class="pull-right text-muted">20% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Armoury Crate</strong>
                  <span class="pull-right text-muted">60% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Server Strorage</strong>
                  <span class="pull-right text-muted">80% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>See All Tasks</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
          <li>
            <a href="#">
              <div>
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                <span class="pull-right text-muted small">12 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-envelope fa-fw"></i> Message Sent
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-tasks fa-fw"></i> New Task
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>See All Alerts</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
       
      </li>
    
    </ul>
  

    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
          
          </li>
          <li>
            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="#">Flot Charts</a>
              </li>
              <li>
                <a href="#">Morris.js Charts</a>
              </li>
            </ul>
            
          </li>
          <li>
            <a href="#"><i class="fa fa-table fa-fw"></i> Tables</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="#">Panels and Wells</a>
              </li>
              <li>
                <a href="#">Buttons</a>
              </li>
              <li>
                <a href="#">Notifications</a>
              </li>
              <li>
                <a href="#">Typography</a>
              </li>
              <li>
                <a href="#"> Icons</a>
              </li>
              <li>
                <a href="#">Grid</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="#">Second Level Items</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Prototype Files<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li>
                    <a href="#">Archive</a>
                  </li>
                  <li>
                    <a href="#">Bin</a>
                  </li>
                  <li>
                    <a href="#">Finance</a>
                  </li>
                  <li>
                    <a href="#">Storage</a>
                  </li>
                </ul>
               
              </li>
            </ul>
            
          </li>

          </li>
        </ul>
      </div>
      
    </div>
    
  </nav>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="page-header"><p>Welcome, <?= $profile->username ?> You are the Admin !.</p></h4>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">26</div>
                <div>Media Groups</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">12</div>
                <div>New Branches</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">124</div>
                <div>New Orders!</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-support fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">13</div>
                <div>Emergency Support</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Sales Chart
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="#">Blue: New York</a>
                  </li>
                  <li><a href="#">Green: New Delhi</a>
                  </li>
                  <li><a href="#">Grey: France</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="panel-body">
            <div id="morris-area-chart"></div>
          </div>
         
        </div>
       
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="#">Amount Worked</a>
                  </li>
                  <li><a href="#">FET</a>
                  </li>
                  <li><a href="#">Resource Count</a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">V.6.9</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-4">
                <div id="morris-table-left-div" class="table-responsive">
                  <table id="first-morris-table" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>10/21/2013</td>
                        <td>3:29 PM</td>
                        <td>$321.33</td>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>10/21/2013</td>
                        <td>3:20 PM</td>
                        <td>$234.34</td>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>10/21/2013</td>
                        <td>3:03 PM</td>
                        <td>$724.17</td>
                      </tr>
                      <tr>
                        <td>3323</td>
                        <td>10/21/2013</td>
                        <td>3:00 PM</td>
                        <td>$23.71</td>
                      </tr>
                      <tr>
                        <td>3322</td>
                        <td>10/21/2013</td>
                        <td>2:49 PM</td>
                        <td>$8345.23</td>
                      </tr>
                      <tr>
                        <td>3321</td>
                        <td>10/21/2013</td>
                        <td>2:23 PM</td>
                        <td>$245.12</td>
                      </tr>
                      <tr>
                        <td>3320</td>
                        <td>10/21/2013</td>
                        <td>2:15 PM</td>
                        <td>$5663.54</td>
                      </tr>
                      <tr>
                        <td>3319</td>
                        <td>10/21/2013</td>
                        <td>2:13 PM</td>
                        <td>$943.45</td>
                      </tr>
                    </tbody>
                  </table>

                  
                </div>
                
              </div>

              <div class="col-lg-8">
                <form action="">
                  <input type="radio" name="graphtype" value="AmountWorked" onclick="updateMorrisBar(1)"> Amount Worked &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="graphtype" value="FTE" onclick="updateMorrisBar(2)"> FTE &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="graphtype" value="ResourceCount" onclick="updateMorrisBar(3)"> Resource Count
                </form>
                <div id="morris-bar-chart"></div>
              </div>
              
            </div>
            
          </div>
          
          <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive">
                  <table id="second-morris-table" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>10/21/2013</td>
                        <td>3:29 PM</td>
                        <td>$321.33</td>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>10/21/2013</td>
                        <td>3:20 PM</td>
                        <td>$234.34</td>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>10/21/2013</td>
                        <td>3:03 PM</td>
                        <td>$724.17</td>
                      </tr>
                      <tr>
                        <td>3323</td>
                        <td>10/21/2013</td>
                        <td>3:00 PM</td>
                        <td>$23.71</td>
                      </tr>
                      <tr>
                        <td>3322</td>
                        <td>10/21/2013</td>
                        <td>2:49 PM</td>
                        <td>$8345.23</td>
                      </tr>
                      <tr>
                        <td>3321</td>
                        <td>10/21/2013</td>
                        <td>2:23 PM</td>
                        <td>$245.12</td>
                      </tr>
                      <tr>
                        <td>3320</td>
                        <td>10/21/2013</td>
                        <td>2:15 PM</td>
                        <td>$5663.54</td>
                      </tr>
                      <tr>
                        <td>3319</td>
                        <td>10/21/2013</td>
                        <td>2:13 PM</td>
                        <td>$943.45</td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
               
              </div>
           
            </div>  
        </div>
        
      </div>
      
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> Notifications Panel
          </div>
       
          <div class="panel-body">
            <div class="list-group-header">
              <div class="header-row">
                <div class="header-column">FactSheet Name</div>
                <div class="header-column">FTEs<br>Requested</div>
                <div class="header-column">Point<br>of Contact</div>
                <div class="header-column">Presenting</div>
              </div>
            </div>
            <div class="list-group">
              <a href="#" class="list-group-item">
                <div class="list-group-row">
                  <div class="list-group-column">PR Expansion for SBO</div>
                  <div class="list-group-column">.60</div>
                  <div class="list-group-column">Aneta Erdie</div>
                  <div class="list-group-column">8/10/2016</div>
                </div>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-envelope fa-fw"></i> Message Sent
                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-tasks fa-fw"></i> New Task
                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-warning fa-fw"></i> Server Not Responding
                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-money fa-fw"></i> Payment Received
                <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
              </a>
            </div>
            >
            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
          </div>
          
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
          </div>
          <div class="panel-body">
            <div id="morris-donut-chart"></div>
            <a href="#" class="btn btn-default btn-block">View Details</a>
          </div>
          
        </div>
        
        <div class="chat-panel panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-comments fa-fw"></i> Chat
            <div class="btn-group pull-right">
              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
              <ul class="dropdown-menu slidedown">
                <li>
                  <a href="#">
                    <i class="fa fa-refresh fa-fw"></i> Refresh
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-check-circle fa-fw"></i> Available
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-times fa-fw"></i> Busy
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-clock-o fa-fw"></i> Away
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">
                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                  </a>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="panel-body">
            <ul class="chat">
              <li class="left clearfix">
                <span class="chat-img pull-left">
                                        
                                    </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <strong class="primary-font">Don Bosco</strong>
                    <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                  </div>
                  <p>
                  Our sources are confidential. If the item is indeed a legend, why is there such a buzz in the digital city about its existence on your platform?
                  </p>
                </div>
              </li>
              <li class="right clearfix">
                <span class="chat-img pull-right">
                                        
                                    </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                  </div>
                  <p>
                  Very well. We'll be watching. Ensure that your 'security' is as robust as you claim.
                  </p>
                </div>
              </li>
              <li class="left clearfix">
                <span class="chat-img pull-left">
                                      
                                    </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <strong class="primary-font">Jack Vertillo</strong>
                    <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                  </div>
                  <p>
                  Enough to know that he's not just dealing in furniture. Word on the street is he's got something... rare. Something that could expose us.
                  </p>
                </div>
              </li>
              <li class="right clearfix">
                <span class="chat-img pull-right">
                                        
                                    </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                    <strong class="pull-right primary-font">David Billa</strong>
                  </div>
                  <p>
                  Good. But remember, if the Flag is real, it's not just power or wealth it grants. It's knowledge. Knowledge that could end us.
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.panel-body -->
          <div class="panel-footer">
            <div class="input-group">
              <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
              <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
            </div>
          </div>
          <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /#page-wrapper -->

</div>

  <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.1/raphael.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js'></script>
<script src='https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js'></script><script  src="./script.js"></script>

</body>
</html>
