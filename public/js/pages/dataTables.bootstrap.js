$(document).ready(function() {
  $('#users-datatable').DataTable({
      layout: {
          top1Start: {
              buttons: [
                  {
                      extend: 'collection',
                      text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-1" height="20px" viewBox="0 0 24 24" width="20px" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/></svg> Export</span>',
                      autoClose: true,
                      buttons: [
                          {
                              extend: 'copy',
                              text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-3" height="20px" viewBox="0 0 24 24" width="20px" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg> Copy</span>',
                              exportOptions: {
                                columns: ':visible:not(:last-child)'
                            }
                          },
                          {
                              extend: 'csv',
                              text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-3" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M230-360h120v-60H250v-120h100v-60H230q-17 0-28.5 11.5T190-560v160q0 17 11.5 28.5T230-360Zm156 0h120q17 0 28.5-11.5T546-400v-60q0-17-11.5-31.5T506-506h-60v-34h100v-60H426q-17 0-28.5 11.5T386-560v60q0 17 11.5 30.5T426-456h60v36H386v60Zm264 0h60l70-240h-60l-40 138-40-138h-60l70 240ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z"/></svg> CSV</span>',
                              exportOptions: {
                                columns: ':visible:not(:last-child)'
                            }
                          },
                          {
                              extend: 'excel',
                              text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-3" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h133v-133H200v133Zm213 0h134v-133H413v133Zm214 0h133v-133H627v133ZM200-413h133v-134H200v134Zm213 0h134v-134H413v134Zm214 0h133v-134H627v134ZM200-627h133v-133H200v133Zm213 0h134v-133H413v133Zm214 0h133v-133H627v133Z"/></svg> Excel</span>',
                              exportOptions: {
                                columns: ':visible:not(:last-child)'
                            }
                          },
                          {
                              extend: 'print',
                              text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-3" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M640-640v-120H320v120h-80v-200h480v200h-80Zm-480 80h640-640Zm560 100q17 0 28.5-11.5T760-500q0-17-11.5-28.5T720-540q-17 0-28.5 11.5T680-500q0 17 11.5 28.5T720-460Zm-80 260v-160H320v160h320Zm80 80H240v-160H80v-240q0-51 35-85.5t85-34.5h560q51 0 85.5 34.5T880-520v240H720v160Zm80-240v-160q0-17-11.5-28.5T760-560H200q-17 0-28.5 11.5T160-520v160h80v-80h480v80h80Z"/></svg> Print</span>',
                              autoPrint: false,
                              exportOptions: {
                                columns: ':visible:not(:last-child)'
                            }
                          }
                      ]
                  },
                  { extend: 'colvis', text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-1" height="20px" viewBox="0 0 24 24" width="20px" fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg> Columns</span>' },
                  {
                      text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="mr-1" height="20px" viewBox="0 0 24 24" width="20px" fill="currentColor"><path d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1.01-.25 1.97-.7 2.8l1.46 1.46C19.54 15.03 20 13.57 20 12c0-4.42-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6 0-1.01.25-1.97.7-2.8L5.24 7.74C4.46 8.97 4 10.43 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4v3z"/></svg> Reload</span> ',
                      action: function ( e, dt, node, config ) {
                          dt.ajax.reload();
                      }
                  }
              ]
          },
          top1End: {
              buttons: [
                  {
                      text: '<span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="mr-1" height="20px" viewBox="0 0 24 24" width="20px" fill="currentColor"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M17,19.22H5V7h7V5H5C3.9,5,3,5.9,3,7v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-7h-2V19.22z"/><path d="M19,2h-2v3h-3c0.01,0.01,0,2,0,2h3v2.99c0.01,0.01,2,0,2,0V7h3V5h-3V2z"/><rect height="2" width="8" x="7" y="9"/><polygon points="7,12 7,14 15,14 15,12 12,12"/><rect height="2" width="8" x="7" y="15"/></g></g></svg> Add User</span>',
                      action: function ( e, dt, node, config ) {
                          window.location.href = 'users/create';
                      }
                  }
              ]
          },
          topStart: {
              pageLength: {
                  menu: [
                      [5, 10, 25, 50, 100, 500, -1], 
                      [5, 10, 25, 50, 100, 500, "All"]
                  ]
              }
          },
          topEnd: {
              search: {
                  placeholder: 'Type search here...',
              }
          },
      },
      columnDefs: [
          { targets: [0], visible: false },
      ],
      colReorder: true,
      pageLength: 10,
      processing: true,
      serverSide: true,
      responsive: true,
      ajax: {
          url: usersUrl,
          dataSrc: "aaData"
      },
      columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'email' },
        { data: 'designation' },
        { data: 'office' },
        {
            data: null,
            orderable: false,
            searchable: false,
            render: function(data, type, row) {
                return `
                    <div class="action-btns">
                        <span class="edit-btn badge badge-pill badge-secondary" data-id="${row.id}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M216-216h51l375-375-51-51-375 375v51Zm-72 72v-153l498-498q11-11 23.84-16 12.83-5 27-5 14.16 0 27.16 5t24 16l51 51q11 11 16 24t5 26.54q0 14.45-5.02 27.54T795-642L297-144H144Zm600-549-51-51 51 51Zm-127.95 76.95L591-642l51 51-25.95-25.05Z"/></svg>
                        </span>
                        <span class="delete-btn badge badge-pill badge-secondary" data-id="${row.id}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                        </span>
                    </div>
                `;
            }
        }
    ],
      fnPreDrawCallback() {
          $('#users-datatable').addClass('data-table-loading');
      },
      fnDrawCallback() {
          $('#users-datatable').removeClass('data-table-loading');

          $('.edit-btn').on('click', function() {
            var userId = $(this).data('id');
            window.location.href = `users/${userId}/edit`;
        });
        
        $('.delete-btn').on('click', function() {
            var userId = $(this).data('id');
            if(confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    url: `users/${userId}`,
                    type: 'DELETE',
                    success: function(result) {
                        if(result.success) {
                            $('#users-datatable').DataTable().ajax.reload();
                        }
                    }
                });
            }
        });
      }
  });
});
