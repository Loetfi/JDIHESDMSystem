
     <table class="table table-striped table-hover table-bordered">
       <th colspan="2">Nama Perancang</th>

       <?php foreach ($perancang as $per) { ?>
        <tr>
          <td><?php echo $per['name'];?></td>
          <td><a class="view_data btn pull-right" id="<?php echo $per['login_id'] ?>"><i class="fa fa-chevron-right"></i></a></td>
        </tr>
       <?php } ?>
     </table>


     <!-- view Modal -->
     <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="margin-top: -20px;">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
           <div class="modal-body">
            <!-- Place to print the fetched phone -->
            <div id="phone_result"></div>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-xs btn-warning" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div> 
  


 <script type="text/javascript">
     // Start jQuery function after page is loaded
     $(document).ready(function(){
         // Start jQuery click function to view Bootstrap modal when view info button is clicked
         $('.view_data').click(function(){
             // Get the id of selected phone and assign it in a variable called phoneData
             var phoneData = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected phone data
                 url: "<?php echo site_url('backend/perancang/detail/') ?>",
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {phoneData:phoneData},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected phone in the section called #phone_result 
                     // within the Bootstrap modal
                     $('#phone_result').html(data);
                        // Display the Bootstrap modal
                        $('#phoneModal').modal('show');
                      }
                    });
             // End AJAX function
           });
       });  
</script>
