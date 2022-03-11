// JS Modal Ubah Supplier
$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tambah Data Supplier');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#formModalLabel').html('Ubah Data Supplier');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/mvcpos/public/supplier/ubah');

    const id_supplier = $(this).data('id_supplier');
    $.ajax({
      url: 'http://localhost/mvcpos/public/supplier/getubah',
      data: { id_supplier: id_supplier },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#namaSupplier').val(data.namaSupplier);
        $('#alamatSupplier').val(data.alamatSupplier);
        $('#tlpSupplier').val(data.tlpSupplier);
        $('#deskripsi').val(data.deskripsi);
        $('#id_supplier').val(data.id_supplier);
      },
    });
  });

  $('select[name=selectBarang]').change(function () {
    let data = $(this).find(':selected').val();

    $.ajax({
      type: 'POST',
      url: 'fungsi/edit/edit.php?cari_barang=yes',
      data: 'keyword=' + $(this).val(),
      beforeSend: function () {
        $('#hasil_cari').hide();
        $('#tunggu').html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
      },
      success: function (html) {
        $('#tunggu').html('');
        $('#hasil_cari').show();
        $('#hasil_cari').html(html);
      },
    });
  });
});

// JS Modal Ubah Customer
$(function () {
  $('.tambahCustomer').on('click', function () {
    $('#formModalLabel').html('Tambah Data Customer');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.modalUbahCustomer').on('click', function () {
    $('#formModalLabel').html('Ubah Data Customer');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/mvcpos/public/customer/ubah');

    const id_customer = $(this).data('id_customer');
    $.ajax({
      url: 'http://localhost/mvcpos/public/customer/getubah',
      data: { id_customer: id_customer },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#namaCustomer').val(data.namaCustomer);
        $('#alamatCustomer').val(data.alamatCustomer);
        $('#tlpCustomer').val(data.tlpCustomer);
        $('#id_customer').val(data.id_customer);
      },
    });
  });
});

// JS Modal Ubah Kategori
$(function () {
  $('.tambahKategori').on('click', function () {
    $('#formModalLabel').html('Tambah Data Kategori');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.modalUbahKategori').on('click', function () {
    $('#formModalLabel').html('Ubah Data Kategori');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/mvcpos/public/kategori/ubah');

    const id_kategori = $(this).data('id_kategori');
    $.ajax({
      url: 'http://localhost/mvcpos/public/kategori/getubah',
      data: { id_kategori: id_kategori },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#kategori').val(data.kategori);
        $('#tgl_input').val(data.tgl_input);
        $('#id_kategori').val(data.id_kategori);
      },
    });
  });
});

// JS Modal Ubah Produk
$(function () {
  $('.tambahProduk').on('click', function () {
    $('#formModalLabel').html('Tambah Data Produk');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.modalUbahProduk').on('click', function () {
    $('#formModalLabel').html('Ubah Data Produk');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/mvcpos/public/produk/ubah');

    const id_produk = $(this).data('id_produk');
    $.ajax({
      url: 'http://localhost/mvcpos/public/produk/getubah',
      data: { id_produk: id_produk },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#kodeBarang').val(data.kodeBarang);
        $('#id_kategori').val(data.id_kategori);
        $('#namaBarang').val(data.namaBarang);
        $('#hargaBeli').val(data.hargaBeli);
        $('#hargaJual').val(data.hargaJual);
        $('#satuanBarang').val(data.satuanBarang);
        $('#stok').val(data.stok);
        $('#tgl_input').val(data.tgl_input);
        $('#tgl_update');
        $('#id_produk').val(data.id_produk);
      },
    });
  });
});
