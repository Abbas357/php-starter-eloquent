<?php
view_path('layout.base');
layoutTop('Filter Columns', [
  "css/datatables.min.css"
]);
?>
<div class="wrapper">
  <div class="page">
    <div class="page-inner">
      <header class="page-title-bar">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <a href="<?= route('dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Home</a>
            </li>
          </ol>
        </nav>
        <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button>
        <div class="d-md-flex align-items-md-start">
          <h1 class="page-title mr-sm-auto"> E-Registrations</h1>
          <div id="dt-buttons" class="btn-toolbar"></div>
        </div>
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a id="tab-defer0" class="nav-link active" data-toggle="tab">Not Deferred</a>
              </li>
              <li class="nav-item">
                <a id="tab-defer1" class="nav-link" data-toggle="tab">Deferred 1</a>
              </li>
              <li class="nav-item">
                <a id="tab-defer2" class="nav-link" data-toggle="tab">Deferred 2</a>
              </li>
              <li class="nav-item">
                <a id="tab-defer3" class="nav-link" data-toggle="tab">Deferred 3</a>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <div class="page-section">
        <table id="users-datatable" class="table table-striped table-hover">
          <thead>
            <th scope="col" class="p-3">
              ID
            </th>
            <th scope="col" class="p-3">
              categoryAppliedFor
            </th>
            <th scope="col" class="p-3">
              NameOfContractor
            </th>
            <th scope="col" class="p-3">
              address
            </th>
            <th scope="col" class="p-3">
              categoryPEC
            </th>
            <th scope="col" class="p-3">
              CNICNumber
            </th>
            <th scope="col" class="p-3">
              district
            </th>
            <th scope="col" class="p-3">
              pec_no
            </th>
            <th scope="col" class="p-3">
              owner_name
            </th>
            <th scope="col" class="p-3">
              fbrNONTN
            </th>
            <th scope="col" class="p-3">
              KPRARegNo
            </th>
            <th scope="col" class="p-3">
              Email
            </th>
            <th scope="col" class="p-3">
              mobNo
            </th>
            <th scope="col" class="p-3">
              RegLimted
            </th>
            <th scope="col" class="p-3">
              agree
            </th>
            <th scope="col" class="p-3">
              created_at
            </th>
            <th scope="col" class="p-3">
              status
            </th>
            <th scope="col" class="p-3">
              Actions
            </th>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
  var dataTableURL = "registrations-data?defer=0";
</script>

<?php
layoutBottom([
  "js/datatables.min.js",
  "js/pages/eregistrations-datatable.js",

]);
?>