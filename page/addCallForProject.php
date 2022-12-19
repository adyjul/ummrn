<div class="container">
            <div class="row">            
            <div style="width:100%; padding-top:50px;"></div>
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2>Tambah Call Project</h2>
                        <hr />
                        

                        <form name="RegForm" method="POST" action="master_riset.php?page=addCallForProjectAction">
                            <div class="form-group">
                                <select  class="form-control-input" name="riset" id="riset">
                                    <?php                
                                    include"koneksi.php";
                                    $idUser = $_SESSION['userid'];
                                    $sql="SELECT projects.* FROM projects WHERE projects.id_researcher = $idUser";
                                    $query=mysqli_query($koneksi,$sql);
                                    while($row=mysqli_fetch_array($query,MYSQLI_NUM)){
                                       
                                    
                                        echo"
                                             <option value='$row[0]'>$row[2]</option>
                                            ";
                                        
                                        }
                                
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control-textarea" name="kriteria" id="kriteria" required></textarea>
                                <label class="label-control" for="kriteria">Kritria</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" name="dana" value="" id="dana" required>
                                <label class="label-control" for="link">dana</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control-input" name="kuota" value="" id="kuota" required>
                                <label class="label-control" for="link">kuota</label>
                                <div class="help-block with-errors"></div>
                            </div>
                           
                            <div class="form-group">
                                <input type="date" class="form-control-input" name="deadline" value="" id="deadline" required>
                                <label class="label-control" for="deadline">Deadline</label>
                                <div class="help-block with-errors"></div>
                            </div>
                           
                            
                            <div class="form-group">
                                <input type="submit" class="form-control-submit-button" value="Tambah" />
                            </div>
                            <!--
                            <div class="form-message">
                                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                            -->
                        </form>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
               
            </div> <!-- end of row -->
        </div> <!-- end of container -->
