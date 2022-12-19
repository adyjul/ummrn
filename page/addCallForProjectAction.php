<?php
	include"koneksi.php";
	$riset=$_POST['riset'];
	$kriteria=$_POST['kriteria'];
	$dana=$_POST['dana'];
    $deadline=$_POST['deadline']; 
    $kuota=$_POST['kuota'];
    
	$sql="INSERT INTO `cfps` (`id_cfp`, `id_project`, `criterion`, `funding`, `quota`,`deadline`) 
            VALUES (NULL, $riset, '$kriteria', $dana, $kuota, '$deadline');";
	$query=mysqli_query($koneksi,$sql);
	// var_dump($sql);
    // die;
  
    
    if($query){
        echo"
            <script>
                window.alert('Tambah riset Succeed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=callForProjectRiset';
            </script>
        ";
    }else{
        
        echo"
            <script>
                window.alert('Tambah riset Failed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=addCallForProject';
            </script>
        ";
    }
?>