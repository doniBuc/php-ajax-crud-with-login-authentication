<?php
include '../connection.php';
$primary_id = $_POST["primary_id"];
$sql =
    "SELECT record, details
    FROM tb_records
    WHERE record_id = $primary_id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <div class="mb-3">
        <label for="edit_record" class="form-label">Record</label>
        <input type="text" class="form-control" id="edit_username" name="edit_username" placeholder="Username" value="<?php echo $row['username'] ?>">
    </div>
    <div class="mb-3">
        <label for="edit_details">Details</label>
        <textarea class="form-control" id="edit_details" rows="3" placeholder="Details" value="<?php echo $row['email'] ?>"></textarea>
    </div>
<?php
}
?>