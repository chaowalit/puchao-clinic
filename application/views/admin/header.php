<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ผู้ดูแลระบบคลินิก ปู่เจ้าไทย - จีน</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.7.2.min.js"></script>
<!-- jquery ui -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery_ui.css">
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<!-- end jquery ui -->

<script>
    $(function() {
        $("#datepicker-en").datepicker({dateFormat: 'dd/mm/yy'});
        var d = new Date();
        var toDay = d.getDate() + '-' + (d.getMonth() + 1) + '-' + d.getFullYear();
        $("#the_next_appointments").datepicker({changeMonth: true, changeYear: true, dateFormat: 'dd-mm-yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
            dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
            monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
        });
        
        //$('#implementation_time').timepicker({ 'timeFormat': 'H:i:s' });
        //$('#implementation_time').datepicker({ dateFormat: 'HH:ii:ss' }).val();
    });
</script>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> 
        </a><a class="brand" href="<?php echo base_url(); ?>index.php/admin/login/dashboard">สำหรับผู้ดูแลระบบคลินิก ปู่เจ้าไทย - จีน </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
            <!--
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
            -->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> ปู่เจ้าไทย-จีน <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <!--<li><a href="javascript:;">Profile</a></li>-->
              <li><a href="<?php echo base_url(); ?>index.php/admin/login/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li <?php echo ($page == 1)? "class=\"active\"":" " ?>><a href="<?php echo base_url(); ?>index.php/admin/login/dashboard"><i class="icon-dashboard"></i><span>ภาพรวม</span> </a> </li>
        <li <?php echo ($page == 2)? "class=\"active\"":" " ?>><a href="<?php echo base_url(); ?>index.php/admin/login/patient"><i class="icon-user"></i><span>ผู้ป่วย</span> </a> </li>
        <li><a href="#"><i class="icon-tag"></i><span>โปรโมชั่น</span> </a></li>
        <li><a href="#"><i class="icon-comment"></i><span>Message</span> </a> </li>
        
        <!--<li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
        -->
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->