    <!-- Description -->
    <div class="cards-1">
    <div class="container">
        <div class="row">
            <div style="width:100%; padding-bottom:25px;">
                <h2>Lihat Member</h2>
                <hr />
            </div>
            
            <div class="col-lg-12">
            <table class="table table-striped">
            <thead>
                <tr>
                
                <th scope="col">Nama</th>
                <th scope="col">Motivasi</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php                
                    include"koneksi.php";
                    $idUser = $_SESSION['userid'];
                    $userLogin = $_SESSION['nama'];
                    $sql="SELECT * FROM joinresearch 
                    INNER JOIN students on students.id_student = joinresearch.id_student 
                    WHERE joinresearch.id_project = $_GET[id]
                    ";
                    $query=mysqli_query($koneksi,$sql);
                
                    while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
                        $rp=number_format($row[4],2,",",".");
                        // var_dump($row);
                        $btnUbah = '';
                        if($row[4] == 'Waiting for Approval'){ 
            
                            $btnUbah = "
                            <a href='master_riset.php?page=changeStatus&id=$row[0]&status=1&id_project=$row[1]' class='btn btn-success text-white'>Terima</a>
                            <a href='master_riset.php?page=changeStatus&id=$row[0]&status=0&id_project=$row[1]' class='btn btn-danger text-white'>Tolak</a>
                            ";
                        }

                        if($row[4] == 'Accepted'){ 
                            $btnUbah = "
                            <a href='master_riset.php?page=changeStatus&id=$row[0]&status=0&id_project=$row[1]' class='btn btn-danger text-white'>Tolak</a>
                            ";
                        }

                        if($row[4] == 'Declined'){ 
                            $btnUbah = "
                            <a href='master_riset.php?page=changeStatus&id=$row[0]&status=1&id_project=$row[1]' class='btn btn-success text-white'>Terima</a>
                            ";
                        }

                        
                        
                        echo"
                            <tr>
                            <td>$row[6]</td>
                            <td>$row[3]</td>
                            <td>$row[4]</td>
                            <td>
                                $btnUbah
                            </td>
                            </tr>
                            ";
                        
                        }
                
                ?>

               
                
            </tbody>
            </table>

              
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of description -->
