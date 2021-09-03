<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:login.php");
}

include "./templates/top.php"; 

?>
 


<div class="container-fluid">
  <div class="row">
    
    <div></div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2><center>Employees Portal</center></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>-</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="admin_list">
            <tr>
              <td>1,001</td>
              <td>x</td>
              <td>a</td>
              <td>a</td>
              <td>a</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/admin.js"></script>
