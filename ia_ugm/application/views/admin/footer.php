<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $('#thetable').DataTable();
  } );
</script>

<script src="<?php echo base_url("assets/ckeditor/ckeditor.js") ?>"></script>
<script >
  CKEDITOR.replace("theeditor",{
  	filebrowserImageBrowserUrl : '<?php echo base_url("assets/kcfinder"); ?>'
  });
</script>
 



<!--  -->
<script src="<?php echo base_url("assets/js/sendiri.js") ?>"> </script>


</body>
</html>