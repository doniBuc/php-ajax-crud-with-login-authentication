$(document).ready(function () {
    // Loads the data and enables search functionality
    $("#search_records").keyup(function () {
        const input = $(this).val();
        $.ajax({
            url: "./assets/php/tables/show_accounts.php",
            method: "POST",
            data: {
                input: input
            },

            success: function (data) {
                $("#search_results").html(data);
            }
        });
    });
    const input = $(this).val();
    $.ajax({
        url: "./assets/php/tables/show_accounts.php",
        method: "POST",
        data: {
            input: input
        },

        success: function (data) {
            $("#search_results").html(data);
        }
    });

    // Loads the modal data for edit form
    $(document).on("click", ".edit-account", function () {
        const account_id = $(this).data('id');
        $.ajax({
            url: "./assets/php/modals/accounts_modal.php",
            method: "POST",
            data: {
                account_id: account_id
            },

            success: function (data) {
                $(".modal-body").html(data);
            }
        });
    });
});