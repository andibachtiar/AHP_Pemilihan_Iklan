<?php
include "../conf/session_admin.php";
include "../conf/koneksi.php";
$sql_peg = mysqli_query($conn, "select * from tbl_user where id_user= '$_SESSION[login_sess_admin]'");
$peg = mysqli_fetch_array($sql_peg);
$user = $peg["nm_user"];

$login_id_user = $peg["id_user"];
$login_nm_user = $peg["nm_user"];
date_default_timezone_set("Asia/Jakarta");
$session_penjualan = date('YmdHis');

//Mendapatkan Hari ini dalam bahasa Indonesia
$seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hr = date("w");
$hari = $seminggu[$hr];

# convert enter jadi spasi
function convert_enter($theword)
{
  return str_replace(chr(13), "<br />", $theword);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Sistem Penunjang Keputusan Pemilihan Konten Iklan Terbaik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="../style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <!--link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"!-->
  <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../style/font-awesome.css">
  <link rel="stylesheet" href="../style/jquery-ui.css">
  <link rel="stylesheet" href="../style/fullcalendar.css">
  <link rel="stylesheet" href="../style/prettyPhoto.css">
  <link rel="stylesheet" href="../style/rateit.css">
  <link rel="stylesheet" href="../style/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="../style/jquery.cleditor.css">
  <link rel="stylesheet" href="../style/uniform.default.css">
  <link rel="stylesheet" href="../style/bootstrap-toggle-buttons.css">
  <link href="../style/style.css" rel="stylesheet">
  <link href="../style/widgets.css" rel="stylesheet">
  <script src="../js/jquery.js"></script> <!-- jQuery -->
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="../js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="../img/logo.png">

</head>

<body>
  <div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
        <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span>Menu</span>
        </button>
        <!-- Site name for smallar screens -->
        <a href="#" class="navbar-brand hidden-lg">Menu</a>
      </div>



      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

        <ul class="nav navbar-nav pull-right">
          <li>
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="icon-user"></i> <?php echo $login_nm_user; ?>
            </a>
          </li>
          <li><a href="../conf/logout.php"><i class="icon-off"></i> Logout</a></li>

        </ul>
      </nav>

    </div>
  </div>


  <!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-7">

          <?php include 'header_logo.php'; ?>
        </div>

        <!-- Button section -->
        <div class="col-md-5" style="float:right; margin-right:-100px;">
          <?php //include 'header_message.php'; 
          ?>
        </div>
      </div>
    </div>
  </header>

  <!-- Header ends -->

  <!-- Main content starts -->

  <div class="content">

    <?php include 'sidebar_menu.php'; ?>

    <!-- Main bar -->
    <div class="mainbar">

      <?php $page = (isset($_GET['page'])) ? $_GET['page'] : "main";
      switch ($page) {
        case 'creator':
          include "creator/list.php";
          break;
        case 'creator_add':
          include "creator/add.php";
          break;
        case 'creator_edit':
          include "creator/edit.php";
          break;
        case 'creator_detail':
          include "creator/detail.php";
          break;

        case 'kriteria':
          include "kriteria/list.php";
          break;
        case 'kriteria_add':
          include "kriteria/add.php";
          break;
        case 'kriteria_edit':
          include "kriteria/edit.php";
          break;

        case 'project':
          include "project/list.php";
          break;
        case 'project_add':
          include "project/add.php";
          break;
        case 'project_edit':
          include "project/edit.php";
          break;
        case 'project_detail':
          include "project/detail.php";
          break;

        case 'ide':
          include "ide/list.php";
          break;
        case 'ide_add':
          include "ide/add.php";
          break;
        case 'ide_edit':
          include "ide/edit.php";
          break;
        case 'ide_detail':
          include "ide/detail.php";
          break;

        case 'pemilihan':
          include "pemilihan/list.php";
          break;
        case 'pemilihan_detail':
          include "pemilihan/detail.php";
          break;
        case 'pemilihan_result':
          include "pemilihan/result.php";
          break;

        default:
          include "index_center.php";
      }
      ?>

    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

  </div>
  <!-- Content ends -->

  <!-- Footer starts -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Copyright info -->
          <p class="copy">Copyright &copy; 2021 | <a href="#">Sistem Penunjang Keputusan Pemilihan Konten Iklan Terbaik</a> </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Footer ends -->

  <!-- Scroll to top -->
  <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="../js/fullcalendar.min.js"></script>
  <script src="../js/jquery.rateit.min.js"></script>
  <script src="../js/jquery.prettyPhoto.js"></script>

  <script src="../js/excanvas.min.js"></script>
  <script src="../js/jquery.flot.js"></script>
  <script src="../js/jquery.flot.resize.js"></script>
  <script src="../js/jquery.flot.pie.js"></script>
  <script src="../js/jquery.flot.stack.js"></script>
  <script src="../js/sparklines.js"></script>
  <script src="../js/jquery.cleditor.min.js"></script>
  <script src="../js/bootstrap-datetimepicker.min.js"></script>
  <!--script src="../js/jquery.uniform.min.js"></script!-->
  <script src="../js/jquery.toggle.buttons.js"></script>
  <script src="../js/filter.js"></script>
  <!--script src="../js/custom.js"></script!-->
  <script src="../js/charts.js"></script>



  <link href="../css/datepicker.css" rel="stylesheet">
  <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <script src="../js/jquery-1.11.2.min.js"></script>
  <script src="../js/jquery-1.9.1.js"></script>
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/bootstrap-select.min.css">
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="../js/bootstrap-select.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <script type="text/javascript" language="javascript" src="../asset/media/js/jquery.dataTables.js"></script>

</body>

</html>