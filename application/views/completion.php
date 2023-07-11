      <!-- blog section start -->
      <div class="contact_section layout_padding mb-5">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Vos informations</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url(); ?>assets/images/bulit-icon.png"></div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <form method="post" action="<?php echo site_url('profil/insert');?>">
                           <div class="row" style="width:60%;margin:auto;" >
                           <div class="col-md-12">
                              <input type="number" class="mail_text" placeholder="taille en mètres" name="taille" step="any">
                           </div>
                           <div class="col-md-12">
                           <input type="number" class="mail_text" placeholder="poids en kg" name="poids" step="any">
                           </div>
                           

                              <div class="send_bt" ><input type="submit" value="Terminer"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      