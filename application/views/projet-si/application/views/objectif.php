      <!-- blog section start -->
      <div class="contact_section layout_padding mb-5">
         <div class="container">
            <div class="row">
               <div class="col-sm-12" data-aos="fade-left"   data-aos-duration="500" data-aos-delay="600">
                  <h1 class="contact_taital">Que souhaitez-vous?</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url(); ?>assets/images/bulit-icon.png"></div>
               </div>
            </div>
         </div>
         <div class="container-fluid ">
            <div class="contact_section_2">
               <div class="row mb-5">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <form method="post" action="<?php echo site_url('objectif/insert'); ?>">
                           <div class="row" style="width:70%;margin:auto;" data-aos-duration="500" data-aos-delay="600">
                             <?php foreach($objectifs as $objectif){ ?>
                              <div class="col-md-12" style="font-size: 25px;">
                               <label>
                                 <input  type="radio" name="idobjectif" value=" <?php echo $objectif['idobjectif']; ?>" data-aos="fade-left">
                                 <?php echo $objectif['description']; ?>
                               </label>
                             </div>
                              <?php } ?>
                             
                             <div class="col-md-12">
                               <input type="text" class="mail_text" placeholder="jusqu'à avoir ... (en kg)" name="poidsobjectif">
                             </div>
                             <div class="col-md-12 send_bt" > <input type="submit" value="Continuer"> </div>
                           </div>
                         </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     