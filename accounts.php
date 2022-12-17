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
    <title>Dashboard</title>
</head>

<body>
    <?php include "./assets/php/extensions/sidebar.php" ?>
    <main>
        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- Header -->
                <header>
                    <h1>Accounts</h3>
                        <hr>
                </header>
                <!-- Data Table w/ Search -->
                <input type="text" class="form-control" placeholder="Search">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Creation Date</th>
                                <th>Account</th>
                                <th>Modify</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Red</td>
                                <td>password</td>
                                <td>red@gmail.com</td>
                                <td>12/17/2022</td>
                                <td>User</td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editForm">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Blue</td>
                                <td>password</td>
                                <td>blue@gmail.com</td>
                                <td>12/17/2022</td>
                                <td>User</td>
                                <td>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editForm">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Edit Modal -->
    <div class="modal fade" id="editForm" tabindex="-1" aria-labelledby="editFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editFormLabel">Edit Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Edit Form -->
                <form action="./accounts.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="edit_username" name="edit_username" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="edit_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit_email" name="edit_email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="edit_password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="edit_password" name="edit_password" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>