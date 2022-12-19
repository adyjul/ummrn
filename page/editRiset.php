<div class="container">
            <div class="row">            
            <div style="width:100%; padding-top:50px;"></div>
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2>Edit Riset</h2>
                        <hr />

                        <?php 
                            include"koneksi.php";
                            $sql="select * from projects where projects.id_project=$_GET[id]";
                            $query=mysqli_query($koneksi,$sql); 
                            $row=mysqli_fetch_array($query,MYSQLI_NUM);
                        ?>

                        
                       
                        <form name="RegForm" method="POST" action="master_riset.php?page=editRisetAction">
                            <div class="form-group">
                                <input type="hidden" value=" <?= $_GET['id'] ?> " name="id_project">
                                <input type="text" class="form-control-input" name="judul" value="<?= $row[2] ?>" id="judul" required>
                                <label class="label-control" for="judul">judul</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" name="year" value="<?= $row[3] ?>" id="year" required>
                                <label class="label-control" for="year">Tahun publish</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="link" value="<?= $row[4] ?>" id="link" required>
                                <label class="label-control" for="link">link</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control-input" name="desc" value="<?= $row[5] ?>" id="desc" required>
                                <label class="label-control" for="desc">Deskripsi singkat riset</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select  class="form-control-input" name="status" id="status">
                                    <option <?php $row[6] == "Open" ? 'selected' : '' ?> value="Open">Open</option>
                                    <option <?php $row[6] == "Active" ? 'selected' : '' ?> value="Active">Active</option>
                                    <option <?php $row[6] == "Completed" ? 'selected' : '' ?> value="Completed">Completed</option>
                                </select>
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
