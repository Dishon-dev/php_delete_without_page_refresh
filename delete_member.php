<?php
include ('database.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    delete($id);
}

function delete($id) {
    global $conn;
    $delete_data = "DELETE FROM member WHERE member_id = '$id' ";
    mysqli_query($conn,$delete_data);
}
?>