
  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="row">
      <div class="col-4">
        <strong>Copyright &copy; <?php echo date('Y')?> <a href="https://vijaynimje.com">Vijay Nimje</a>.</strong>
        All rights reserved.
      </div>
      <div class="col-4"> <?php echo @date('d-M-Y H:i:s');?></div>
      <div class="6">
        <div class="float-right d-none d-sm-inline-block">
          <b> MS Group Website Version</b> 1.1.0
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/admin/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url();?>assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/admin/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/admin/dist/js/pages/dashboard2.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#country').on('change',function(){
            var id = $(this).val();
            if(id == '')
            {
              $('#state').prop('disabled', true);
            }
            else
            {
               $('#state').prop('disabled', false);
                $.ajax({
                    url:"<?php echo base_url();?>location/get_states",
                    type: "POST",
                    data: {'id' : id},
                    // datatype: 'json',
                    success: function(data){
                        $('#state').html(data);
                    },
                    error: function(){
                        alert('Error occured .....');
                    }
                });
            }
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#state').on('change',function(){
            var id = $(this).val();
            if(id == '')
            {
              $('#city').prop('disabled', true);
            }
            else
            {
                // success:function(){
                //     alert('State id found');
                // }
                // error:function(){
                //      alert('State Id Not Found....');
                // }
               $('#city').prop('disabled', false);
                $.ajax({
                    url:"<?php echo base_url();?>location/get_district",
                    type: "POST",
                    data: {'id' : id},
                    // datatype: 'json',
                    success: function(data){
                        $('#city').html(data);
                    },
                    error: function(){
                        alert('Error occured .....');
                    }
                });
            }
        });

    });
</script>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('same_num').on('change',function(){
            var checkBox = document.getElementById("same_num");
            if (checkBox.checked == true){
                text.style.display = "block";
              } else {
                 text.style.display = "none";
              }
        });
    });
</script> -->
<script>
function myFunction() {
  var checkBox = document.getElementById("same_num");
  var whatsapp = document.getElementById("whatsapp");
  if (checkBox.checked == true){
    whatsapp.value = mobile.value;
    $('#whatsapp').prop('disabled', true);
  } else {
     whatsapp.value = "";
     $('#whatsapp').prop('disabled', false);
  }
}
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>