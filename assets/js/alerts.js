// Alert when a record has been updated successfully
function editAlert() {
    Swal.fire({
        icon: 'success',
        title: 'Record Updated!',
        text: 'Record has beed updated successfully!',
    });
}

// Alert when an error occurs
function errorAlert() {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Your action cannot be processed! Try something else...',
    });
}