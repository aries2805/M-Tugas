
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('sweetalert/package/dist/sweetalert2.all.min.js') }}"></script>
    @session('success')
        <script>
            Swal.fire({
                title: "Sukses!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endsession
    @session('error')
        <script>
            Swal.fire({
                title: "Gagal!",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endsession


</body>

</html>
