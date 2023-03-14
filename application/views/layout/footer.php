<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url(); ?>/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/js/template.js"></script>
  <script src="<?= base_url(); ?>/js/settings.js"></script>
  <script src="<?= base_url(); ?>/js/todolist.js"></script>
  <script>
         $('.custom-file-input').on('change', function() {
            let filename = $(this).val().split('\\').pop();
            $(this).next('custom-file-label').addClass("selected").html(filename);
        });

        $(document).ready(function() {
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();          
                var total = parseInt(harga) * parseInt(jumlah);
            
                $("#total").val(total);
                  if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                      alert('stok tidak tersedia! stok tersedia: ' + parseInt($('input[name="stok"]').val()));
                      reset();
                  }
            });

            function reset() {
                $('input[name="jumlah"]').val('');
                $('input[name="total"]').val('');
            }
        });
    </script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
