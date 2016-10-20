
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <span class="box-title">Aspek</span>
                
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $notif; ?>
                <table id="tartikel" class="table table-bordered table-hover table-condensed" style="width:35%;">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Aspek</th>
                            <th width="10%">Aksi</th>
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
                                <td> <?= ucwords($row['aspek']) ?></td>
                                <td>
                                    <span class="pull-right">
                                        <?= anchor('aspek/sub/' . $row['ID'] . '', 'Sub-Aspek', 'class="label label-info" title="Lihat sub-aspek"') ?>
                                    </span>
                                </td>
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