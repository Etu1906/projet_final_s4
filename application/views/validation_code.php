
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Validation code</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Code</th>
                        <th>Montant</th>
                        <th></th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach ($demande as $code) { ?>
                        <tr>
                            <td><?php echo $code['nom_utilisateur']; ?></td>
                            <td><?php echo $code['numero']; ?></td>
                            <td><?php echo $code['montant']; ?></td>
                            <td class="table__tbody__td__flex__center"><a href="<?php echo site_url(); ?>/Validation/valide?idcode_utilisateur=<?php echo $code['idcode_utilisateur']; ?>" class="btn btn-primary btn-user button "> Valider</a></td>
                            
                        </tr>
                    <?php } ?>
                    
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->