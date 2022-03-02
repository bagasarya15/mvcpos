// Functions ALl Tables

$(document).ready(function () {
  $('#tablePos').DataTable({
    responsive: {
      details: false,
    },
  });
});

// $(document).ready(function () {
//   var table = $('#tablePos').DataTable({
//     lengthChange: false,
//     buttons: ['excel', 'pdf', 'colvis', 'print'],
//   });

//   table.buttons().container().appendTo('#tablePos_wrapper .col-md-6:eq(0)');
// });

// <!-- Utility Button DataTables -->
// <script src="<?= BASEURL; ?>/vendor/datatables/Buttons-2.2.2/js/dataTables.buttons.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/Buttons-2.2.2/js/buttons.bootstrap4.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/JSZip-2.5.0/jszip.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/Buttons-2.2.2/js/buttons.html5.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/Buttons-2.2.2/js/buttons.print.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/Buttons-2.2.2/js/buttons.colVis.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
// <script src="<?= BASEURL; ?>/vendor/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
