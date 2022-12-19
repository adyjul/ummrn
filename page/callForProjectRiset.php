    <!-- Description -->
    <div class="cards-1">
    <div class="container">
        <div class="row">
            <div style="width:100%; padding-bottom:25px;">
                <h2>Call For Projects</h2>
                <hr />
                <a href="master_riset.php?page=addCallForProject" class="btn btn-primary font-weight-bold text-white" style="cursor: pointer;" >Tambah</a>
            </div>
            
            <div class="col-lg-12">

                <?php                
                    include"koneksi.php";
                    $idUser = $_SESSION['userid'];
                    $userLogin = $_SESSION['nama'];
                    $sql="SELECT * FROM projects 
                            INNER JOIN cfps ON cfps.id_project = projects.id_project
                                WHERE projects.id_researcher = $idUser";
                    $query=mysqli_query($koneksi,$sql);
                    while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
                        $rp=number_format($row[10],2,",",".");
                       
                        echo"
                        <!-- Card -->
                        <div class='card'>
                            <span class='fa-stack'>
                                <span class='hexagon'></span>
                                <i class='fas fa-binoculars fa-stack-1x'></i>
                            </span>
                            <div class='card-body'>
                                <a href='master_riset.php?page=detilMyRiset&id=$row[0]'><h4 class='card-title'>$row[2]</h4></a>
                                <p>By <b>$userLogin</b></p>
                                <p><font color=blue>Funded, approximaly Rp $rp</font></p>
                            Quota: $row[11]  
                                <p>Publish pada tahun <b>$row[3]</b> <a href='master_riset.php?page=lihatMember&id=$row[0]'>[ Lihat member ]</a> </p>
                            </div>  
                        </div>
                        <!-- end of card -->
                            ";
                        
                        }
                   
                ?>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of description -->
