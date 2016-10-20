<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Tambah Nilai</h3>
            </div>
            <?= form_open('nilai/create', array('id' => 'form-tambah', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
            <div class="box-body">
                <table class="table table-borderless" style="width:50%;">
                    <tr>
                        <td width="10%">Nama Guru</td>
                        <td width="2%">:</td>
                        <td width="20%"><?=$mengajar['nama'];?></td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>:</td>
                        <td><?=$mengajar['mapel'];?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$mengajar['kelas'];?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?=$mengajar['thn_ajaran'];?></td>
                    </tr>
                </table>				        
               <input name="id" type="hidden" value="<?= $mengajar['ID']?>">
                <div class="form-group">
                    <label>Sub Aspek</label>
                    <select name="aspek" class="form-control input-sm" style="max-width:300px;">
                        <?php 
                            foreach ($sub as $value) {
                                echo '<option value="'.$value['ID'].'">'.$value['NAMA'].' | '.ucfirst($value['aspek']).'</option>';
                            }
                        ?>
                    </select>
                </div>     
            <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Tambah Nilai</button>
            </div>
            <?= form_close(); ?>
        </div>                      
    </div>
</div>
