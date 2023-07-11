
      <div class="blog_section layout_padding mb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Mon Menu</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url() ?>assets/images/bulit-icon.png"></div>
                  <form method="post" action="<?php echo site_url('programme/jour'); ?>">
                     <div class="row" style="width:70%;margin:auto;" data-aos-duration="500" data-aos-delay="600">
                        <div class="col-md-12">
                        <label for=""> Vous voulez connaitre votre planning? </label>
                           <input type="text" class="mail_text" placeholder="Choisisez un jour" name="jours">
                           <input type="hidden" class="mail_text" placeholder="Choisisez un jour" value="<?php echo $programme; ?>" name="programme">
                        </div>
                        <div class="col-md-12 send_bt" > <input type="submit" value="rechercher"> </div>
                     </div>
               </form>
               </div>
               
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <?php for( $i = 0 ; $i != count($planning) ; $i++ ){ ?>
                     <div class="mt-5 blog_img"><span class="prep_text" style=" font-size:2em;" ><span style="font-weight: 200;" >Jour</span> <?php echo( $i + 1 + $debut - 1 )?>:</span></div>
                     <div class="col-md-4">
                        <div class="blog_box" style="border: solid 1px #333; border-top:none;  border-bottom:none; ">
                           <h4 class="prep_text" style=" background: rgb(0, 255, 242)">Petit déjeuner :</h4>
                           <div class="row px-2">
                           
                              <p class="lorem_text col-md-12 mb-2   py-2"><span style="color:rgb(0, 255, 242); font-size: 20px;" class="bullet">&#8226;</span>Nom plat :<span style="font-weight:600;"> <?php echo $planning[$i]['nom_plat_matin']; ?> </span></p>                           
                           </div>
                     </div>
                     

                     </div>
                     <div class="col-md-4">
                        <div class="blog_box" style="border: solid 1px #333; border-top:none;  border-bottom:none; ">
                           <h4 class="prep_text" style=" background: rgb(225, 255, 0)">Déjeuner :</h4>
                           <div class="row px-2">
                           
                           <p class="lorem_text col-md-12 mb-2   py-2"><span style="color:rgb(0, 255, 242); font-size: 20px;" class="bullet">&#8226;</span>Nom plat :<span style="font-weight:600;"> <?php echo $planning[$i]['nom_plat_midi']; ?> </span></p>                           
                           
                           </div>
                     </div>
                     

                     </div>
                     <div class="col-md-4">
                        <div class="blog_box" style="border: solid 1px #333; border-top:none;  border-bottom:none; ">
                           <h4 class="prep_text" style=" background: #de8475">Diner :</h4>
                           <div class="row px-2">
                           
                           <p class="lorem_text col-md-12 mb-2   py-2"><span style="color:rgb(0, 255, 242); font-size: 20px;" class="bullet">&#8226;</span>Nom plat :<span style="font-weight:600;"> <?php echo $planning[$i]['nom_plat_soir']; ?> </span></p>                           
                           
                           </div>
                     </div>
                     

                     </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   