<?php
   session_start();
   session_unset();
   // header("Location:Index.php")
?>
<script type="text/javascript">
	alert("Logout successfully...");
	window.location.href = "../index.php";
</script>
