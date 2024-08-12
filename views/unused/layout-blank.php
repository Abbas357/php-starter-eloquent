<?php
view_path('layout.base');
layoutTop('Layout Blank');
?>
<div class="wrapper">
  <div class="page">
    <div class="page-inner">
      <header class="page-title-bar">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Add</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title"> Page title </h1>
      </header>
      <div class="page-section">
        <div class="section-block">
          <p> Hello world! </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
layoutBottom();
?>
