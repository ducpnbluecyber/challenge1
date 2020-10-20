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
	<style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
</head>
<body>
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
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead>";
                echo "<tr>";
                    
                    echo "<th>Task</th>";
                    echo "<th>Delete</th>";
                    echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
			while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                   
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>";
                    echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                echo "</td>";
                echo "</tr>";
                }
                echo "</tbody>";                            
            echo "</table>";
			}
		else {
			echo "0 results";
		}
		mysqli_close($connect);
	?>
        
</body>
</form>
</html>
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
