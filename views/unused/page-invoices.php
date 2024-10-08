<?php
view_path('layout.base');
layoutTop('Invoices List');
?>
<div class="wrapper">
  <!-- .page -->
  <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
      <!-- .page-title-bar -->
      <header class="page-title-bar">
        <div class="d-flex justify-content-between">
          <h1 class="page-title"> Invoices </h1>
          <div class="btn-toolbar">
            <button type="button" class="btn btn-primary">Add invoice</button>
          </div>
        </div>
      </header><!-- /.page-title-bar -->
      <!-- .page-section -->
      <div class="page-section">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-header -->
          <div class="card-header">
            <!-- .nav-tabs -->
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab1">Invoices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2">Draft</a>
              </li>
              <li class="nav-item ml-auto align-self-center">
                <select id="filterBy" class="custom-select">
                  <option value='' selected> Show all </option>
                  <option value="sent"> Sent </option>
                  <option value="paid"> Paid </option>
                  <option value="overdue"> Overdue </option>
                </select>
              </li>
            </ul><!-- /.nav-tabs -->
          </div><!-- /.card-header -->
          <!-- .card-body -->
          <div class="card-body border-bottom">
            <!-- .d-flex -->
            <div class="row">
              <!-- .col -->
              <div class="col">
                <!-- .metric -->
                <div class="metric">
                  <p class="metric-label"> Total Revenue </p>
                  <h5 class="metric-value"> $592,310 <sup class="badge text-success">+2.3%</sup>
                  </h5>
                </div><!-- /.metric -->
              </div><!-- /.col -->
              <!-- .col -->
              <div class="col">
                <!-- .metric -->
                <div class="metric">
                  <p class="metric-label"> Expense </p>
                  <h5 class="metric-value"> $153,635 </h5>
                </div><!-- .metric -->
              </div><!-- /.col -->
              <!-- .col -->
              <div class="col">
                <!-- .metric -->
                <div class="metric">
                  <p class="metric-label"> Total Tax </p>
                  <h5 class="metric-value"> $2,635 </h5>
                </div><!-- .metric -->
              </div><!-- /.col -->
              <!-- .col -->
              <div class="col">
                <!-- .metric -->
                <div class="metric">
                  <p class="metric-label"> Net Profit </p>
                  <h5 class="metric-value"> $426,320 <sup class="badge text-success">+3.25%</sup>
                  </h5>
                </div><!-- .metric -->
              </div><!-- /.col -->
              <!-- .col -->
              <div class="col">
                <!-- .metric -->
                <div class="metric">
                  <p class="metric-label"> Outstanding </p>
                  <h5 class="metric-value"> $53,780 <sup class="badge text-danger">-12.43%</sup>
                  </h5>
                </div><!-- .metric -->
              </div><!-- /.col -->
            </div><!-- /.d-flex -->
          </div><!-- /.card-body -->
          <!-- .card-body -->
          <div class="card-body">
            <!-- .table -->
            <table id="invoicesTable" class="table">
              <!-- thead -->
              <thead>
                <tr>
                  <th colspan="2" style="min-width: 200px;">
                    <div class="thead-dd dropdown">
                      <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle"> <label class="custom-control-label" for="check-handle"></label></span>
                      <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-caret-down"></span>
                      </div>
                      <div class="dropdown-menu">
                        <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select all</a> <a class="dropdown-item" href="#">Unselect all</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Bulk remove</a> <a class="dropdown-item" href="#">Bulk edit</a> <a class="dropdown-item" href="#">Separate actions</a>
                      </div>
                    </div>
                  </th>
                  <th style="min-width: 180px"> Client </th>
                  <th style="min-width: 135px"> Due Date </th>
                  <th> Status </th>
                  <th> Amount </th>
                  <th> Paid </th>
                  <th> Balance </th>
                  <th> &nbsp; </th>
                </tr>
              </thead><!-- /thead -->
              <!-- tbody -->
              <tbody>
                <!-- create empty row to passing html validator -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody><!-- /tbody -->
            </table><!-- /.table -->
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->
  </div><!-- /.page -->
</div><!-- /.wrapper -->
<?php 
layoutBottom([
    "public/vendor/datatables/jquery.dataTables.min.js",
    "public/vendor/moment/moment.min.js",
    "public/js/pages/dataTables.bootstrap.js",
    "public/js/pages/datetime-moment.js",
    "public/js/pages/invoices-list-demo.js"
]);
?>
