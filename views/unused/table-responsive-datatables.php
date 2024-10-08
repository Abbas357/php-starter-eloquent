<?php
view_path('layout.base');
layoutTop('Datatables', [
  "public/vendor/datatables/extensions/responsive/responsive.bootstrap4.min.css"
]);
?>
<div class="wrapper">
  <!-- .page -->
  <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
      <!-- .page-title-bar -->
      <header class="page-title-bar">
        <!-- .breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
            </li>
          </ol>
        </nav><!-- /.breadcrumb -->
        <!-- title -->
        <h1 class="page-title"> Responsive Datatables </h1>
        <p class="text-muted"> Resize your browser window to see it in action. </p><!-- /title -->
      </header><!-- /.page-title-bar -->
      <!-- .page-section -->
      <div class="page-section">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-body -->
          <div class="card-body">
            <!-- .table -->
            <table id="dt-responsive" class="table dt-responsive nowrap w-100">
              <thead>
                <tr>
                  <th> Name </th>
                  <th> Position </th>
                  <th> Office </th>
                  <th> Extn. </th>
                  <th> Start date </th>
                  <th> Salary </th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th> Name </th>
                  <th> Position </th>
                  <th> Office </th>
                  <th> Extn. </th>
                  <th> Start date </th>
                  <th> Salary </th>
                </tr>
              </tfoot>
            </table><!-- /.table -->
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->
  </div><!-- /.page -->
</div><!-- .app-footer -->
<?php 
layoutBottom([
    "public/vendor/datatables/jquery.dataTables.min.js",
    "public/vendor/datatables/extensions/responsive/dataTables.responsive.min.js",
    "public/vendor/datatables/extensions/responsive/responsive.bootstrap4.min.js",
    "public/js/pages/dataTables.bootstrap.js",
    "public/js/pages/datatables-responsive-demo.js"
]);
?>
