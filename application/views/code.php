
      <!-- header section end -->
      <!-- blog section start -->
      <style>
        tr:nth-child(even) {
            background-color: #C7F562;
        }
      </style>
      <div class="contact_section layout_padding mb-5">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Se remplir les poches</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url() ?>assets/images/bulit-icon.png"></div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                    <div class="row" style="width:50%;margin:auto;">
                        <div class="mail_section_1">
                            <form action="<?php echo base_url() ?>code/usecode" method="post">
                            <div class="row" style="width:100%;margin:auto;" >
                            <div class="col-md-12" style="color:red;">
                            <?php echo form_error('numero'); ?>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="mail_text" <?php echo form_error('numero') ?  'style="border:1px solid red;"' : '' ?> value="<?php echo set_value('numero'); ?>" placeholder="Entrez un code" name="numero">
                            </div>
                              <div class="col-md-12 send_bt" > <input type="submit" value="Continuer"> </div>
                            </div>
                            </form>
                        </div>
                        <h3 class="col-md-12  mt-5 contact_taital">Les Codes</h3>
                        <table class="col-md-12 mt-5" border="1px" >
                            <div class="row">
                            <tr class="col-md-12">
                                    <th  class="px-4" >code</th>
                                    <th  class="px-4" >Montant (Ar) </th>
                                 </tr>
                              <?php foreach( $codes as $c ){  ?>
                                 <tr class="col-md-12">
                                    <td  class="px-4" ><?php  echo $c['numero']; ?></td>
                                    <td  class="px-4 text-right" ><?php  echo format_number($c['montant']); ?> </td>
                                 </tr>
                              <?php } ?>
                            </div>
                        </table>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- footer section start -->
      <!-- footer section end -->
      <!-- copyright section start -->
 