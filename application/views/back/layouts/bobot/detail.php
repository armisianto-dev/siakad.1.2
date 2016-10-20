
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <span class="box-title">Detail Bobot</span>
                <?php 
                    $id=$aspek['ID'];
                ?>
                <span class="box-title pull-right"><a href="<?= site_url('bobot/edit/'.$id) ?>" class="btn btn-sm btn-primary btn-flat"><i class="ion-plus-round"></i>&nbsp;&nbsp;Edit</button></a></span>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $notif; ?>
                <label>Aspek : <?= ucwords($aspek['aspek']);?></label><br/>
                <label>Jumlah Bobot : <?= ucwords($aspek['JML']);?></label>
                <table id="tartikel" class="table table-bordered table-hover table-condensed" style="width:35%;">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Nama Bobot</th>
                            <th width="15%">Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!empty($list)) {
                        $i = 1;
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <td  align="center"><?= $i++ ?></td>
                                <td> <?= $row['NAMA'] ?></td>
                                <td> <?= $row['bobot'] ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5" align="center">Belum Ada Data</td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>							
                </table>
            </div>
            <div class="box-footer clearfix">
                <!-- <?php echo $pagination; ?> -->
            </div>
        </div><!-- /.box -->                            
    </div>
</div>

