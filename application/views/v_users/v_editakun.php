      <?php $this->load->view("t_users/sidebar");?>
      
      
      
      <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">
                        <div class="cart-title">
                             <?php echo $this->session->flashdata('message');?>
                         <h4>Wellcome <?php echo $this->session->nama; ?></h4>
                         
                     </div>
                     <br>
                     <?php
                        foreach($data_user->result_array() as $i):
                        $nama_user = $i['nama_user'];
                        $email_user = $i['email_user'];
                        $password_user = $i['password_user'];
                        $tanggallahir_user = $i['tanggallahir_user'];
                        $alamat_user = $i['alamat_user'];
                        $nohp_user = $i['nohp_user'];
                        $jeniskelamin_user =$i['jeniskelamin_user'];
                     ?>
                     <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/akunsaya/edit_akun'?>"enctype="multipart/form-data" >
                        <div class="row">
                            <input type="hidden" name="id_user" class="form-control" value="<?php echo $i['id_user']?>">
                            <div class="col-md-12 mb-3">
                             Nama <input type="text" class="form-control" name="nama_user" value="<?php echo $nama_user ?>" placeholder="Nama"  required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                         </div>
                         <div class="col-md-12 mb-3">
                             Email <input type="text" class="form-control" name="email_user" value="<?php echo $email_user ?>"placeholder="Email"  readonly>
                         </div>
                         <div class="col-md-12 mb-3">
                           Password <input type="password" class="form-control" name="password_user" value="<?php echo $password_user?>" placeholder="Password" required>
                       </div>
                     <div class="col-md-12 mb-3">
                         Tanggal Lahir <input type="date" class="form-control" name="tanggallahir_user"  value="<?php echo $tanggallahir_user?>"  required oninvalid="this.setCustomValidity('Tanggal Lahir tidak boleh kosong')" oninput="setCustomValidity('')">
                     </div>
                      <div class="col-md-12 mb-3">
                           Alamat <input type="text" class="form-control" name="alamat_user" value="<?php echo $alamat_user?>" placeholder="Alamat" required>
                       </div>
                        <div class="col-md-12 mb-3">
                           No Handphone <input type="text" class="form-control" name="nohp_user" value="<?php echo $nohp_user?>" placeholder="No Handphone" required>
                       </div>
                         <div class="col-md-12 mb-3">
                            <label > Jenis Kelamin</label>
                            <select name="jeniskelamin_user" class="w-100">
                               <?php if($jeniskelamin_user=='Laki-Laki'):?>
                                <option value="Laki-Laki" selected>Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <?php elseif($jeniskelamin_user=='Perempuan'):?>
                                <option value="Laki-Laki" >Laki-Laki</option>
                                <option value="Perempuan" selected>Perempuan</option>
                                 <?php endif;?>
                            </select>
                        </div>
                     <div class="col-md-6 mb-3">
                        <button class="btn amado-btn w-100">Simpan</button>
                    </div>
                    <div class="col-md-6 mb-3">
                     <a href="<?php echo base_url('index.php/akunsaya/Logoutakun'); ?>" class="btn amado-btn w-100">Logout</a>
                 </div>
             </div>
         </form>
         <?php endforeach;?>
     </div>
 </div>
</div>
</div>
</div>
</div>
