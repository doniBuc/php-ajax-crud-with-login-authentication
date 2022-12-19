// Alert when a record has been updated successfully
function editAlert() {
    Swal.fire({
        icon: 'success',
        title: 'Record Updated!',
        text: 'Record has been updated successfully!',
    });
}

// Alert when a record has been added to the table
function addAlert() {
    Swal.fire({
        icon: 'success',
        title: 'Record Added!',
        text: 'Record has been added successfully!',
    });
}

// Alert when a record has been deleted
function deleteAlert() {
    Swal.fire({
        icon: 'success',
        title: 'Record Deleted!',
        text: 'The record has been deleted successfully!',
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