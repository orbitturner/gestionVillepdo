<?php
  require_once "../routes/dir.php";
?>
            <!-- CREATE A NEW CITY -->
            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Enregistrer une Nouvelle Ville</h3>
                <!-- //  CARD TOOLS  -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                <h4 class="mb-4">Formulaire d'Ajout</h4> 
                <form action="<?= getProjectPath();?>controller/villeController.php" method="POST">
                  <!-- // CITY NAME -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                    </div>
                    <input type="text" class="form-control" name="cityname" placeholder="Entrer le Nom de la Ville" required>
                  </div>
                  <!-- // LATITUDE -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                      </div>
                      <input type="number" class="form-control" name="latitude" placeholder="Entrer la Latitude" value="0,00" step=".0000001" required>
                  </div>
                  <!-- // LONGITUDE -->
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                      </div>
                      <input type="number" class="form-control" name="longitude" placeholder="Entrer la Longitude" value="0,00" step=".0000001" required>
                  </div>

                  <div class="input-group">
                    <button type="reset" class="btn btn-md bg-gradient-danger">
                      <i class="fas fa-times"></i> Reset
                    </button>
                    <button type="submit" name="addCityForm" value="true" class="btn btn-md bg-gradient-success" style="position: absolute; right: 0;">
                      <i class="fas fa-save"></i> Save
                    </button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- ./END  -->