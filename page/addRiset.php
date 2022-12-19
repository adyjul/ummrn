<div class="container">
            <div class="row">            
            <div style="width:100%; padding-top:50px;"></div>
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2>Tambah Riset</h2>
                        <hr />
                        
                        <form name="RegForm" method="POST" action="master_riset.php?page=addRisetAction">
                            <div class="form-group">
                                <input type="hidden" value=" <?php echo $_SESSION['userid'] ?> " name="id_research">
                                <input type="text" class="form-control-input" name="judul" value="" id="judul" required>
                                <label class="label-control" for="judul">judul</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" name="year" value="" id="year" required>
                                <label class="label-control" for="year">Tahun publish</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="link" value="" id="link" required>
                                <label class="label-control" for="link">link</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control-input" name="desc" value="" id="desc" required>
                                <label class="label-control" for="desc">Deskripsi singkat riset</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select  class="form-control-input" name="status" id="status">
                                    <option value="Open">Open</option>
                                    <option value="Active">Active</option>
                                    <option value="Completed">Completed</option>
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
