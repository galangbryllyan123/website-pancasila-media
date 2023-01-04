<?php
require("../mainconfig.php");

if (isset($_POST['operator'])) {
	$post_cat = mysqli_real_escape_string($db, $_POST['operator']);
	$check_service = mysqli_query($db, "SELECT * FROM services_token  WHERE operator = '$post_cat' AND status = 'Active' ORDER BY name ASC");
	?>
	<option value="0">Select one...</option>
	<?php
	while ($data_service = mysqli_fetch_assoc($check_service)) {
	?>
	<option value="<?php echo $data_service['id'];?>"><?php echo $data_service['name'];?></option>
	<?php
	}
} else {
?>
<option value="0">Error.</option>
<?php
}