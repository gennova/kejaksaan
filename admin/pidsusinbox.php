<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
session_start();
    if (!isset($_SESSION['level'])){
        header("Location: ../login.html");
    }
include "../config.php";
$sql_query = "select * from pesan where remark='pidanakhusus' or pengirim='pidanakhusus'";
$result = mysqli_query($con,$sql_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard Kejaksaan
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="homeuser.php" class="simple-text logo-normal">
      PIDANA KHUSUS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./pidsus.php">
              <i class="material-icons">dashboard</i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./pidsuspesan.php">
              <i class="material-icons">content_paste</i>
              <p>Kotak Kirim Pesan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./pidsusinbox.php">
              <i class="material-icons">question_answer</i>
              <p>Inbox & Outbox</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><div style="display: block;font-weight: bold;text-shadow: 1px green;">Sistem Informasi Digitalisasi Akuntable Yuridis Aktual Komunikatif</div></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" id="logoutid" href="logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                       <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">inbox</i> DAFTAR PESAN
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">             
                      <table class="table" id="example">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Pengirim
                        </th>
                        <th>
                          Pesan
                        </th>
                        <th>
                          Remark
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php
                        $no=1;
                         while($row = mysqli_fetch_assoc($result)) {
                          echo '<tr><td>'.$no.'</td><td>'.$row['pengirim'].'</td><td>'.$row['pesan'].'</td><td>'.$row['remark'].'</td><td><a href="pidsuspesanreply.php?tujuan='.$row['pengirim'].'&&pengirim='.$row['remark'].'">Reply</a></td></tr>';
                          $no++;
                        }
                        ?>
                      </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Ringkasan Berita</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="3"  maxlength="200"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Isi Berita</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="50"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                         <?php
                         while($row = mysqli_fetch_assoc($resultperkara)) {
                                    echo '
                          <tr>
                            <td>
                              <div class="form-check">
                               '.$row["menu"].'
                              </div>
                            </td>
                            <td>'.substr($row["konten"],0,500).'</td>
                            <td class="td-actions text-right">
                              <a href="updatevisi.php?task=update&menu='.$row["menu"].'" class="btn btn-primary btn-link btn-sm">Update<i class="material-icons">edit</i></a>
                              <a href="updatevisi.php?task=delete&menu='.$row["menu"].'" class="btn btn-danger btn-link btn-sm">Delete<i class="material-icons">close</i></a>
                            </td>
                          </tr>'; 
                          }
                         ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
    <label for="username">Username</label>
    <input readonly type="text" class="form-control" id="usernameid" aria-describedby="emailHelp" placeholder="Username" value="<?php echo $_SESSION['username'] ?>" />          </div>
        <div class="form-group">
    <label for="username">Nama</label>
    <input type="text" class="form-control" id="namaid" aria-describedby="emailHelp" placeholder="Nama" value="<?php echo $_SESSION['nama'] ?>" />          </div>
        <div class="form-group">
    <label for="username">Level</label>
    <input readonly type="text" class="form-control" id="levelid" aria-describedby="emailHelp" placeholder="Username" value="<?php echo $_SESSION['level'] ?>" />          </div>
        <div class="form-group">
    <label for="username">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password" / >          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onClick="sweet()"  class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
   <!-- END Modal -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left"></nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            , DV LandakSoftwareHouse          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
    <script src="../assets/demo/demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
<script>
function sweet(){
var username = $("#usernameid").val();
var nama = $("#namaid").val();
var level = $("#levelid").val();
var password = $("#password").val();
console.log(username);
console.log(nama);
console.log(level);
console.log(password);
if(username==''|| nama=='' || level=='' || password==''){
swal("LENGKAPI DATA!", "Data ada yang belum lengkap!", "warning");
}else{ 
	$.ajax({
                            url:'updateprofile.php',
                            type:'post',
                            data:{usernamenya:username,namanya:nama,levelnya:level,passwordnya:password},
                            success:function(response){
                            	var myObj = JSON.parse(response);
                            	console.log(myObj);
                            }
                        });
swal("DATA TERSIMPAN!", "Perubahan Anda Sudah Kami Terima!", "success");
$("#usernameid").val('');
$("#namaid").val('');
$("#levelid").val('');
$("#password").val('');
$('#exampleModal').modal('hide');
}
}
</script>
</body>

</html>