
      <!-- header section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding mb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Nous vous suggérons...</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url(); ?>assets/images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
               <?php foreach($regimes as $regime){ ?>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <div class="blog_img"><img src="<?php echo base_url(); ?>assets/images/<?php echo $regime['image']; ?>"></div>
                        <h4 class="prep_text"><?php echo $regime['nom_regime']; ?> :</h4>
                        <div class="row px-2">
                            <p class="lorem_text col-md-12">Activité sportive :<span style="font-weight:600;"> <?php echo $regime['type_sport_description']; ?> </span></p>
                            <p class="lorem_text col-md-12"> <span style="font-weight:600;"><?php echo $regime['operation'].' '.$regime['poids']; ?> kg</span> en <?php echo $regime['duree']; ?> jours</p>
                            <p class="lorem_text col-md-12"> <span style="font-weight:600; text-xs"> <?php echo number_format($regime['prix'],2,',','.'); ?> Ar</p>
                        </div>
                     </div>
                     <div class="read_bt"><a onclick="achat(<?php echo $regime['idregime']; ?>)">Choisir</a></div>
                  </div>
                  <?php } ?>
               
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- footer section start -->
      <!-- footer section end -->
      <!-- copyright section start -->
      <script>

   function afficherBoiteDialogue(msg) {
      var boiteDialogue = document.createElement('div');
      boiteDialogue.classList.add('boite-dialogue');

      boiteDialogue.innerHTML = "<main class='main-content  mt-0'>\
      <section>\
         <h2>"+msg+"</h2></div>\
         \
      </section>\
   </main>\
   "
      var arrierePlanGris = document.createElement('div');
      arrierePlanGris.classList.add('arriere-plan-gris');

      document.body.appendChild(arrierePlanGris);
      document.body.appendChild(boiteDialogue);

      arrierePlanGris.addEventListener('click', function() {
         document.body.removeChild(boiteDialogue);
         document.body.removeChild(arrierePlanGris);
      });
      }
         function achat(idregime) {
            var xhr = new XMLHttpRequest();
            var url = '<?php echo site_url('regime/acheter'); ?>?idregime='+idregime ;

            xhr.open('GET', url, true);

            xhr.onreadystatechange = function() {
               if (xhr.readyState === 4 && xhr.status === 200) {
                  if(xhr.responseText!=null){
                     afficherBoiteDialogue(xhr.responseText);
                  }
                  else{
                     window.location.href = '<?php echo site_url('programme/index'); ?>';
                  }
               }
            };

            xhr.send();
            }
      </script>
     