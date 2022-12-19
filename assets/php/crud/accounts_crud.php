<?php
// Displays the data table with enabled search functionality
if(isset($_POST['input'])) {
    include '../connection.php';
    $input = $_POST['input'];
    $sql =
        "SELECT account_id, username, password, email, creation_date, account_type
    FROM tb_accounts
    WHERE account_id LIKE '{$input}%'
    OR username LIKE '{$input}%'
    OR password LIKE '{$input}%'
    OR email LIKE '{$input}%'
    OR creation_date LIKE '{$input}%'
    OR account_type LIKE '{$input}%'
    ORDER BY account_id";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row["account_id"] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["creation_date"] ?></td>
            <td><?php echo $row["account_type"] ?></td>
            <td>
                <button data-id="<?php echo $row["account_id"] ?>" class="edit-data btn btn-success" data-bs-toggle="modal" data-bs-target="#editForm">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <?php
    }
    if (($count) == 0) {
        ?>
        <tr>
            <td colspan='7'>There are no records.</td>
        </tr>
        <?php
    }
    mysqli_close($conn);
}

// Updates the data
if (isset($_POST['primary_id'])
&& isset($_POST['edit_username'])
&& isset($_POST['edit_email'])
&& isset($_POST['edit_password'])) {
    include '../connection.php';
    $primary_id = $_POST['primary_id'];
    $edit_username = $_POST['edit_username'];
    $edit_email = $_POST['edit_email'];
    $edit_password = $_POST['edit_password'];
    $sql = "UPDATE tb_accounts SET username='$edit_username', password='$edit_password', email='$edit_email' WHERE account_id='$primary_id'";
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    mysqli_close($conn);
}
?>