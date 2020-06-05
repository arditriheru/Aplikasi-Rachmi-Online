</div><!-- Right Panel -->
<!-- footer -->
    <script>
      // Loading Page
      var myVar;
      function myFunction() {
      myVar = setTimeout(showPage, 500);
      }
      function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
      }
    </script>
    <script src="vendors/sweetalert/sweetalert.min.js"></script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>