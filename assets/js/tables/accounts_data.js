// Loads the data and enables search functionality
$(document).ready(function () {
    $("#search_records").keyup(function() {
        const input = $(this).val();
        $.ajax({
            url: "./assets/php/tables/show_accounts.php",
            method: "POST",
            data: {
                input: input
            },

            success: function(data) {
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

        success: function(data) {
            $("#search_results").html(data);
        }
    });
});