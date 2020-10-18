<?php
	$connect = mysqli_connect('localhost','id15161148_root','Ro5zd=-\QJsj?#zC','id15161148_challenge1');
	mysqli_set_charset($connect,"utf8");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BlueCyber</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<form action="" method="post">
<div class="col-md-6 col-md-offset-3">
	<div class="alert alert-info">
	  <strong>Task List</strong>
	</div>
	<div class="panel panel-primary">
	    <div class="panel-body">
	    	<div class="form-group">
				<label for="task">Task:</label>
				<input type="text" class="form-control" name="newtask" placeholder="">
			</div>
			<button type="submit" class="btn btn-default" name="addtask">+ Add Task</button>
	    </div>
	</div>
</div>
	
	<?php
		$newtask='';
		if(isset($_POST["addtask"])) { $newtask = $_POST['newtask']; }
		$sql = "INSERT INTO task(title) VALUES ('$newtask')";
		if ($connect->query($sql) === TRUE) {
			echo "";
		} else {
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
	?>

	<?php
		$sqll = "SELECT id, title FROM task";
		$result = mysqli_query($connect, $sqll);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "" /*. $row["id"]*/. $row["title"]. " ". "<br>";
			}
		} else {
			echo "0 results";
		}
		mysqli_close($connect);
	?>
</form>
</html>