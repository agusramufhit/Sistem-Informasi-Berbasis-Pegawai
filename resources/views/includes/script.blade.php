<!-- Bootstrap core JavaScript-->
<script src="{{ url('backend/vendor/jquery/jquery.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('backend/js/sb-admin-2.min.js')}}"></script>

<!-- Page Script Datatavle Server Side -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{ url('backend/vendor/jquery/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/pdfmake.min.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/vfs_fonts.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/buttons.html5.min.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/buttons.print.min.js')}}"></script>
<script src="{{ url('backend/vendor/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ url('backend/vendor/jquery/jquery.validate.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


<!-- JavaScript -->
<script type="text/javascript">
$(document).ready(function() {
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    $('.input-daterange').datepicker({
        todayBtn:'linked',
        format:'yyyy-mm-dd',
        autoclose:true
    });

 load_data();
 $('.input-daterange').datepicker({
                todayBtn: 'linked',
                format: 'yyyy-mm-dd',
                autoclose: true
            });
$('#filter').click(function () {
        var from_date = $('#from_date').val(); 
        var to_date = $('#to_date').val(); 
        if (from_date != '' && to_date != '') {
            $('#table_pegawai').DataTable().destroy();
            load_data(from_date, to_date);
        } else {
            alert('Both Date is required');
                }
            });
$('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_pegawai').DataTable().destroy();
                load_data();
            });
 function load_data(from_date = '', to_date = ''){
    $('#table_pegawai').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'pdf', 'print'
        ],
        processing: true,
        serverside: true,
        ajax: {
            url: "{{ route('pegawai.index') }}",
            type: 'GET',
            data:{from_date:from_date, to_date:to_date}
              },
        columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'nip',
                            name: 'nip'
                        },
                        {
                            data: 'alamat',
                            name: 'alamat'
                        },
                        {
                            data: 'tgllhr',
                            name: 'tgllhr'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ],
        columnDefs: [
        {   "targets": [0],
            "visible": false,
            "searchable": false
        }],
    });
}
    } );
        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });
     
        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#form-tambah-edit").length > 0) {
            $("#form-tambah-edit").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('pegawai.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_pegawai').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }
        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('pegawai/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#alamat').val(data.alamat);
                $('#tgllhr').val(data.tgllhr);
                $('#created_at').val(data.created_at);
            })
        });
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "pegawai/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_pegawai').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'bottomRight'
                    });
                }
            })
        });
</script>