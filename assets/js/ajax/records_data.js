$(document).ready(function () {
    // Loads the data and enables search functionality
    displayTable();
    $("#search_records").keyup(function () {
        displayTable();
    });

    // Displays the current data in modal for updating
    $(document).on("click", ".edit-data", function () {
        updateModal();
    });

    // Updates the data
    $(document).on("click", ".edit-confirm", function () {
        update();
    });
});

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

// Displays the current data in modal for updating
const updateModal = () => {
    let primary_id = $(".edit-data").data('id');
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
const update = () => {
    let primary_id = $(".edit-data").data('id');
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
            if (data == "success") {
                editAlert();
            } else {
                errorAlert();
            }
        }
    });
}