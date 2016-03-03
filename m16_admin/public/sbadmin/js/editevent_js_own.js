/**
 * Created by user on 2016-03-03.
 */
$(document).ready(function(){
    var editEventTable = $('#editEventsTable').DataTable();

    $('#editEventForm').hide();

    $('#editEventsTable').on('click', function(){
        var data = editEventTable.row(this).data();
        alert(data);
    });
});