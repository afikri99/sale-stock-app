
<h1 class="mt-4">Transaksi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">
        <?php echo anchor('/',"Dashboard"); ?>
    </li>
    <li class="breadcrumb-item active">Pesanan Open</li>
</ol>
<div style="padding-bottom: 15px;">
    <button id="btn_reload" class="btn btn-primary">Reload</button>
    <button id="btn_add_new" class="btn btn-success">Add New Produk</button>
</div>

<table id="pesanan_tbl" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Pesanan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Pemesan</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
<div class="modal fade" id="KategoriModal" tabindex="-1" role="dialog" aria-labelledby="KategoriModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="KategoriModalLabel">Form Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_produk" method="POST" enctype='multipart/form-data'>
            <div class="row mb-2">
                <div class="col-md-4">
                    <span for="" class="form-label">Nama Pemesan</span>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-outline-primary">Cari Data</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <span for="" class="form-label">Tanggal Pesan</span>
                </div>
                <div class="col-md-5">
                    <input type="date" class="form-control" id="tglpesan">
                </div>
                
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <span for="" class="form-label">Item Produk</span>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="produk">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-outline-primary" id="cari_produk">Cari Data</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span for="" class="form-label">Jumlah Pesan</span>
                </div>
                <div class="col-md-5">
                    <input type="number" class="form-control" id="jml_pesan">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div id="#pesan_holder"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_data">Add</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    var tbl_pesanan= $('#pesanan_tbl').DataTable( {
        "ajax": "<?php echo site_url('/api/pesanan'); ?>",
        "columns":[
            { "data" : "id" },
            { "data" : "nama" },
            { "data" : "tgl_pesanan" },
            { "data" : null, defaultContent: '<button class="btn btn-warning btn-edit btn-sm"><i class="fa fa-pencil"></i> Edit </button> <button class="btn btn-delete btn-danger btn-sm"><i class="fa fa-trash"></i> delete </button>' },
        ]
    });

    $("#btn_add_new").click(function(){
        $("#KategoriModal").modal('toggle')
    })
});
</script>