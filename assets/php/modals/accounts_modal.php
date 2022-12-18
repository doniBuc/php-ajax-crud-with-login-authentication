<?php
include '../connection.php';
$account_id = $_POST["account_id"];
$sql =
    "SELECT username, password, email
    FROM tb_accounts
    WHERE account_id = $account_id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <div class="mb-3">
        <label for="edit_username" class="form-label">Username</label>
        <input type="text" class="form-control" id="edit_username" name="edit_username" placeholder="Username" value="<?php echo $row['username'] ?>">
    </div>
    <div class="mb-3">
        <label for="edit_email" class="form-label">Email</label>
        <input type="email" class="form-control" id="edit_email" name="edit_email" placeholder="Email" value="<?php echo $row['email'] ?>">
    </div>
    <div class="mb-3">
        <label for="edit_password" class="form-label">Password</label>
        <input type="password" class="form-control" id="edit_password" name="edit_password" placeholder="Password" value="<?php echo $row['password'] ?>">
    </div>
<?php
}
?>