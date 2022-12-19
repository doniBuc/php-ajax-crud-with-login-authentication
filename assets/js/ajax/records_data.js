$(document).ready(function () {
    // Displays data with search function
    displayTable();
    $("#search_records").keyup(function () {
        displayTable();
    });

    // Displays data in edit modal
    $(document).on("click", ".edit-data", function () {
        let primary_id = $(this).data('id');
        displayEdit(primary_id);
    });

    // Adds a new data
    $("#form_add_record").submit(function (e) {
        e.preventDefault();
        insert();
    });

    // Updates the data
    $("#form_edit_record").submit(function (e) {
        e.preventDefault();
        update();
    });
});

// ========== Constants ==========
// Loads the data and enables search functionality
const displayTable = () => {
    let input = $("#search_records").val();
    $.ajax({
        url: "./assets/php/crud/records_crud.php",
        method: "POST",
        data: {
            input: input
        },
        success: function (data) {
            $("#search_results").html(data);
        }
    });
}

const displayEdit = (primary_id) => {
    $.ajax({
        url: "./assets/php/modals/records_modal.php",
        method: "POST",
        data: {
            primary_id: primary_id
        },
        success: function (data) {
            $(".modal-body").html(data);
        }
    });
}

// Fetch the data from the form and send it to the crud processing file to edit data
const insert = () => {
    let record = $("#record").val();
    let details = $("#details").val();
    $.ajax({
        url: "./assets/php/crud/records_crud.php",
        method: "POST",
        data: {
            record: record,
            details: details,
        },
        success: function (data) {
            displayTable();
            if (data == "success") {
                $('#form_add_record')[0].reset();
                addAlert();
            } else {
                errorAlert();
            }
        }
    });
}

// Fetch the data from the form and send it to the crud processing file to edit data
const update = () => {
    let primary_id = $("#primary_id").val();
    let edit_record = $("#edit_record").val();
    let edit_details = $("#edit_details").val();
    $.ajax({
        url: "./assets/php/crud/records_crud.php",
        method: "POST",
        data: {
            primary_id: primary_id,
            edit_record: edit_record,
            edit_details: edit_details,
        },
        success: function (data) {
            displayTable();
            $('#form_edit_record')[0].reset();
            $('#editForm').modal('hide');
            if (data == "success") {
                editAlert();
            } else {
                errorAlert();
            }
        }
    });
}