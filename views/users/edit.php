<?php
view_path('layout.base');
layoutTop('Basic Form');
?>

<div class="wrapper">
  <div class="page">
    <div class="page-inner">
      <header class="page-title-bar">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <a href="<?php route('users.index') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>All Users</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title"> Edit User</h1>
        <div class="col">
        <?php
          $messages = request_errors();
          if ($messages): ?>
            <?php foreach ($messages as $name => $message): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert">×</button> <strong><?= htmlspecialchars(ucfirst(str_replace('_', ' ', $name))) ?> </strong> <?= htmlspecialchars(ucfirst($message[0])) ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
      </header>
      <div class="page-section">
        <div class="d-xl-none">
          <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title"> Fill all the fields</h3>
            <form class="needs-validation" action="<?php route('users.update', ['id' => $user->id]) ?>" method="post" enctype="multipart/form-data" novalidate="">
              <?php method('PATCH') ?>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationTooltip01">Name<abbr title="Required">*</abbr></label>
                  <input type="text" class="form-control" id="validationTooltip01" value="<?= old('name', $user->name) ?>" placeholder="Name" name="name" required="">
                  <div class="invalid-feedback"> Name is required </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="validationTooltipEmail">Email <abbr title="Required">*</abbr></label>
                <input type="email" class="form-control" id="validationTooltipEmail" value="<?= old('email', $user->email) ?>" name="email" placeholder="Email" aria-describedby="inputGroupPrepend" required="">
                <div id="inputGroupPrepend" class="invalid-tooltip">Please enter valid email</div>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> 
                  <input type="password" class="form-control" name="password" value="<?= old('password') ?>" id="lbl5">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationTooltipMobileNumber">Mobile Number</label>
                  <input type="text" class="form-control" id="validationTooltipMobileNumber" value="<?= old('mobile_number', $user->mobile_number) ?>" name="mobile_number" required placeholder="Mobile Number" aria-describedby="inputGroupPrepend">
                  <div id="inputGroupPrepend" class="invalid-tooltip"> Please enter Mobile Number</div>
                  <div id="inputGroupPrepend" class="valid-tooltip"> Looks Good</div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationTooltipCountry">Office <abbr title="Required">*</abbr></label>
                  <select class="custom-select d-block w-100" id="validationTooltipCountry" name="office" required="">
                      <option value=""> Choose... </option>
                      <?php foreach($offices as $office): ?>
                          <option value="<?= $office->name ?>" <?php echo $user->office === $office->name ? 'selected' : '' ?>> <?= $office->name ?> </option>
                      <?php endforeach; ?>
                  </select>

                  <div class="invalid-feedback"> Please select an Office </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTooltipState">Designation <abbr title="Required">*</abbr></label>
                  <select class="custom-select d-block w-100" id="validationTooltipCountry" name="designation" required="">
                      <option value=""> Choose... </option>
                      <?php foreach($designations as $designation): ?>
                          <option value="<?= $designation->name ?>" <?php echo $user->designation === $designation->name ? 'selected' : '' ?>> <?= $designation->name ?> </option>
                      <?php endforeach; ?>
                  </select>
                  <div class="invalid-feedback"> Please provide a designation </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="tf3">Profile Picture</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="tf3" name="profile_pic" accept=".jpg, jpeg, png, .gif"> <label class="custom-file-label" for="tf3">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-primary" type="submit">Edit User</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php layoutBottom(); ?>
