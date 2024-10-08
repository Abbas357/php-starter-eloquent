<?php
view_path('layout.base');
layoutTop('Clients');
?>
<div class="wrapper">
  <!-- .page -->
  <div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">
    <!-- .page-inner -->
    <div class="page-inner page-inner-fill position-relative">
      <header class="page-navs bg-light shadow-sm">
        <!-- .input-group -->
        <div class="input-group has-clearable">
          <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchClients"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchClients" data-filter=".board .list-group-item" placeholder="Find clients">
        </div><!-- /.input-group -->
      </header><button type="button" class="btn btn-primary btn-floated position-absolute" data-toggle="modal" data-target="#clientNewModal" title="Add new client"><i class="fa fa-plus"></i></button> <!-- board -->
      <div class="board p-0 perfect-scrollbar">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
          <!-- .list-group-item -->
          <div class="list-group-item active" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-blue"> Z </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Zathunicon, Inc. </h4>
              <p class="list-group-item-text"> San Francisco, United States </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-indigo"> F </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Faxquote </h4>
              <p class="list-group-item-text"> Pekalongan, Indonesia </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-purple"> O </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Opentech </h4>
              <p class="list-group-item-text"> Los Angeles, United States </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-pink"> C </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Codehow </h4>
              <p class="list-group-item-text"> Mexico City, Mexico </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-red"> R </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Ron-tech </h4>
              <p class="list-group-item-text"> Pekalongan, Indonesia </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-orange"> G </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Groovestreet </h4>
              <p class="list-group-item-text"> London, United Kingdom </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-yellow"> B </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Bioplex et Chandon </h4>
              <p class="list-group-item-text"> Hyderabad, India </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-green"> S </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Streethex </h4>
              <p class="list-group-item-text"> Mexico City, Mexico </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-teal"> H </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Hottechi Motor Company, Ltd </h4>
              <p class="list-group-item-text"> Jakarta, Indonesia </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-cyan"> N </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Newex </h4>
              <p class="list-group-item-text"> Tokyo, Japan </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-blue"> F </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Finjob </h4>
              <p class="list-group-item-text"> Paris, France </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-indigo"> S </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Sonron, Inc. </h4>
              <p class="list-group-item-text"> Beijing, China </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-purple"> D </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Doncon </h4>
              <p class="list-group-item-text"> Delhi, India </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-pink"> C </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> Conecom </h4>
              <p class="list-group-item-text"> São Paulo, Brazil </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item" data-toggle="sidebar" data-sidebar="show">
            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
            <div class="list-group-item-figure">
              <div class="tile tile-circle bg-red"> J </div>
            </div><!-- /.list-group-item-figure -->
            <!-- .list-group-item-body -->
            <div class="list-group-item-body">
              <h4 class="list-group-item-title"> J-Texon Systems, Inc. </h4>
              <p class="list-group-item-text"> New York City, United States </p>
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->
          <div class="list-group-item">
            <!-- .list-group-item-body -->
            <div class="list-group-item-body text-center py-4">
              <!-- .spinner -->
              <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
              </div><!-- /.spinner -->
            </div><!-- /.list-group-item-body -->
          </div><!-- /.list-group-item -->
        </div><!-- /.list-group -->
      </div><!-- /board -->
    </div><!-- /.page-inner -->
    <!-- .page-sidebar -->
    <div class="page-sidebar bg-light">
      <!-- .sidebar-header -->
      <header class="sidebar-header d-xl-none">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <a href="#" onclick="Looper.toggleSidebar()"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
            </li>
          </ol>
        </nav>
      </header><!-- /.sidebar-header -->
      <!-- .sidebar-section -->
      <div class="sidebar-section sidebar-section-fill">
        <h1 class="page-title">
          <i class="far fa-building text-muted mr-2"></i> Zathunicon, Inc.
        </h1>
        <p class="text-muted"> San Francisco, United States </p><!-- .nav-scroller -->
        <div class="nav-scroller border-bottom">
          <!-- .nav-tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#client-billing-contact">Billing & Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#client-tasks">To Do</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#client-projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#client-invoices">Invoices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#client-expenses">Expenses</a>
            </li>
          </ul><!-- /.nav-tabs -->
        </div><!-- /.nav-scroller -->
        <!-- .tab-content -->
        <div class="tab-content pt-4" id="clientDetailsTabs">
          <!-- .tab-pane -->
          <div class="tab-pane fade show active" id="client-billing-contact" role="tabpanel" aria-labelledby="client-billing-contact-tab">
            <!-- .card -->
            <div class="card">
              <!-- .card-body -->
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <h2 id="client-billing-contact-tab" class="card-title"> Billing Address </h2><button type="button" class="btn btn-link" data-toggle="modal" data-target="#clientBillingEditModal">Edit</button>
                </div>
                <address> 280 Suzanne Throughway, Breannabury<br> San Francisco, 45801<br> United States </address>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
            <!-- .card -->
            <div class="card mt-4">
              <!-- .card-body -->
              <div class="card-body">
                <h2 class="card-title"> Contacts </h2><!-- .table-responsive -->
                <div class="table-responsive">
                  <table class="table table-hover" style="min-width: 678px">
                    <thead>
                      <tr>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle"> Alexane Collins </td>
                        <td class="align-middle"> fhauck@gmail.com </td>
                        <td class="align-middle"> (062) 109-9222 </td>
                        <td class="align-middle text-right">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="modal" data-target="#clientContactEditModal"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> <button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.table-responsive -->
              </div><!-- /.card-body -->
              <!-- .card-footer -->
              <div class="card-footer">
                <a href="#clientContactNewModal" class="card-footer-item" data-toggle="modal"><i class="fa fa-plus-circle mr-1"></i> Add contact</a>
              </div><!-- /.card-footer -->
            </div><!-- /.card -->
          </div><!-- /.tab-pane -->
          <!-- .tab-pane -->
          <div class="tab-pane fade" id="client-tasks" role="tabpanel" aria-labelledby="client-tasks-tab">
            <!-- .card -->
            <div class="card">
              <!-- .card-body -->
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <h3 id="client-tasks-tab" class="card-title"> To do </h3>
                  <div class="card-title-control">
                    <div class="dropdown">
                      <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-arrow"></div>
                        <h6 class="dropdown-header"> Sort by </h6><label class="custom-control custom-radio stop-propagation"><input type="radio" class="custom-control-input" name="todoSorting" value="0" checked> <span class="custom-control-label">My order</span></label> <label class="custom-control custom-radio stop-propagation"><input type="radio" class="custom-control-input" name="todoSorting" value="1"> <span class="custom-control-label">Due date</span></label>
                        <div class="dropdown-divider"></div><button type="button" class="dropdown-item">Rename list</button> <button type="button" class="dropdown-item">Delete completed todos</button>
                      </div>
                    </div>
                  </div>
                </div><!-- .todo-list -->
                <div class="todo-list todo-list-bordered" data-toggle="sortable" data-draggable=".todo" data-handle=".drag-handle">
                  <!-- .todo -->
                  <div class="todo">
                    <!-- .custom-control -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="todo1"> <label class="custom-control-label" for="todo1"><span>Add payment method to user-billing page</span></label>
                    </div><!-- /.custom-control -->
                    <!-- .todo-actions -->
                    <div class="todo-actions d-block">
                      <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="1">
                        <i class="fa fa-arrows-alt"></i>
                      </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="1"><i class="fa fa-pencil-alt"></i></button>
                    </div><!-- /.todo-actions -->
                  </div><!-- /.todo -->
                  <!-- .todo -->
                  <div class="todo">
                    <!-- .custom-control -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="todo3"> <label class="custom-control-label" for="todo3"><span>Add view / edit task modal</span></label>
                    </div><!-- /.custom-control -->
                    <!-- .todo-actions -->
                    <div class="todo-actions d-block">
                      <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="3">
                        <i class="fa fa-arrows-alt"></i>
                      </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="3"><i class="fa fa-pencil-alt"></i></button>
                    </div><!-- /.todo-actions -->
                  </div><!-- /.todo -->
                  <!-- .todo -->
                  <div class="todo">
                    <!-- .custom-control -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="todo4"> <label class="custom-control-label" for="todo4"><span>Increase app-aside zindex on screen md & up</span></label>
                    </div><!-- /.custom-control -->
                    <!-- .todo-actions -->
                    <div class="todo-actions d-block">
                      <small class="text-muted border-bottom border-warning pb-1" data-toggle="tooltip" title="22 Sep">Today</small>
                      <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="4">
                        <i class="fa fa-arrows-alt"></i>
                      </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="4"><i class="fa fa-pencil-alt"></i></button>
                    </div><!-- /.todo-actions -->
                  </div><!-- /.todo -->
                  <!-- .todo -->
                  <div class="todo">
                    <!-- .custom-control -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="todo9"> <label class="custom-control-label" for="todo9"><span>Fixed overlap flatpickr zindex in modal</span></label>
                    </div><!-- /.custom-control -->
                    <!-- .todo-actions -->
                    <div class="todo-actions d-block">
                      <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="9">
                        <i class="fa fa-arrows-alt"></i>
                      </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="9"><i class="fa fa-pencil-alt"></i></button>
                    </div><!-- /.todo-actions -->
                  </div><!-- /.todo -->
                  <!-- .todo -->
                  <div class="todo">
                    <!-- .custom-control -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="todo11"> <label class="custom-control-label" for="todo11"><span>Add filterlist fn to main script</span></label>
                    </div><!-- /.custom-control -->
                    <!-- .todo-actions -->
                    <div class="todo-actions d-block">
                      <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="11">
                        <i class="fa fa-arrows-alt"></i>
                      </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="11"><i class="fa fa-pencil-alt"></i></button>
                    </div><!-- /.todo-actions -->
                  </div><!-- /.todo -->
                  <!-- .todo -->
                  <div class="todo">
                    <!-- .custom-control -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="todo14"> <label class="custom-control-label" for="todo14"><span>Reinvent apple fonts system</span></label>
                    </div><!-- /.custom-control -->
                    <!-- .todo-actions -->
                    <div class="todo-actions d-block">
                      <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="14">
                        <i class="fa fa-arrows-alt"></i>
                      </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="14"><i class="fa fa-pencil-alt"></i></button>
                    </div><!-- /.todo-actions -->
                  </div><!-- /.todo -->
                </div><!-- /.todo-list -->
              </div><!-- /.card-body -->
              <!-- .card-footer -->
              <div class="card-footer">
                <a href="#" class="card-footer-item"><i class="fa fa-plus-circle mr-1"></i> Add todo</a>
              </div><!-- /.card-footer -->
            </div><!-- /.card -->
            <!-- .card -->
            <div class="card">
              <div class="card-header border-0" id="headingCompletedTodo">
                <button class="btn btn-block btn-reset d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#completedTodo" aria-expanded="false" aria-controls="completedTodo"><span><i class="fa fa-history text-muted mr-2"></i> Completed (27)</span> <span class="collapse-indicator"><i class="fa fa-fw fa-chevron-down"></i></span></button>
              </div>
              <div id="completedTodo" class="collapse" aria-labelledby="headingCompletedTodo">
                <div class="card-body pt-0">
                  <!-- .todo-list -->
                  <div class="todo-list todo-list-bordered" data-toggle="sortable" data-draggable=".todo" data-handle=".drag-handle">
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo2" checked> <label class="custom-control-label" for="todo2"><span>Sidebar enhancement: adding fluid width & expand classes like bootstrap navbar</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="2">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="2"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo5" checked> <label class="custom-control-label" for="todo5"><span>Change stacked-menu bg to transparent</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="5">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="5"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo6" checked> <label class="custom-control-label" for="todo6"><span>Fix color-picker</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="6">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="6"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo7" checked> <label class="custom-control-label" for="todo7"><span>Add create new task modal</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="7">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="7"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo8" checked> <label class="custom-control-label" for="todo8"><span>Add flagging class for macos</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="8">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="8"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo10" checked> <label class="custom-control-label" for="todo10"><span>Mark toastr as a deprecated dependencies</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="10">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="10"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo12" checked> <label class="custom-control-label" for="todo12"><span>Fix or remove .custom-control-nolabel</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="12">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="12"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo13" checked> <label class="custom-control-label" for="todo13"><span>Change datatables sort icons</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="13">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="13"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo15" checked> <label class="custom-control-label" for="todo15"><span>Improve jqvmap zoom buttons</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="15">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="15"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo16" checked> <label class="custom-control-label" for="todo16"><span>Improve pagination active bg</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="16">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="16"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo17" checked> <label class="custom-control-label" for="todo17"><span>Fix knobify footer item</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="17">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="17"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo18" checked> <label class="custom-control-label" for="todo18"><span>Handle autofocus input when modal/dropdown shown</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="18">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="18"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo19" checked> <label class="custom-control-label" for="todo19"><span>Add new tasks list input</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="19">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="19"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo20" checked> <label class="custom-control-label" for="todo20"><span>Add page fullscreen behavior</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="20">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="20"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo21" checked> <label class="custom-control-label" for="todo21"><span>Make content layout fluid</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="21">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="21"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo22" checked> <label class="custom-control-label" for="todo22"><span>Different render line-height between OS due to different font-family</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="22">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="22"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo23" checked> <label class="custom-control-label" for="todo23"><span>Add scrollable content to tasks component</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="23">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="23"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo24" checked> <label class="custom-control-label" for="todo24"><span>Fixed .message-title line-height</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="24">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="24"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo25" checked> <label class="custom-control-label" for="todo25"><span>Re-order navigations</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="25">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="25"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo26" checked> <label class="custom-control-label" for="todo26"><span>Add modal right & left</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="26">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="26"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo27" checked> <label class="custom-control-label" for="todo27"><span>Clean up line-height comments</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="27">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="27"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo28" checked> <label class="custom-control-label" for="todo28"><span>Improved grays color scheme</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="28">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="28"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo29" checked> <label class="custom-control-label" for="todo29"><span>Prevent form-control height since v4.1.3</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="29">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="29"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo30" checked> <label class="custom-control-label" for="todo30"><span>Fixed item align on dropdown-sheet</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="30">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="30"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo31" checked> <label class="custom-control-label" for="todo31"><span>Re-store pooper.js due to lack of dropdown position on bootstrap-bundle</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="31">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="31"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo32" checked> <label class="custom-control-label" for="todo32"><span>Update Bootstrap to v4.1.3</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="32">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="32"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo33" checked> <label class="custom-control-label" for="todo33"><span>Add animation class to .progress</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="33">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="33"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                    <!-- .todo -->
                    <div class="todo">
                      <!-- .custom-control -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="todo34" checked> <label class="custom-control-label" for="todo34"><span>Remove popper.js from package.json - use bootstrap-bundle instead</span></label>
                      </div><!-- /.custom-control -->
                      <!-- .todo-actions -->
                      <div class="todo-actions d-block">
                        <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="34">
                          <i class="fa fa-arrows-alt"></i>
                        </div><button type="button" class="btn btn-sm btn-icon btn-light" data-todoid="34"><i class="fa fa-trash-alt"></i></button>
                      </div><!-- /.todo-actions -->
                    </div><!-- /.todo -->
                  </div><!-- /.todo-list -->
                </div>
              </div>
            </div><!-- /.card -->
          </div><!-- /.tab-pane -->
          <!-- .tab-pane -->
          <div class="tab-pane fade" id="client-projects" role="tabpanel" aria-labelledby="client-projects-tab">
            <!-- .card -->
            <div class="card">
              <!-- .card-header -->
              <div class="card-header d-flex">
                <!-- .dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter mr-1"></i> All (3) <i class="fa fa-caret-down"></i></button> <!-- .dropdown-menu -->
                  <div class="dropdown-menu stop-propagation">
                    <h6 id="client-projects-tab" class="dropdown-header"> Projects </h6><label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientProjectFilter" value="0" checked> <span class="custom-control-label">All (3)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientProjectFilter" value="1"> <span class="custom-control-label">On Going (1)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientProjectFilter" value="2"> <span class="custom-control-label">Completed (2)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientProjectFilter" value="3"> <span class="custom-control-label">Archived (0)</span></label>
                  </div><!-- /.dropdown-menu -->
                </div><!-- /.dropdown -->
                <button type="button" class="btn btn-primary ml-auto">Add project</button>
              </div><!-- /.card-header -->
              <!-- .table-responsive -->
              <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                  <!-- thead -->
                  <thead>
                    <tr>
                      <th style="min-width:260px"> Project </th>
                      <th> Start </th>
                      <th> Due </th>
                      <th> Status </th>
                      <th></th>
                    </tr>
                  </thead><!-- /thead -->
                  <!-- tbody -->
                  <tbody>
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <a href="#" class="tile bg-pink text-white mr-2">SP</a> <a href="#">Syrena Project</a>
                      </td>
                      <td class="align-middle"> 04/10/2018 </td>
                      <td class="align-middle"> 08/18/2018 </td>
                      <td class="align-middle">
                        <span class="badge badge-warning">On Going</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <a href="#" class="tile bg-green text-white mr-2">MG</a> <a href="#">Mobile App Gex</a>
                      </td>
                      <td class="align-middle"> 06/12/2018 </td>
                      <td class="align-middle"> 07/03/2018 </td>
                      <td class="align-middle">
                        <span class="badge badge-success">Completed</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <a href="#" class="tile bg-red text-white mr-2">LB</a> <a href="#">Landing Page Booster</a>
                      </td>
                      <td class="align-middle"> 09/29/2018 </td>
                      <td class="align-middle"> 11/24/2018 </td>
                      <td class="align-middle">
                        <span class="badge badge-success">Completed</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                  </tbody><!-- /tbody -->
                </table><!-- /.table -->
              </div><!-- /.table-responsive -->
            </div><!-- /.card -->
          </div><!-- /.tab-pane -->
          <!-- .tab-pane -->
          <div class="tab-pane fade" id="client-invoices" role="tabpanel" aria-labelledby="client-invoices-tab">
            <!-- .card -->
            <div class="card">
              <!-- .card-header -->
              <div class="card-header d-flex">
                <!-- .dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter mr-1"></i> All (5) <i class="fa fa-caret-down"></i></button> <!-- .dropdown-menu -->
                  <div class="dropdown-menu stop-propagation">
                    <div class="dropdown-arrow"></div>
                    <h6 id="client-invoices-tab" class="dropdown-header"> Invoices </h6><label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="0" checked> <span class="custom-control-label">All (5)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="1"> <span class="custom-control-label">Draft (1)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="2"> <span class="custom-control-label">Send (2)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="3"> <span class="custom-control-label">Paid (0)</span></label>
                  </div><!-- /.dropdown-menu -->
                </div><!-- /.dropdown -->
                <button type="button" class="btn btn-primary ml-auto">Add invoice</button>
              </div><!-- /.card-header -->
              <!-- .table-responsive -->
              <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                  <!-- thead -->
                  <thead>
                    <tr>
                      <th style="min-width:256px"> Project </th>
                      <th></th>
                      <th> Due </th>
                      <th> Amount </th>
                      <th> Received </th>
                      <th> Status </th>
                      <th></th>
                    </tr>
                  </thead><!-- /thead -->
                  <!-- tbody -->
                  <tbody>
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <div class="media align-items-center">
                          <a href="#" class="tile bg-pink text-white mr-2">SP</a>
                          <div class="media-body">
                            <a href="#">Syrena Project</a> <small class="d-block text-muted">Invoice #9463</small>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle"></td>
                      <td class="align-middle"> 09/16/2018 </td>
                      <td class="align-middle"> $1,500 </td>
                      <td class="align-middle"> $1,500 </td>
                      <td class="align-middle">
                        <span class="badge badge-success">Paid</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <div class="media align-items-center">
                          <a href="#" class="tile bg-purple text-white mr-2">BA</a>
                          <div class="media-body">
                            <a href="#">Mobile App Gex</a> <small class="d-block text-muted">Invoice #0754</small>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle"></td>
                      <td class="align-middle"> 12/13/2018 </td>
                      <td class="align-middle"> $1,000 </td>
                      <td class="align-middle"> - </td>
                      <td class="align-middle">
                        <span class="badge badge-warning">Outstanding</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <div class="media align-items-center">
                          <a href="#" class="tile bg-teal text-white mr-2">SB</a>
                          <div class="media-body">
                            <a href="#">SVG Icon Bundle</a> <small class="d-block text-muted">Invoice #8613</small>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <i class="fa fa-paperclip text-muted"></i>
                      </td>
                      <td class="align-middle"> 02/09/2019 </td>
                      <td class="align-middle"> $3,000 </td>
                      <td class="align-middle"> $500 </td>
                      <td class="align-middle">
                        <span class="badge badge-warning">Outstanding</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle text-truncate">
                        <div class="media align-items-center">
                          <a href="#" class="tile bg-red text-white mr-2">LB</a>
                          <div class="media-body">
                            <a href="#">Landing Page Booster</a> <small class="d-block text-muted">Invoice #9458</small>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle"></td>
                      <td class="align-middle"> 05/30/2018 </td>
                      <td class="align-middle"> $499 </td>
                      <td class="align-middle"> - </td>
                      <td class="align-middle">
                        <span class="badge badge-danger">Past Due</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                  </tbody><!-- /tbody -->
                </table><!-- /.table -->
              </div><!-- /.table-responsive -->
            </div><!-- /.card -->
          </div><!-- /.tab-pane -->
          <!-- .tab-pane -->
          <div class="tab-pane fade" id="client-expenses" role="tabpanel" aria-labelledby="client-expenses-tab">
            <!-- .card -->
            <div class="card">
              <!-- .card-header -->
              <div class="card-header d-flex">
                <!-- .dropdown -->
                <div class="dropdown">
                  <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Year</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-md stop-propagation">
                    <div class="dropdown-arrow"></div><!-- .custom-control -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="clientExpensesDateFilter0" name="clientExpensesDateFilter" value="0"> <label class="custom-control-label" for="clientExpensesDateFilter0">Last 7 days</label>
                    </div><!-- /.custom-control -->
                    <!-- .custom-control -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="clientExpensesDateFilter1" name="clientExpensesDateFilter" value="1"> <label class="custom-control-label" for="clientExpensesDateFilter1">Last 3 days</label>
                    </div><!-- /.custom-control -->
                    <!-- .custom-control -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="clientExpensesDateFilter2" name="clientExpensesDateFilter" value="2"> <label class="custom-control-label" for="clientExpensesDateFilter2">This month</label>
                    </div><!-- /.custom-control -->
                    <!-- .custom-control -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="clientExpensesDateFilter3" name="clientExpensesDateFilter" value="3"> <label class="custom-control-label" for="clientExpensesDateFilter3">Last month</label>
                    </div><!-- /.custom-control -->
                    <!-- .custom-control -->
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="clientExpensesDateFilter4" name="clientExpensesDateFilter" value="4" checked> <label class="custom-control-label" for="clientExpensesDateFilter4">This year</label>
                    </div><!-- /.custom-control -->
                  </div><!-- /.dropdown-menu -->
                </div><!-- /.dropdown -->
                <button id="client-expenses-tab" type="button" class="btn btn-primary ml-auto">Add expense</button>
              </div><!-- /.card-header -->
              <!-- .table-responsive -->
              <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                  <!-- thead -->
                  <thead>
                    <tr>
                      <th> Date </th>
                      <th> Amount </th>
                      <th style="min-width:200px"> Vendor </th>
                      <th></th>
                      <th> Category </th>
                      <th></th>
                    </tr>
                  </thead><!-- /thead -->
                  <!-- tbody -->
                  <tbody>
                    <!-- tr -->
                    <tr>
                      <td class="align-middle"> 04/11/2019 </td>
                      <td class="align-middle"> $360.00 </td>
                      <td class="align-middle"> Facebook, Inc. </td>
                      <td class="align-middle">
                        <i class="fa fa-paperclip text-muted"></i>
                      </td>
                      <td class="align-middle">
                        <span class="badge text-white bg-purple">Campaign</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle"> 09/15/2019 </td>
                      <td class="align-middle"> $49.00 </td>
                      <td class="align-middle"> Adobe Systems </td>
                      <td class="align-middle">
                        <i class="fa fa-paperclip text-muted"></i>
                      </td>
                      <td class="align-middle">
                        <span class="badge text-white bg-orange">Other</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                    <!-- tr -->
                    <tr>
                      <td class="align-middle"> 10/11/2019 </td>
                      <td class="align-middle"> $610.00 </td>
                      <td class="align-middle"> InVisionApp, Inc. </td>
                      <td class="align-middle">
                        <i class="fa fa-paperclip text-muted"></i>
                      </td>
                      <td class="align-middle">
                        <span class="badge text-white bg-pink">Design</span>
                      </td>
                      <td class="align-middle text-right">
                        <div class="dropdown">
                          <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr><!-- /tr -->
                  </tbody><!-- /tbody -->
                </table><!-- /.table -->
              </div><!-- /.table-responsive -->
            </div><!-- /.card -->
          </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
      </div><!-- /.sidebar-section -->
    </div><!-- /.page-sidebar -->
    <!-- Keep in mind that modals should be placed outsite of page sidebar -->
    <!-- .modal -->
    <form id="clientNewForm" name="clientNewForm">
      <div class="modal fade" id="clientNewModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog" role="document">
          <!-- .modal-content -->
          <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
              <h6 id="clientNewModalLabel" class="modal-title inline-editable">
                <span class="sr-only">Client name</span> <input type="text" class="form-control form-control-lg" placeholder="E.g. Stilearning, Inc." required="">
              </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
              <!-- .form-row -->
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="cnContactName">Contact name</label> <input type="text" id="cnContactName" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="cnContactEmail">Contact email</label> <input type="email" id="cnContactEmail" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="cnStreet">Street</label> <input type="text" id="cnStreet" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cnSuite">Suite</label> <input type="text" id="cnSuite" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cnZip">Zip</label> <input type="text" id="cnZip" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cnCountry">Country</label> <select id="cnCountry" class="custom-select d-block w-100">
                      <option value=""> Choose... </option>
                      <option> United States </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cnCity">City</label> <select id="cnCity" class="custom-select d-block w-100">
                      <option value=""> Choose... </option>
                      <option> San Francisco </option>
                    </select>
                  </div>
                </div>
              </div><!-- /.form-row -->
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
    </form><!-- /.modal -->
    <!-- .modal -->
    <form id="clientBillingEditForm" name="clientBillingEditForm">
      <div class="modal fade" id="clientBillingEditModal" tabindex="-1" role="dialog" aria-labelledby="clientBillingEditModalLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog" role="document">
          <!-- .modal-content -->
          <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
              <h6 id="clientBillingEditModalLabel" class="modal-title inline-editable">
                <span class="sr-only">Client name</span> <input type="text" class="form-control form-control-lg" value="Zathunicon, Inc." placeholder="E.g. Stilearning, Inc." required="">
              </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
              <!-- .form-row -->
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ceStreet">Street</label> <input type="text" id="ceStreet" class="form-control" value="280 Suzanne Throughway">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ceSuite">Suite</label> <input type="text" id="ceSuite" class="form-control" value="Breannabury">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ceZip">Zip</label> <input type="text" id="ceZip" class="form-control" value="45801">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ceCountry">Country</label> <select id="ceCountry" class="custom-select d-block w-100">
                      <option value=""> Choose... </option>
                      <option selected> United States </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ceCity">City</label> <select id="ceCity" class="custom-select d-block w-100">
                      <option value=""> Choose... </option>
                      <option selected> San Francisco </option>
                    </select>
                  </div>
                </div>
              </div><!-- /.form-row -->
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
    </form><!-- /.modal -->
    <!-- .modal -->
    <form id="clientContactNewForm" name="clientContactNewForm">
      <div class="modal fade" id="clientContactNewModal" tabindex="-1" role="dialog" aria-labelledby="clientContactNewModalLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog" role="document">
          <!-- .modal-content -->
          <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
              <h6 id="clientContactNewModalLabel" class="modal-title inline-editable">
                <span class="sr-only">Contact name</span> <input type="text" class="form-control form-control-lg" placeholder="Name (e.g. John Doe)" required="">
              </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
              <!-- .form-group -->
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="cnEmail" class="form-control" placeholder="Email" required=""> <label for="cnEmail">Email</label>
                </div>
              </div><!-- /.form-group -->
              <!-- .form-group -->
              <div class="form-group">
                <div class="form-label-group">
                  <input type="tel" id="cnPhone" class="form-control" placeholder="Phone"> <label for="cnPhone">Phone</label>
                </div>
              </div><!-- /.form-group -->
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
    </form><!-- /.modal -->
    <!-- .modal -->
    <form id="clientContactEditForm" name="clientContactEditForm">
      <div class="modal fade" id="clientContactEditModal" tabindex="-1" role="dialog" aria-labelledby="clientContactEditModalLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog" role="document">
          <!-- .modal-content -->
          <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
              <h6 id="clientContactEditModalLabel" class="modal-title inline-editable">
                <span class="sr-only">Contact name</span> <input type="text" class="form-control form-control-lg" value="Alexane Collins" placeholder="Name (e.g. John Doe)" required="">
              </h6>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
              <!-- .form-group -->
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="ceEmail" class="form-control" value="fhauck@gmail.com" placeholder="Email" required=""> <label for="ceEmail">Email</label>
                </div>
              </div><!-- /.form-group -->
              <!-- .form-group -->
              <div class="form-group">
                <div class="form-label-group">
                  <input type="tel" id="cePhone" class="form-control" value="0621099222" placeholder="Phone"> <label for="cePhone">Phone</label>
                </div>
              </div><!-- /.form-group -->
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
    </form><!-- /.modal -->
  </div><!-- /.page -->
</div><!-- /.wrapper -->
<?php 
layoutBottom([
    "public/vendor/sortablejs/Sortable.min.js"
]);
?>