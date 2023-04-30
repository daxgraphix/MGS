<?php
session_start();

date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );


session_unset();

?>
<script language="javascript">
document.location="index.html";
</script>
