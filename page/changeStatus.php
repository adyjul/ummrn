<?php
	include"koneksi.php";
    $research = $_POST['id_research'];
  
	
    

    if($_GET['status'] == 1){
        $sql="UPDATE joinresearch SET joinresearch.status = 'Accepted' WHERE joinresearch.id_joinresearch = $_GET[id]";
    }
    if($_GET['status'] == 0){
        $sql="UPDATE joinresearch SET joinresearch.status = 'Declined' WHERE joinresearch.id_joinresearch = $_GET[id]";
    }
	$query=mysqli_query($koneksi,$sql);
	// var_dump($sql);
    
  
    
    if($query){
        $id = $_GET['id_project'];
        echo"
            <script>
                window.alert('update riset Succeed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=lihatMember&id=".$id."';
            </script>
        ";
    }else{
        
        echo"
            <script>
                window.alert('update riset Failed.');
                window.location.href='http://localhost/ummrn/master_riset.php?page=lihatMember&id=".$id."';
            </script>
        ";
    }
?>