<?php
	include"koneksi.php";
	$judul=$_POST['judul'];
	$year=$_POST['year'];
	$desc=$_POST['desc'];
    $link=$_POST['link']; 
    $research = $_POST['id_research'];
	$status=$_POST['status'];
	$sql="INSERT INTO `projects` (`id_project`, `id_researcher`, `title`, `published_year`, `description`, `attachment`, `status`) VALUES (NULL, $research, '$judul', $year, '$desc', '$link', '$status');";
	$query=mysqli_query($koneksi,$sql);
	// var_dump($sql);
    // die;
  
    
    if($query){
        echo"
            <script>
                window.alert('Tambah riset Succeed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=myriset';
            </script>
        ";
    }else{
        
        echo"
            <script>
                window.alert('Tambah riset Failed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=addRiset';
            </script>
        ";
    }
?>