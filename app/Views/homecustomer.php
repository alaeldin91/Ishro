<div class=" containear-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"> </i>
                    <div class="d-inline">
                        <h5>Ticket </h5>
                        <span>Ticket ManageMent </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <button class="btn btn-primary" onclick="addTicket()"> Add Ticket</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 col-md-6">
            <div class="card card-table">
                <div class="card-header">
                    <h3>catogry</h3>
                </div>
                <div class="card-body">
                    <table class="table" id="ticket_table">
                        <thead>
                                <th>customer Name</th>
                                <th>Prority</th>
                                <th>status</th>
                                <th>Department</th>
                                <th>Delete</th>
                                </tr>
                        </thead>
                        <?php
                        $count = 1;
                        ?>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                loadTicket()
            });

            function loadTicket() {
                $.ajax({
                    url: "<?php echo 'http://localhost:8080/TicketController/getTicketEmp'; ?>",
                    type: "GET",
                    cache: false,
                    success: function(data) {
                        $.each(data.tickets, function(key, value) {
                            i = 1;
                            data = $(this).attr('tid')
                            // console.log(value['description_ticket']);
                            // fill all column 
                            $('#ticket_table').append('<tr>\'<td>'+value['customerName']+'</td> <td>' +
                                value['prorityName'] + '</td>' + '<td>' + value['name'] + '</td><td>' +
                                value['departmentName'] + '</td></tr>');
                            i++;

                        });
                    }
                })
            }

            function addTicket() {
                $('#ticket_form').modal('show')
                // show bootstrap modal
            }
        </script>
        <div wire:ignore.self class="modal fade bd-example-modal-lg" id="ticket_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Ticket</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="customerlabelLabel" class="form-control-label">Customer Name</label>
                                <input type="text" class="form-control customerName" name='customerName' id="customerName" placeholder="Enter Cusromer Name" />
                                <span id="error_customer" class="text-danger ms-3">
                            </div>
                            <div class="form-group">
                                <label for="priority_label" class="form-control-label">priority</label>
                                <select class="form-control priority" name='priority' id="priority">
                                    <option value="">Select priority</option>
                                    <?php foreach ($prority as $prority) { ?>
                                        <option value="<?= $prority->id ?>"><?php echo $prority->prorityName ?></option>
                                    <?php } ?>
                                </select>
                                <span id="error_prority" class="text-danger ms-3"> </span>
                            </div>
                            <div class="form-group">

                                <label for="departMentLabel" class="form-control-label">departMent</label>
                                <select class="form-control department" name='department' id="department">
                                    <option value="">Select DepartMent</option>
                                    <?php foreach ($departMent as $department) { ?>
                                        <option value="<?= $department->id ?>"><?php echo $department->departmentName ?></option>
                                    <?php } ?>
                                </select>
                                <span id="error_department" class="text-danger ms-3"></span>
                            </div>

                            <div class="form-group">
                                <label for="titleNameLabel" class="form-control-label">Title</label>
                                <input type="text" class="form-control title" id="title" name="title" placeholder="Enter Title  Name">
                                <span id="error_title" class="text-danger ms-3"> </span>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header"> <span id="error_desc" class="text-danger ms-3"> </span>
                                            <label for="DescriptionLabel" class="form-control-label">Problem Description</label>
                                        </div>
                                        <div class="card-body">
                                            <textarea class="form-control html-editor desc" name='desc' rows="10" id="desc"></textarea>
                                        </div>
                                        <span id="error_desc" class="text-danger ms-3">
                                    </div>
                                </div>
                            </div>
                            <span id="error_desc" class="text-danger ms-3">
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
                            <button type="submit" name="save" id="save" class="btn btn-primary ticketsave">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $(document).on('click', '.ticketsave', function() {
                        if ($.trim($('#customerName').val()).length == 0) {
                            error_customer = 'please enter Your Name';
                            $('#error_customer').text(error_customer);
                        } else {
                            error_customer = '';
                            $('#error_customer').text(error_customer);
                        }
                        if ($.trim($('#priority').val()).length == 0) {
                            error_prority = 'please select  Your prority';
                            $('#error_prority').text(error_prority);
                        } else {
                            error_prority = '';
                            $('#error_prority').text(error_prority);
                        }
                        if ($.trim($('#department').val()).length == 0) {
                            error_department = 'please select  Your departMent';
                            $('#error_department').text(error_department);
                        } else {
                            error_department = '';
                            $('#error_department').text(error_department);
                        }
                        if ($.trim($('#title').val()).length == 0) {
                            error_title = 'please enter Your Title';
                            $('#error_title').text(error_title);
                        } else {
                            error_title = '';
                            $('#error_title').text(error_title);
                        }
                        if ($.trim($('#desc').val()).length == 0) {
                            error_desc = 'please enter Your Description';
                            $('#error_desc').text(error_desc);
                        } else {
                            error_desc = '';
                            $('#error_desc').text(error_desc);
                        }
                        if (error_customer != '' || error_prority != '' || error_department != '' || error_title != '' || error_desc != '') {
                            false
                        } else {
                            var data = {
                                'customerName': $('.customerName').val(),
                                'prority': $('.priority :selected').val(),
                                'department': $('.department :selected').val(),
                                'title': $('.title').val(),
                                'desc': $('.desc').val(),
                            };
                            $.ajax({
                                method: "POST",
                                url: "<?php echo '/ticketstore'; ?>",
                                data: data,
                                success: function(reponse) {
                                    $('#ticket_form').modal('hide');
                                    $('#ticket_form').modal('input').val('');

                                    alertify.set('notifier', 'position', 'top-right');
                                    alertify.success(Response.status);
                                }
                            });
                        }

                    });
                });
            </script>