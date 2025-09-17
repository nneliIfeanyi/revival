 <!-- Full Screen Modal -->
 <div class="modal fade" id="audioModal<?php echo $row['id']; ?>" tabindex="-1" data-bs-backdrop="false">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title"> <?php echo $row['title']; ?></h5>
                 <button type="button" id="pauseAudio<?php echo $row['id']; ?>" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-12 shadow mx-auto">
                         <audio id="player<?php echo $row['id']; ?>" controls>
                             <source src="<?php echo URLROOT . $row['link']; ?>" type="audio/mpeg">
                             your browser does not support the audio element.
                         </audio>
                     </div>
                 </div>
             </div>
             <!-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
             </div> -->
         </div>
     </div>
 </div><!-- End Full Screen Modal-->
 <script>
     //  const playing = document.querySelectorAll('[id="player<?php echo $row['id']; ?>"]');
     const stopBtn = document.querySelector('[id="pauseAudio<?php echo $row['id']; ?>"]');
     stopBtn.addEventListener('click', () => {
         let audios = document.querySelectorAll("audio");
         audios.forEach(audio => {
             audio.pause();
         })
     })
 </script>