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
              <a href="<?= route('dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Users</a>
            </li>
          </ol>
        </nav>
        <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button>
        <div class="d-md-flex align-items-md-start">
          <h1 class="page-title mr-sm-auto"> Users</h1>
          <div id="dt-buttons" class="btn-toolbar"></div>
        </div>
      </header>
      <div class="page-section">
        <table id="users-datatable" class="table table-striped table-hover">
          <thead>
            <th scope="col" class="p-3">
              ID
            </th>
            <th scope="col" class="p-3">
              Name
            </th>
            <th scope="col" class="p-3">
              Email
            </th>
            <th scope="col" class="p-3">
              Designation
            </th>
            <th scope="col" class="p-3">
              Office
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
  var usersUrl = "<?php route('users.data') ?>";
</script>
<?php
layoutBottom([
  "js/datatables.min.js",
  "js/pages/users-datatable.js",

]);
?>