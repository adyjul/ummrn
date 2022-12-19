<?php
	include"koneksi.php";
	
    
	$sql="DELETE FROM projects WHERE projects.id_project=$_GET[id];";
	$query=mysqli_query($koneksi,$sql);
    if($query){
        echo"
            <script>
                window.alert('Sukses dihapus Succeed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=myriset';
            </script>
        ";
    }else{
        echo"
            <script>
                window.alert('Registration Failed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=myriset';
            </script>
        ";
    }
?>