<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

  <script>
    
    document.querySelector('.button').onclick = function(){
    
      var password = document.querySelector('.password').value,
      confirmPassword = document.querySelector('.confirmPassword').value;

      if (password != confirmPassword) {
        alert("Cek Kembali Password");
        return false
      } else {
        return true;
      }
    
    }
  </script>

  <script >
     function format_number(){
      var phone_number = document.getElementById("phone_number");
      var regex_cell = /(\d{1})(\d{3})(\d{4})(\d{4})/g;
      var new_value = phone_number.value.replace(regex_cell,"(+62) $2-$3-$4");
      phone_number.value = new_value;
     }
  </script>

</body>

</html>