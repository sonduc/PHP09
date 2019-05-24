   </div>
   <!-- /#wrapper -->

   <!-- jQuery -->
   <script src="public/vendor/jquery/jquery.min.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>

   <!-- Metis Menu Plugin JavaScript -->
   <script src="public/vendor/metisMenu/metisMenu.min.js"></script>

   <!-- Morris Charts JavaScript -->
   <script src="public/vendor/raphael/raphael.min.js"></script>
   <script src="public/vendor/morrisjs/morris.min.js"></script>
   <script src="public/data/morris-data.js"></script>

   <script src="public/vendor/datatables/js/jquery.dataTables.min.js"></script>
   <script src="public/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
   <script src="public/vendor/datatables-responsive/dataTables.responsive.js"></script>
   <!-- Custom Theme JavaScript -->
   <script src="public/dist/js/sb-admin-2.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function() {
      $('.btnAdd').click(function() {
        var id = $(this).data('id');
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: 'get',
          url: '?mod=sales&act=add_to_cart_ajax&id=' + id,
          success: function(data) {
                    // toastr.info('Đã thêm vào giỏ hàng!');
                  }
                });
      });
    });
    $(function(){
      $('#dataTables-example').DataTable({
        responsive: true
      });
      
      setTimeout(function(){
        $('.alert-success').hide();
      },3000);

      $('.delete').click(function(e){
        e.preventDefault();
        var url = $(this).attr("href");
        swal({
          title: "Bạn có muốn xóa không?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = url;
          }
        });
      });
      
    })

    
  </script>
</body>

</html>