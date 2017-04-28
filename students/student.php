<form>
	City: &nbsp;&nbsp;
	<select id="cities" name="scid">
		<option value="">All cities</option>
	<?php
		$scid = 0;
		if(isset($_GET["scid"])) {
			$scid = $_GET["scid"];
		}
		
		$res = $da->query("SELECT * FROM city");
		while($row = $res->fetch_assoc()) {
	?>
		<option value="<?= $row["id"] ?>" <?= $scid == $row["id"] ? "selected" : "" ?> ><?= $row["Name"] ?></option>
	<?php
		}
	?>
	</select>
	&nbsp;&nbsp;
	<input type="submit" name="SelectCity" value="Select City"></input>
</form>
<?php
	$queryStr = "SELECT s.Id as Id, s.StudentCode as Code, s.Name as Name, c.id as CityId, c.Name as CityName FROM student s inner join City c ON s.CityId = c.Id";
	if($scid != 0) {
		$queryStr = $queryStr . " where CityId = $scid";
	}
	$res = $da->query($queryStr);
?>
<table class="data-table">
	<tr class='data-header'>
		<td>Code</td>
		<td>Name</td>
		<td>City</td>
		<td></td>
		<td></td>
	</tr>
<?php
	while($row = $res->fetch_assoc()) {
?>
	<tr>
		<td><?= $row["Code"] ?></td>
		<td><?= $row["Name"] ?></td>
		<td><?= $row["CityName"] ?></td>
		<td></td>
		<td></td>
	</tr>
<?php
	}
?>
</table>