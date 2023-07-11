<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier regime</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo site_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo site_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>/assets/css/main.css" rel="stylesheet">
</head>

<body class="body__bg-blue">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
    
            <div class="col-xl-10 col-lg-12 col-md-9">
    
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="<?php echo site_url(); ?>/assets/images/regime_modifier.png" alt="erreur" width="450px" height="450px" class="form__div__img__marging-top form__div__img__marging-left">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Modifier regime</h1>
                                    </div>
                                    
                                    <form class="user" action="<?php echo site_url(); ?>/Regime_back/modifier_regime" method="post">
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Nom:</label>
                                            <input type="text" class="form-control"
                                                aria-describedby="emailHelp"
                                                value="<?php echo $regime['nom_regime'] ?>" name="nom">
                                        </div>
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Objectif:</label>
                                            <select name="objectif" class="form-control">
                                                <?php 
                                                    foreach ($list_objectif as $objectif) { 
                                                        if($objectif['idobjectif'] == $regime['idobjectif']){
                                                ?>
                                                            <option value="<?php echo $objectif['idobjectif']; ?>" selected><?php echo $objectif['description']; ?></option>
                                                <?php
                                                        } else {
                                                ?>
                                                            <option value="<?php echo $objectif['idobjectif']; ?>"><?php echo $objectif['description']; ?></option>
                                                <?php
                                                        }
                                                    } 
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Poids:</label>
                                            <input type="number" class="form-control"
                                                aria-describedby="emailHelp"
                                                value="<?php echo $regime['poids']; ?>" name="poids">
                                        </div>
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">IMC:</label>
                                            <select name="imc" class="form-control">
                                                <?php 
                                                    foreach ($list_imc as $imc) { 
                                                        if($imc['idimc'] == $regime['idimc']){
                                                ?>
                                                            <option value="<?php echo $imc['idimc']; ?>" selected><?php echo $imc['description']; ?></option>
                                                <?php
                                                        } else {
                                                ?>
                                                            <option value="<?php echo $imc['idimc']; ?>"><?php echo $imc['description']; ?></option>
                                                <?php
                                                        }
                                                    } 
                                                ?>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Kcal_min:</label>
                                            <input type="number" class="form-control"
                                                aria-describedby="emailHelp"
                                                value="<?php echo $regime['kcalmin']; ?>" name="Kcal_min">
                                        </div>
    
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Kcal_max:</label>
                                            <input type="number" class="form-control"
                                                aria-describedby="emailHelp"
                                                value="<?php echo $regime['kcalmax']; ?>" name="Kcal_max">
                                        </div>
    
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Type_sport:</label>
                                            <select name="type_sport" class="form-control">
                                                <?php foreach ($list_type_sport as $type_sport) { ?>
                                                    <option value="<?php echo $type_sport['idtype_sport']; ?>"><?php echo $type_sport['description']; ?></option>
                                                <?php
                                                    } 
                                                ?>

                                                <?php 
                                                    foreach ($list_type_sport as $type_sport) { 
                                                        if($type_sport['idtype_sport'] == $regime['idtype_sport']){
                                                ?>
                                                            <option value="<?php echo $type_sport['idtype_sport']; ?>" selected><?php echo $type_sport['description']; ?></option>
                                                <?php
                                                        } else {
                                                ?>
                                                            <option value="<?php echo $type_sport['idtype_sport']; ?>"><?php echo $type_sport['description']; ?></option>
                                                <?php
                                                        }
                                                    } 
                                                ?>
                                        
                                            </select>
                                        </div>

                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Duree:</label>
                                            <input type="number" class="form-control"
                                                aria-describedby="emailHelp"
                                                value="<?php echo $regime['duree'] ?>" name="duree">
                                        </div>
    
                                        <div class="form-group form__div__grid">
                                            <label class="form__div__label__padding-top form__div__label__marging-right">Prix:</label>
                                            <input type="number" class="form-control"
                                                aria-describedby="emailHelp"
                                                value="<?php echo $regime['prix']; ?>" name="prix">
                                        </div>

                                        <input type="hidden" value="<?php echo $regime['idregime']; ?>" name="idregime">

                                        <input type="submit" value="Modifier" class="btn btn-primary btn-user btn-block">
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo site_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo site_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo site_url(); ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>