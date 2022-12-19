<div class="container">
        <div class="row mb-4"><div style="width:100%; padding-top:40px;">
            <h2>Riset Detail</h2>
            <hr />
        </div>
            
            <div class="col-lg-12">
            <?php
                include"koneksi.php";
                $sql="select * from projects where projects.id_project=$_GET[id]";
                $query=mysqli_query($koneksi,$sql); 
                while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
             
                echo"  
                <div class='text-container'>
                    <div class='image-wrapper'>
                        <img class='img-fluid' style='height:100px; width:200px; margin-bottom:10px;' src='images/hexagon-green.svg' alt='alternative'>
                    </div> 
                </div>              
                        <h2>$row[2]</h2>
                        <h6><i>$row[4]</i></h6>
                        Publication: $row[3]<br />
                        Status: $row[6]<br />
                        <p>
                        <p>Attachment: <a href='$row[5]'>$row[5]</a></p>
                        <a href='master_riset.php?page=hapusMyRiset&id=$_GET[id]' onclick='rreturn confirmation();' class='btn btn-danger text-white'>Hapus</a>
                        <a href='master_riset.php?page=editRiset&id=$_GET[id]' class='btn btn-warning text-white'>edit</a>
                ";
                }
                ?>  
                <script type="text/javascript">
                    function confirmation() {
                    return confirm('Are you sure you want to do this?');
                    }
                </script>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of intro -->
