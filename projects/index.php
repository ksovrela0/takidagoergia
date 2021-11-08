<?
include("db.php");
$db = new DbAct();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>მომხმარებლები | დავალება შეასრულა გიორგი ქსოვრელმა</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/jquery/jquery.modal.min.css" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">

		<div class="container-table100">
			<div class="wrap-table100">
				<p style="font-size:25px;">(დავალება შეასრულა გიორგი ქსოვრელმა)</p><br><br><br><a style="margin-bottom:10px;" href="#ex1" rel="modal:open"> (+) ახლის დამატება</a>
					<div class="table" id="person-listing">

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
						

					</div>
			</div>
		</div>
	</div>


	<div id="ex1" class="modal">
	  <form>
		<div class="form-group">
			<label for="firstname">სახელი</label>
			<input type="text" class="form-control" id="firstname">
		</div>
		<div class="form-group">
			<label for="surname">გვარი</label>
			<input type="text" class="form-control" id="surname">
		</div>
		<div class="form-group">
			<label for="age">ასაკი</label>
			<input type="text" class="form-control" id="age">
		</div>
		<div class="form-group">
			<label for="sex">სქესი</label>
			<select class="form-control" id="sex">
				<option value="1">მამრობითი</option>
				<option value="2">მდედრობითი</option>
			</select>
		</div>
		<button type="button" id="add" class="btn btn-primary">დამატება</button>
		</form>
		<span id="add-result"></span>
	</div>
	<div id="ex2" class="modal">
	  <p>გსურთ მომხმარებლის ID-ით <b><span id="deleteID"></span></b> წაშლა?</p>
	  <a style="margin-right:20px" href="#" class="deleteYes">კი</a><a href="#" rel="modal:close" style="color:red;">არა</a>
	  <span id="del-result"></span>
	</div>
	<div id="ex3" class="modal">
	  <form>
		<div class="form-group">
			<label for="firstname2">სახელი</label>
			<input type="text" class="form-control" id="firstname2">
		</div>
		<div class="form-group">
			<label for="surname2">გვარი</label>
			<input type="text" class="form-control" id="surname2">
		</div>
		<div class="form-group">
			<label for="age2">ასაკი</label>
			<input type="text" class="form-control" id="age2">
		</div>
		<div class="form-group">
			<label for="sex2">სქესი</label>
			<select class="form-control" id="sex2">
				<option value="1">მამრობითი</option>
				<option value="2">მდედრობითი</option>
			</select>
		</div>
		<input type="hidden" id="person_id" value="">
		<button type="button" id="edit2" class="btn btn-primary">რედაქტირება</button>
		</form>
		<span id="edit-result"></span>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>


</body>
</html>
