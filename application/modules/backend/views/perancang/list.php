<div class="padding">   

  <div class="box">
    <div class="box-header light lt">
      <h3>Data Perancang PUU</h3> 
    </div>
    <!-- Madya , Muda, Pertama -->
    <div class="row"> 
     <div class="col-sm-4"> 

       <table class="table table-striped table-hover table-bordered">
        <th colspan="2">Jabatan</th>
        <?php foreach ($jabatan_perancang as $jp) { ?>
          <tr>
            <td><?php echo $jp['jabatan'];?></td>
            <td><a class="view_data_perancang" id="<?php echo $jp['jabatan'];?>"><i class="fa fa-chevron-right "></i></a></td>
          </tr>
        <?php } ?>
      </table> 

    </div>
    <div class="col-sm-8">

     <div id="show_data_perancang"></div>

   </div>
   <div class="col-sm-8">


    <!-- <a >W3Schools.com</a>  -->
    <script type="text/javascript"> 

         // Start jQuery function after page is loaded
         $(document).ready(function(){
         // Start jQuery click function to view Bootstrap modal when view info button is clicked
         $('.view_data_perancang').click(function(){
             // Get the id of selected phone and assign it in a variable called phoneData
             var phoneData = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected phone data
                 url: "<?php echo site_url('backend/perancang/list/')?>",
                    // Method of getting data
                    method: "GET",
                    // Data is sent to the server
                    data: {id_jabatan:phoneData},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected phone in the section called #phone_result 
                     // within the Bootstrap modal
                     $('#show_data_perancang').html(data);
                        // Display the Bootstrap modal
                        // $('#phoneModal').modal('show');
                      }
                    });
             // End AJAX function
           });
       });  
     </script>
   </div>
 </div> 
