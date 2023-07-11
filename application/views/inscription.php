<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blog</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap2.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url(); ?>assets/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
   <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="#">
              COMME J'ADORE
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="#">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-up.html">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-in.html">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="<?php echo site_url('welcome/login');?>" class="btn btn-sm mb-0 me-1 btn-primary">Log in</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
      <!-- blog section start -->
      <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Modifier un centre</h4>
                  <p id="erreur"> <span style="font-size:20px; font-weight:600; " >  <?php if(isset ($erreur)){echo '✘ '.$erreur;} ?></span></p><p id="message"><span style="font-size:20px; font-weight:600; " >  <?php if(isset ($message)){echo '✔ '.$message;} ?></span></p>
                </div>
                <div class="card-body">
                <?php echo form_open('centre/add', array( 'method'=>'post')); ?>
                    <div class="mb-3">
                      <?php echo form_input(array(
                          'name'          => 'nom',
                          'id'            => 'nom',
                          'class'         => 'form-control form-control-lg',
                          'placeholder'   => 'nom',
                          'aria-label'    => 'nom',
                          'required' => true,
                          'value'=> form_error('nom')
                      )) ;
                      echo form_error('nom');
                      ?> 
                      </div>
                    <div class="mb-3">
                        <select name="categorie" class="form-select <?php echo form_error('categorie') ? 'is-invalid' : ''; ?>"
                            aria-label="Default select example" id="compte">
                            <?php foreach ($categories as $categorie) : ?>
                                <option value="<?php echo $categorie['idcategoriecentre']; 
                                ?>" >
                                <?php echo $categorie['nomcategorie']   ; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('categorie'); ?>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Valider</button>
                    </div>
                    <?php
                        echo form_close();
                    ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>
  
  
      <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?php echo base_url(); ?>assets/img/ebp-image-blog-taches-comptables-a-dematerialiser-d-urgence-bd-489887943.jpg');
          background-size: cover;background-position:center;">
                <span class="mask bg-gradient-primary opacity-6"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>

</html>