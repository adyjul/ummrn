<?php
	include"koneksi.php";
	$judul=$_POST['judul'];
	$year=$_POST['year'];
	$desc=$_POST['desc'];
    $link=$_POST['link']; 
    $research = $_POST['id_research'];
    $project = $_POST['id_project'];
	$status=$_POST['status'];
	$sql="UPDATE projects SET projects.title = '$judul', projects.published_year= $year, projects.description = '$desc', projects.attachment = '$link',projects.status = '$status' WHERE projects.id_project = $project;";
	$query=mysqli_query($koneksi,$sql);
	// var_dump($sql);
    // die;
  
    
    if($query){
        echo"
            <script>
                window.alert('update riset Succeed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=myriset';
            </script>
        ";
    }else{
        
        echo"
            <script>
                window.alert('update riset Failed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=addRiset';
            </script>
        ";
    }
?>