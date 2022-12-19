<?php
session_start();
include "./assets/php/login_validation.php";
include "./assets/php/logout.php";
validateSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Records</title>
</head>

<body>
    <?php include "./assets/php/extensions/sidebar.php" ?>
    <main>
        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- Header -->
                <header>
                    <h1>Records</h3>
                        <hr>
                </header>
                <!-- Data Table w/ Search -->
                <div class="datatable-container">
                    <form class="card">
                        <h1 class="fs-4">Add Record</h1>
                        <div class="mb-3">
                            <label for="record" class="form-label">Record</label>
                            <input type="text" class="form-control" id="record" name="record" placeholder="Record">
                        </div>
                        <div class="mb-3">
                            <label for="details">Details</label>
                            <textarea class="form-control" id="details" rows="3" placeholder="Details"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="w-100">
                        <input type="text" class="form-control" id="search_records" placeholder="Search">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Record</th>
                                        <th>Details</th>
                                        <th>Creation Date</th>
                                        <th>Modify</th>
                                    </tr>
                                </thead>
                                <tbody id="search_results">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editFormLabel" aria-hidden="true">
        <!-- Edit Modal -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editFormLabel">Edit Record</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Edit Form -->
                <form>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="edit-confirm btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./assets/js/alerts.js"></script>
    <script src="./assets/js/ajax/records_data.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>