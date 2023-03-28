
<?php if(!empty($array_mentors)): ?>
<?php $count=1; foreach($array_mentors as $data): ?>
    <!--Modal For Experts-->
  <!-- modalexpertsedit -->
  <div class="modal fade" id="modalmentorsedit" tabindex="-1" role="dialog" aria-labelledby="modal-mentors-listing-edit-title"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="text-blue modal-title" id="modal-mentors-listing-edit-title">Edit Mentors : <?php $old_name ?></h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post" action="/admin/<?= esc($data['uuid'])?>/update/post" enctype="multipart/form-data">
                      <!-- Gambar -->
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                          <label>Gambar<label> <br />
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                          <div class="form-group">
                          <input type="file" name="gambar"/><?= esc($data['gambar']) ?></td>
                            <span class="text-danger" style="font-size: 14px">(WAJIB)</span>
                          </div>
                        </div>
                      </div>
                      <!-- Nama -->
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                          <label>Nama</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                          <div class="form-group">
                            <input class="form-control" type="text" value="<?= esc($data['nama']) ?>" name="nama" />
                          </div>
                        </div>
                      </div>
                      <!-- Bidang Keahlian -->
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                          <label>Bidang Keahlian</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                          <div class="form-group">
                            <input class="form-control" type="text" value="<?= esc($data['bidang_keahlian']) ?>" name="bidang_keahlian" />
                          </div>
                        </div>
                      </div>
                      <!-- Deskripsi Profil -->
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                          <label>Deskripsi Profil</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                          <div class="form-group">
                            <input class="form-control" type="text" value="<?= esc($data['bidang_keahlian']) ?>" name="deskripsi_profil" />
                          </div>
                        </div>
                      </div>
                      <!-- Waktu Tersedia -->
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                          <label>Waktu Tersedia</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                          <div class="form-group">
                            <input class="form-control" type="text" value="<?= esc($data['waktu_tersedia']) ?>"  name="waktu_tersedia" />
                          </div>
                        </div>
                      </div>
                      <!-- button -->
                      <div class="modal-footer">
                          <div class="form-group">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>
  <?php endforeach; ?>
  <?php endif; ?>

<!-- Modal Edit -->
<div class="modal fade" id="editMentors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- Jika Error Ketika Mengupdate Data Mentors -->
      <div class="alert alert-danger error" role="alert" style="display:none;">
        A simple danger alert—check it out!
      </div>
      <!-- Jika Berhasil Ketika Mengupdate Data Mentors -->
      <div class="alert alert-primary sukses" role="alert" style="display:none;">
        A simple danger alert—check it out!
      </div>
        <div class="mb-3 row">
          <label for="inputGambar" class="col-sm-4 col-form-label">Gambar</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="inputGambar">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputNama">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputBidang" class="col-sm-4 col-form-label">Bidang Keahlian</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputBidang">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputDeskripsi" class="col-sm-4 col-form-label">Deskripsi Profile</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputDeskripsi">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputWaktu" class="col-sm-4 col-form-label">Waktu Tersedia</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputWaktu">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
  function edit($id){
    $.ajax({
      url:"<?php echo site_url("Admin/DashboardController/edit") ?>/" + $id,
      type:"get",
      success: function(hasil){
        alert();
      }
    })
  }
  $('#tombolSimpan').on('click', function(){
    var $nama = $('#inputNama').val();
    var $bidang = $('#inputBidang').val();
    var $deskripsi = $('#inputDeskripsi').val();
    var $waktu = $('#inputWaktu').val();

    $.ajax({
      url:"<?php echo site_url('admin/DashboardController/admin_mentors_listing_update') ?>",
      type:"POST",
      success:function(hasil){
        var $obj = $.parseJSON(hasil);
        if($obj.sukses == false){
          $('.error').show();
          $('.error').html($obj.error)
        }else{
          $('.sukses').show();
          $('.sukses').html($obj.sukses)
        }
      }
    });
  });
</script>