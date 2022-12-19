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
        url: "./assets/php/crud/accounts_crud.php",
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
        url: "./assets/php/modals/accounts_modal.php",
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
    let edit_username = $("#edit_username").val();
    let edit_email = $("#edit_email").val();
    let edit_password = $("#edit_password").val();
    $.ajax({
        url: "./assets/php/crud/accounts_crud.php",
        method: "POST",
        data: {
            primary_id: primary_id,
            edit_username: edit_username,
            edit_email: edit_email,
            edit_password: edit_password
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