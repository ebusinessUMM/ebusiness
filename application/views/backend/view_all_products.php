<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Products</title>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

  	<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
  	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    <style>
      .row div{
        border: #000 0px solid
      }
    </style>
  </head>

  <body>

    <!--load topmenu -->
    <?php $this->load->view('backend/admin_topmenu'); ?>
    <!--end load topmenu -->

    <!--container-->
    <div class="container">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="#">Admin</a></li>
          <li class="active">Data Products</li>
        </ol>

        <button class="btn btn-primary" data-target="#tambahData" data-toggle="modal" type="button">
          <i class="icon wb-plus" aria-hidden="true"></i> Tambah Data
        </button>
        <a href="<?php echo site_url('admin/products/pdf') ?>" class="btn btn-success"></i>PDF</a>
        <br>
        <!--table-->
        <table id="myTable" class="table table-condensed table-striped table-responsive table-bordered">
          <thead><br>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Image</th>
              <th>Description</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($products as $product) : ?>
            <tr>
              <td align="center"><?=$product->id?></td>
              <td><?=$product->name?></td>
              <td>
                <?php
                  $product_image = ['src'   => 'uploads/' . $product->image,
                                    'width' => '110',
                                    'height'=> '130'
                                    ];
                  echo img($product_image)
                ?>
              </td>
              <td><?=$product->description?></td>
              <td align="center"><?=$product->price?></td>
              <td align="center"><?=$product->stock?></td>
              <td align="center"><br>
                <?=anchor('admin/products/update/' . $product->id,
                          'Edit',
                          ['class'=>'btn btn-warning'])
                ?>
                <?=anchor('admin/products/delete/' . $product->id,
                          'Delete',
                          ['class'=>'btn btn-danger',
                           'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                          ])
                ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table> <!--table-->
      </div>

  <div class="modal fade" id="tambahData" aria-hidden="false" aria-labelledby="tambahData" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center">Tambah Produk</h4>
            </div>
            <div class="modal-body"><br>
                <form class="form-horizontal" id="formAdd" action="<?php echo base_url('admin/products/create')?>" method="post"
                      enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nama Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Produk" value="<?= set_value('name') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="description" rows="4" placeholder="Masukkan Deskripsi"><?= set_value('description') ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Harga</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="price" placeholder="" value="<?= set_value('price') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Stok</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="stock" placeholder="" value="<?= set_value('stock') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Foto Produk</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="userfile">
                            <span class="help-block">
                                Sistem hanya menerima file yang berekstensi <strong>*.JPG / *.PNG</strong>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div id="btnAction">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

    <!-- script dari datatables-->
    <script>
      $(document).ready(function(){
        $('#myTable').DataTable();
      });
    </script>
    <!-- end script dari datatables-->

  </div> <!-- end container-->
  <br><br><br>

  </body>
</html>
