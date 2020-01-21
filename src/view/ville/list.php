<!-- // SHOW CITIES TABLES -->
<div class="card-header">
              <h3 class="card-title">Liste des Villes Enregistrées</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="listeVilleTable" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>City Name</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <!-- BODY -->
                <tbody>
                  <?php
                    $cities = getAllCity();
                    $i = 0;
                    foreach ($cities as $row) {
                      $i++;
                      echo '
                              <tr>
                                  <td>' . $i . '</td>
                                  <td>' . $row['cityname'] . '</td>
                                  <td>' . $row['latitude'] . '</td>
                                  <td>' . $row['longitude'] . '</td>
                                  <td align="center">cityId="'.$row['id'].'"</td>
                              </tr>
                          ';
                  }
                  ?>
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>N°</th>
                  <th>City Name</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->