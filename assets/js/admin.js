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
                $('#ticket_table').append('<tr>\<td id ="tid">' + value['tid'] + '</d> <td>' +
                    value['customerName'] + " " +
                    '</td><td>' + value['firstNameUser'] + " " +
                    value['lastNameUser'] + '</td><td>' +
                    value['prorityName'] + '</td>' +
                    '<td>' +
                    value['name'] + '</td><td>' +
                    value['departmentName'] + '</td></tr>');
                i++;

            });
        }
    })
}


function save() {
    $.ajax({
        url: "<?php echo 'http://localhost:8080/TicketController/ticketAdd'; ?>",
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data) {
            //if success close modal and reload ajax table
            $('#ticket_form').modal('hide');
            location.reload(); // for reload a page
        },

    })
}

function addTicket() {
    $('#ticket_form').modal('show')
    // show bootstrap modal
}

</script>