<?php
session_start();
$connection = mysqli_connect("localhost", "root", "Iamsammed@12");
$db = mysqli_select_db($connection, "online_job_portal");
?>
<script>

let text = "Are you sure you want to delete account?";


if (confirm(text) == true) {
<?php
$query = "delete from administrator where Email = '$_SESSION[Email]'";
$query_run = mysqli_query($connection, $query);
?>
alert("Account Deleted Succesfully");
window.location.href = "../index.php";
}
else{
    window.location.href = "admin_dashboard.php";
}
</script>
