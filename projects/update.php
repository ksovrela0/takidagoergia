<?
include("db.php");
$db = new DbAct();
?>
<div class="row header">
	<div class="cell">
		ID
	</div>
	<div class="cell">
		სახელი
	</div>
	<div class="cell">
		გვარი
	</div>
	<div class="cell">
		ასაკი
	</div>
	<div class="cell">
		სქესი
	</div>
	<div class="cell">
		ქმედება
	</div>
</div>

<?
	$sql = "SELECT * FROM person ORDER BY id DESC";
	$query = $db->run_query($sql);
	$row = mysql_fetch_array($query);
	
	do
	{
?>
		
		<div class="row">
			<div class="cell" data-title="ID">
				<? echo $row[id]; ?>
			</div>
			<div class="cell" data-title="სახელი">
				<? echo $row[name]; ?>
			</div>
			<div class="cell" data-title="გვარი">
				<? echo $row[surname]; ?>
			</div>
			<div class="cell" data-title="ასაკი">
				<? echo $row[age]; ?>
			</div>
			<div class="cell" data-title="სქესი">
				<? 
					$getSexNameSql = "SELECT name FROM sex WHERE id='$row[sex_id]'";
					$query2 = $db->run_query($getSexNameSql);
					$row2 = mysql_fetch_array($query2);
					
					echo $row2[name];
				?>
			</div>
			<div class="cell" data-title="ქმედება">
				<a class="deleteButton" href="#ex2" data-id="<? echo $row[id]; ?>" rel="modal:open" style="margin-right:10px;"><i class="fa fa-times" aria-hidden="true"></i> წაშლა</a><a rel="modal:open" data-id="<? echo $row[id]; ?>" href="#ex3" id="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> რედაქტირება</a>
			</div>
		</div>
		
<?		
	}
	while($row = mysql_fetch_array($query));
	
?>