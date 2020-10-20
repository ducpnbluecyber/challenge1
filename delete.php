<?php
	$connect = mysqli_connect('localhost','id15161148_root','Ro5zd=-\QJsj?#zC','id15161148_challenge1');
	mysqli_set_charset($connect,"utf8");
	session_start();
    if(isset($_GET['id'])){
        $del_id=$_GET['id'];
        $query="DELETe FROM task WHERE id='$del_id'";
        mysqli_query($connect, $query) or die ('Xoa that bai');
        header('Location: task.php');
    }
	//echo "Xóa thành công.";
?>