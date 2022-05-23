
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
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../index.html"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Ticket
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
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
                        <tr>
                            <th>ID</th>
                            <th>customer Name</th>
                            <th>Prority</th>
                            <th>Is open</th>
                            <th>status</th>
                            <th>Department</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php
                    $count = 1;
                    ?>
                    <tbody id="body_table"></tbody>
                </table>
            </div>
       </div>
        
    </div>
    <div class="alaias">
    <form>
                        <div class="form-group">
                            <input type="hidden" wire:model="selected_id">
                            <label for="firstNameLabel" class="form-control-label">Customer Name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="CustomerName">
                        </div>
                        <div class="form-group">
                            <label for="country">Status</label>
                            <select class="form-control" id="status">
                                <option value="">Select Status</option>
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="firstNameLabel" class="form-control-label">Prority</label>
                                <div class="form-group">
                            <label for="prority">prority</label>
                            <select class="form-control" id="prority">
                                <option value="">Select prority</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="firstNameLabel" class="form-control-label">title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                            <
                            <label for="firstNameLabel" class="form-control-label">Description Problem</label>
                            <input type="text" class="form-control" id="desc" placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                            <input type="hidden" wire:model="selected_id">
                            <label for="firstNameLabel" class="form-control-label">Replay</label>
                            <input type="text" class="form-control" id="replay" placeholder="Enter User Name">
                        </div>




                    </form>
                </div>


</div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
    <script>
      
        $(document).ready(function() {
            loadTicket();
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
                        $('#ticket_table').append('<tr>\<td id ="tid">' + value['tid'] + '</d> <td>' + value['customerName'] + '</td>'+ '<td>'+  value['prorityName'] + '</td>' +
                            (value['name'] == 'notanswered' || value['name'] == 'progress' ? '<td>' + '<button class ="btn btn-success" onclick ="editTicket(\'' + data + '\');">' + 'open' +
                                '</td>' : '<td>' + '<button class ="btn btn-success">' + 'close' + '</td>') + '<td>' +
                            value['name'] + '</td><td>' +
                            value['departmentName'] + '</td></tr>');
                        i++;

                    });
                }
            });
        }

        function editTicket(id) {
            //save_method = 'update';
            //$('#form')[0].reset();
            <?php header('Content-type: application/json'); ?>
            //Ajax Load data from ajax
            $('#ticket_form').modal('show');
            $.ajax({
                url: "<?php echo 'http://localhost:8080/TicketController/editTicket/' ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);

                    $('[name="customerName"]').val(data.customerName);
                    $('[name="customerName"]').val(data.customerName);


                    // show bootstrap modal when complete loaded
                }
            });
        }
        $(document).ready(function() {

            $('#status').change(function() {
                var id = 1;
                $.ajax({
                    url: "<?php echo 'http://localhost:8080/TicketController/get_status/' ?>",
                    method: "POST",
                    data: {
                        id,
                        id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].sid + '>' + data[i].name + '</option>';
                        }
                        $('#status').html(html);

                    }
                });
                return false;
            });

        });
    </script>
    