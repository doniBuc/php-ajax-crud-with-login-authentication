<?php
// Displays the data table with enabled search functionality
if(isset($_POST['input'])) {
    include '../connection.php';
    $input = $_POST['input'];
    $sql =
        "SELECT record_id, record, details, creation_date
    FROM tb_records
    WHERE record_id LIKE '{$input}%'
    OR record LIKE '{$input}%'
    OR details LIKE '{$input}%'
    OR creation_date LIKE '{$input}%'
    ORDER BY record_id";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row["record_id"] ?></td>
            <td><?php echo $row["record"] ?></td>
            <td><?php echo $row["details"] ?></td>
            <td><?php echo $row["creation_date"] ?></td>
            <td>
                <button data-id="<?php echo $row["record_id"] ?>" class="edit-data btn btn-success" data-bs-toggle="modal" data-bs-target="#editForm">Edit</button>
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
&& isset($_POST['edit_record'])
&& isset($_POST['edit_details'])) {
    include '../connection.php';
    $primary_id = $_POST['primary_id'];
    $edit_record = $_POST['edit_record'];
    $edit_details = $_POST['edit_details'];
    $sql = "UPDATE tb_records SET record='$edit_record', details='$edit_details' WHERE record_id='$primary_id'";
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    mysqli_close($conn);
}
?>