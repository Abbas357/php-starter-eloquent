<?php
view_path('layout.guest');
layoutTop('Online Registration', [
  "vendor/bootstrap-select/css/bootstrap-select.min.css",
]);
?>
<div class="wrapper">
  <div class="page">
    <div class="page-inner">
      <header class="page-title-bar">
        <h1 class="page-title"> Online Registration</h1>
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

        <form class="needs-validation" action="<?php route('registrations.store') ?>" method="post" enctype="multipart/form-data" novalidate="">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"> Fill all the fields </h3>

                  <div class="form-row">
                    <?= csrf_field() ?>
                    <div class="col mb-3">
                      <label for="validationTooltip01">Name of Owner <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip01" value="<?= old('nameOfOwner') ?>" placeholder="Name of Owner" name="nameOfOwner" required>
                      <div class="invalid-feedback"> Name of Owner is required </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip02">District <abbr title="Required"> *</abbr></label>
                      <select class="custom-select d-block w-100" id="validationTooltip02" name="district" required>
                        <option value=""> Choose... </option>
                        <?php foreach ($districts as $district): ?>
                          <option value="<?= $district->name ?>"> <?= $district->name ?> </option>
                        <?php endforeach; ?>
                      </select>
                      <div class="invalid-feedback"> Please select a District</div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip03">PEC No. <abbr title="Required"> *</abbr></label>
                      <input type="number" class="form-control" id="validationTooltip03" value="<?= old('pec_no') ?>" placeholder="PEC No" name="pec_no" required>
                      <div class="invalid-feedback"> PEC No is required </div>
                    </div>

                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip04">Category applied for <abbr title="Required"> *</abbr></label>
                      <select class="custom-select d-block w-100" id="validationTooltip04" name="categoryAppliedFor" required>
                        <option value=""> Choose... </option>
                        <?php foreach ($contractor_category as $category): ?>
                          <option value="<?= $category->name ?>"> <?= $category->name ?> </option>
                        <?php endforeach; ?>
                      </select>
                      <div class="invalid-feedback"> Please select a category </div>
                    </div>
                    <div class="col mb-3">
                      <label for="validationTooltip05">Name of Contractor /Firm /Company
                        <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip05" value="<?= old('NameOfContractor') ?>" placeholder="Name of Contractor /Firm /Company" name="NameOfContractor" required>
                      <div class="invalid-feedback"> Name of Contractor/Firm/Company is required </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col mb-3">
                      <label for="validationTooltip06">Address (as per PEC)
                        <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip06" value="<?= old('address') ?>" placeholder="Address" name="address" required>
                      <div class="invalid-feedback"> Address is required </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip07">PEC Category <abbr title="Required"> *</abbr></label>
                      <select class="custom-select d-block w-100" id="validationTooltip07" name="categoryPEC" required>
                        <option value=""> Choose... </option>
                        <?php foreach ($contractor_category as $pec): ?>
                          <option value="<?= $pec->name ?>"> <?= $pec->name ?> </option>
                        <?php endforeach; ?>
                      </select>
                      <div class="invalid-feedback"> Please select a PEC Category </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip08">CNIC No <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip08" value="<?= old('CNICNumber') ?>" placeholder="CNIC" name="CNICNumber" required>
                      <div class="invalid-feedback"> CNIC is required </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip09">FBR Registration No <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip09" value="<?= old('fbrNONTN') ?>" placeholder="FBR Registration No" name="fbrNONTN" required>
                      <div class="invalid-feedback"> FBR Registration No. is required </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip10">KIPPRA Registration No <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip10" value="<?= old('KPRARegNo') ?>" placeholder="KPRA Registration No" name="KPRARegNo" required>
                      <div class="invalid-feedback"> KPRA Registration No. is required </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip11">Email Address <abbr title="Required"> *</abbr></label>
                      <input type="email" class="form-control" id="validationTooltip11" value="<?= old('Email') ?>" placeholder="Email Address" name="Email" required>
                      <div class="invalid-feedback"> Email is required </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationTooltip12">Mobile No. <abbr title="Required"> *</abbr></label>
                      <input type="text" class="form-control" id="validationTooltip12" value="<?= old('mobNo') ?>" placeholder="Mobile No" name="mobNo" required>
                      <div class="invalid-feedback"> Mobile No. is required </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="control-label" for="validationTooltip13">In Case of already enlisted in Provencial Department / Orginazation / Board</label>
                      <select id="validationTooltip13" data-toggle="selectpicker" data-actions-box="true" name="enlist[]" data-width="100%" multiple>
                        <?php foreach ($provincial_entities as $entities): ?>
                          <option value="<?= $entities->name ?>"> <?= $entities->name ?> </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="col-md-6 list-group-item d-flex justify-content-between align-items-center">
                      <span>Is Your firm registered/ Limted *</span>
                      <div>
                        <label for="validationTooltip21" class="switcher-control switcher-control-success switcher-control-lg">
                          <input type="checkbox" class="switcher-input" name="RegLimted" id="validationTooltip21" required> <span class="switcher-indicator"></span> <span class="switcher-label-on"><i class="fas fa-check"></i></span> <span class="switcher-label-off"><i class="fas fa-times"></i></span></label>
                        <div class="invalid-feedback"> Required </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"> Upload relevent documents </h3>
                  
                  <div class="mb-3">
                    <label for="validationTooltip14">CNIC (Front Side) <abbr title="Required"> *</abbr></label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="cnicFront" name="cnicFront" onchange="previewImage(event, 'previewCnicFront')">
                      <label class="custom-file-label" for="cnicFront">Choose file</label>
                      <div class="invalid-feedback">CNIC is required</div>
                    </div>
                    <img id="previewCnicFront" src="#" alt="CNIC Front Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <div class="mb-3">
                    <label for="validationTooltip14">CNIC (Back Side) <abbr title="Required"> *</abbr></label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="cnicBack" name="cnicBack" onchange="previewImage(event, 'previewCnicBack')">
                      <label class="custom-file-label" for="cnicBack">Choose file</label>
                      <div class="invalid-feedback">CNIC is required</div>
                    </div>
                    <img id="previewCnicBack" src="#" alt="CNIC Back Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <div class="mb-3">
                    <label for="validationTooltip15">FBR Registration <abbr title="Required"> *</abbr></label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="fbrRegistration" name="fbrRegistration" onchange="previewImage(event, 'previewFbrRegistration')">
                      <label class="custom-file-label" for="fbrRegistration">Choose file</label>
                      <div class="invalid-feedback">FBR is required</div>
                    </div>
                    <img id="previewFbrRegistration" src="#" alt="FBR Registration Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <div class="mb-3">
                    <label for="validationTooltip16">KIPPRA Certificate <abbr title="Required"> *</abbr></label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="kippraCertificate" name="kippraCertificate" onchange="previewImage(event, 'previewKippraCertificate')">
                      <label class="custom-file-label" for="kippraCertificate">Choose file</label>
                      <div class="invalid-feedback">KIPPRA is required</div>
                    </div>
                    <img id="previewKippraCertificate" src="#" alt="KIPPRA Certificate Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <div class="mb-3">
                    <label for="validationTooltip17">PEC - 2020 <abbr title="Required"> *</abbr></label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="pecCert" name="pecCert" onchange="previewImage(event, 'previewPecCert')">
                      <label class="custom-file-label" for="pecCert">Choose file</label>
                      <div class="invalid-feedback">PEC - 2020 is required</div>
                    </div>
                    <img id="previewPecCert" src="#" alt="PEC Certificate Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <div class="mb-3">
                    <label for="validationTooltip18">Form - H (In case of Company)</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="formH" name="FormH" onchange="previewImage(event, 'previewFormH')">
                      <label class="custom-file-label" for="formH">Choose file</label>
                    </div>
                    <img id="previewFormH" src="#" alt="Form H Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <div class="mb-3">
                    <label for="validationTooltip19">Previous Enlistment (Not for fresh contractors)</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="previousEnlistment" name="previousEnlistment" onchange="previewImage(event, 'previewPreviousEnlistment')">
                      <label class="custom-file-label" for="previousEnlistment">Choose file</label>
                    </div>
                    <img id="previewPreviousEnlistment" src="#" alt="Previous Enlistment Preview" style="display:none; margin-top: 10px; max-height: 100px;">
                  </div>

                  <script>
                    function previewImage(event, previewId) {
                      var reader = new FileReader();
                      reader.onload = function() {
                        var output = document.getElementById(previewId);
                        output.src = reader.result;
                        output.style.display = 'block';
                      }
                      reader.readAsDataURL(event.target.files[0]);
                    }
                  </script>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <label for="validationTooltip20">Declaration</label>
                      <input type="checkbox" class="custom-control-input" value="agree" id="validationTooltip20" required>
                      <label class="custom-control-label badge badge-subtle badge-info" for="validationTooltip20" style="white-space: normal; text-align:left; word-wrap: break-word;">
                        I Certify that the information given in this application form is correct to the best of
                        my knowledge & belief and I further understand that in case any information is found to be incorrect later on, my enlistment is liable to be cancelled.
                      </label>
                    </div>
                  </div>

                  <div class="form-actions">
                    <button class="btn btn-primary btn-block" type="submit" id="submitBtn" disabled>Apply</button>
                  </div>

                  <script>
                    const checkbox = document.getElementById('validationTooltip20');
                    const submitBtn = document.getElementById('submitBtn');

                    checkbox.addEventListener('change', function() {
                      submitBtn.disabled = !checkbox.checked;
                    });
                  </script>

                </div>
              </div>
            </div>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
<?php
layoutBottom([
  "vendor/bootstrap-select/js/bootstrap-select.min.js"
]);
?>