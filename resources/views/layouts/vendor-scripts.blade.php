<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="/metro/assets/plugins/global/plugins.bundle.js"></script>
<script src="/metro/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used by this page)-->
<script src="/metro/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--end::Javascript-->
<script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#34c38f",
            cancelButtonColor: "#f46a6a",
            confirmButtonText: "Yes, delete it!"
        }).then(function (result) {
            if (result.value) {
                window.location.href = url;
                // Swal.fire("Deleted!", "Your file has been deleted.", "success");
            }
        });
    });

    $(function () {
        $("#default-datatable").DataTable({
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }] ,
            "responsive": true,
            "autoWidth": false,
            "rtl" : false,
            "language": {
                "paginate": {
                    "previous": "‹" ,
                    "next": "›"
                }
            } ,
        });
    });
</script>

@yield('script')

<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>

@yield('script-bottom')
