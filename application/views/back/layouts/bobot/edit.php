<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Bobot Nilai</h3>

            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php 
                    $id=$aspek['ID'];
                ?>
                <label>Aspek : <?= ucwords($aspek['aspek']);?></label><br/>
                <label>Jumlah Bobot : <?= $aspek['JML'];?></label><br/>
                <?= form_open('bobot/update', array('id' => 'form-edit', 'role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <table id="tartikel" class="table table-borderless table-hover table-condensed" style="width:50%;">
                    <tbody>
                    <input type="hidden" name="aspek" value="<?= $id ?>">
                    <?php
                    if (!empty($list)) {
                        $i = 1;
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <?php $no=$i++; ?>
                                <td  width="5%" align="center"><?= $no ?></td>
                                <td width="10%"> <?= $row['NAMA'] ?></td>
                                <td>
                                    <input type="text" id="bobot" class="qty" name="bobot<?= $no ?>" value="<?= $row['bobot'] ?>"> 
                                    <input type="hidden" name="nama<?= $no ?>" value="<?= $row['NAMA'] ?>">
                                    <input type="hidden" name="id<?= $no ?>" value="<?= $row['ID'] ?>">
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
                <div class="box-footer">
                    <button type="submit" id="btn" class="btn btn-sm btn-primary btn-flat"><span class="ion-ios7-loop-strong"></span> Update</button>
                </div>
                <input type="hidden" id="total" name="qty2" class="total">
                <input type="hidden" name="data" value="<?= $no ?>">
            <?= form_close(); ?>
            </div>
        </div><!-- /.box -->                            
    </div>
</div>
<script type="text/javascript">
 $(document).ready(function () {

    $('#form-edit').validate({ // initialize the plugin
        // other options
    });

    $("[name^=bobot]").each(function () {
        $(this).rules("add", {
            required: true,
            number:true,
            range:[0,<?= $aspek['JML'];?>],
            checkValue: true,
            messages:{
                required:"Kolom Bobot Nilai tidak boleh kosong",
                number:"Format isian harus angka",
                range:"Maksimal "+<?= $aspek['JML'];?>+" minimal 0"
            }
        });
    });

    $.validator.addMethod("checkValue", function (value, element) {
        var response = ((value > 0) && (value <= 100)) || ((value == 'test1') || (value == 'test2'));
        return response;
    }, "invalid value");

});   
</script>

<script type="text/javascript">
        $(document).ready(function () {
            $('.qty').keyup(function(){
                var arr = document.getElementsByClassName("qty");
                var tot=0;
                for(var i=0;i<arr.length;i++){
                    if(parseInt(arr[i].value))
                        tot += parseInt(arr[i].value);
                }
                document.getElementById('total').value = tot;
                if(tot > <?= $aspek['JML'];?> || tot < <?= $aspek['JML'];?>){
                    document.getElementById("btn").disabled = true;
                }else{
                    document.getElementById("btn").disabled = false;
                }
            });
        });

</script>
