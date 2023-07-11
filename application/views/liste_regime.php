                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Liste des regimes</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom de regime</th>
                                            <th>Objectif</th>
                                            <th>Poids en kg</th>
                                            <th>Duree en j</th>
                                            <th>Prix en Ar</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    <?php foreach ($liste_regime as $regime) { ?>
                                        <tr>
                                            <td ><?php echo $regime['nom_regime']; ?></td>
                                            <td><?php echo $regime['objectif']; ?></td>
                                            <td style='text-align:right;'><?php echo $regime['poids']; ?></td>
                                            <td style='text-align:right;'><?php echo $regime['duree']; ?> </td>
                                            <td style='text-align:right;'><?php echo number_format($regime['prix'],0,',','.'); ?></td>
                                            <td><a href="<?php echo site_url(); ?>/Regime_back/modifier_regime_page/<?php echo $regime['idregime']; ?>">Modifier</a> </td>
                                            <td><a href="<?php echo site_url(); ?>/Regime_back/delete_regime/<?php echo $regime['idregime']; ?>">Supprimer</a> </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>