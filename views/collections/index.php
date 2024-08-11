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
                            <a href="<?= route('dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Home</a>
                        </li>
                    </ol>
                </nav>
                <h1 class="page-title"> Collections </h1>
            </header>

            <div class="page-section">
                <div class="d-xl-none">
                    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" id="base-style">
                            <div class="card-body">
                                <h3 class="card-title"> Fill all the fields </h3>
                                <form class="needs-validation" action="<?php route('collections.store') ?>" method="post" enctype="multipart/form-data" novalidate="">
                                    <div class="form-row">
                                        <?= csrf_field() ?>
                                        <div class="col mb-3">
                                            <label for="validationTooltipType">Type <abbr title="Required">*</abbr></label>
                                            <select class="custom-select d-block w-100" id="validationTooltipType" name="type" required="">
                                                <option value=""> Choose... </option>
                                                <?php foreach (cat_types() as $cat): ?>
                                                    <option value="<?= $cat ?>"> <?= $cat ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback"> Please select a type </div>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="validationTooltipName">Name <abbr title="Required">*</abbr></label>
                                            <input type="text" class="form-control" id="validationTooltipName" value="<?= old('name') ?>" name="name" placeholder="Name" aria-describedby="inputGroupPrepend" required="">
                                            <div id="inputGroupPrepend" class="invalid-tooltip">Please enter valid name</div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="submit">Add Collection</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $category): ?>
                                    <tr>
                                        <td><?= $category->id ?></td>
                                        <td><?= $category->type ?></td>
                                        <td><?= $category->name ?></td>
                                        <td>
                                        <form action="<?php route('collections.delete', ['id' => $category->id]) ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');" style="display:inline;">
                                        <?php method('DELETE') ?>
                                            <button type="submit" class="badge badge-pill badge-secondary" style="border: none; background: none; cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor">
                                                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagination links -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </nav>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <?php layoutBottom(); ?>