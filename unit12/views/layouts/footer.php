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

   <!-- Custom Theme JavaScript -->
   <script src="public/dist/js/sb-admin-2.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    $(function(){
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
                    } /*else {
                        swal("Bạn đã ko xóa!");
                    }*/
                });
        })
    });
</script>
</body>

</html>