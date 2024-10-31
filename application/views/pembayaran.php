<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           

            <h2>Input Alamat Pengiriman dan Pembayaran</h2>

            <form method="post" action="<?php echo base_url() . 'dashboard/pembayaran'; ?>">



                <div class="form-group">
                    <label>Nama Penerima</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Penerima" value="" class="form-control">
                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Alamat Penerima</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Penerima" value=""
                        class="form-control">
                    <?php echo form_error('alamat', '<div class="text-danger small ml-2">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_telp" placeholder="Isi no telepon" value="" class="form-control">
                    <?php echo form_error('no_telp', 'No_Telepon') ?>
                </div>
                <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text">Berat</span>
                    </div>
                    <input type="number" value="1" min="1" class="form-control" id="berat" name="berat">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>


                <p >Lokasi Tujuan :</p>
                <div class="form-group">
                    <select class="form-control" name="provinsi" id="provinsi">
                    
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="kota" id="kota">
                        <option value=""> Pilih Kota</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" name="jasa" id="kurir">
                        <option value=""> Pilih Kurir</option>
                        <option value="jne">JNE</option>
                        <option value="tiki">TIKI</option>
                        <option value="pos">POS Indonesia</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control" name="jasa">
                        <option hidden>Pilih Jasa Pengiriman</option>
                        <option value="JNE">JNE</option>
                        <option value="TIKI">TIKI</option>
                        <option value="GO-SEND">GO-SEND</option>
                        <option value="GRAB EXPRESS">GRAB EXPRESS</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control" name="bank">
                        <option hidden>Pilih BANK</option>
                        <option value="BCA 1660788740 A/N Fahmi Khoerudin">BCA</option>
                    </select>
                </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <button type="submit" class="btn btn-sm btn-primary mb-3">Order</button>
                </div>
            </div>
        </form>
            </form>

            
        </div>

        <div class="col-md-2"></div>
    </div>
</div>




<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi) {
                // console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });

        $("select[name=provinsi]").on("change", function() {
        var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/kota') ?>",
            data: 'id_provinsi=' +id_provinsi_terpilih,
            success: function(hasil_kota) {
                // console.log(hasil_provinsi);
                $("select[name=kota]").html(hasil_kota);
            }
            });
        });
    });

   

    
</script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi) {
                // console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });

        $("select[name=provinsi]").on("change", function() {
        var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/kota') ?>",
            data: 'id_provinsi=' +id_provinsi_terpilih,
            success: function(hasil_kota) {
                // console.log(hasil_provinsi);
                $("select[name=kota]").html(hasil_kota);
            }
            });
        });

        $("#submit").submit(function(e) {
      e.preventDefault();
      $.ajax({
          url: '<?= base_url('rajaongkir/ongkir') ?>',
          type: 'post',
          data: $( this ).serialize(),
          success: function(data) {
            console.log(hasil_ongkir);
          }
      });
  });
    });

   

    
</script>
<script type="text/javascript">
function getLokasi() {
    var $op = $("#sel1"),
        $op1 = $("#sel11");

    $.getJSON("provinsi", function(data) {
        $.each(data, function(i, field) {

            $op.append('<option value="' + field.province_id + '">' + field.province + '</option>');
            $op1.append('<option value="' + field.province_id + '">' + field.province + '</option>');

        });

    });

}

getLokasi();

$("#sel11").on("change", function(e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    $('#sel22 option:gt(0)').remove();
    $('#kurir').val('');

    if (option === '') {
        alert('null');
        $("#sel22").prop("disabled", true);
        $("#kurir").prop("disabled", true);
    } else {
        $("#sel22").prop("disabled", false);
        getKota1(option);
    }
});


$("#sel1").on("change", function(e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    $('#sel2 option:gt(0)').remove();
    $('#kurir').val('');

    if (option === '') {
        alert('null');
        $("#sel2").prop("disabled", true);
        $("#kurir").prop("disabled", true);
    } else {
        $("#sel2").prop("disabled", false);
        getKota(option);
    }
});




$("#sel22").on("change", function(e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    $('#kurir').val('');

    if (option === '') {
        alert('null');
        $("#kurir").prop("disabled", true);
    } else {
        $("#kurir").prop("disabled", false);
    }
});


$("#kurir").on("change", function(e) {
    e.preventDefault();
    var option = $('option:selected', this).val();
    console.log(option)
    var origin = $("#sel2").val();
    var des = $("#sel22").val();
    var qty = $("#berat").val();

    if (qty === '0' || qty === '') {
        alert('null');
    } else if (option === '') {
        alert('null');
    } else {
        getOrigin(origin, des, qty, option);
    }
});


function getOrigin(origin, des, qty, cour) {
    var $op = $("#hasil");
    var i, j, x = "";
    console.log(origin, des, qty, cour)

    $.getJSON("tarif/" + origin + "/" + des + "/" + qty + "/" + cour, function(data) {
        console.log(data)
        $.each(data, function(i, field) {
            console.log(data)
            for (i in field.costs) {
                x += "<p class='mb-0'><b>" + field.costs[i].service + "</b> : " + field.costs[i]
                    .description + "</p>";

                for (j in field.costs[i].cost) {
                    x += field.costs[i].cost[j].value + "<br>" + field.costs[i].cost[j].etd + "<br>" +
                        field.costs[i].cost[j].note;
                }

            }

            $op.html(x);

        });
    });

}


function getKota1(idpro) {
    var $op = $("#sel22");

    $.getJSON("kota/" + idpro, function(data) {
        $.each(data, function(i, field) {


            $op.append('<option value="' + field.city_id + '">' + field.type + ' ' + field.city_name +
                '</option>');

        });

    });

}

function getKota(idpro) {
    var $op = $("#sel2");

    $.getJSON("kota/" + idpro, function(data) {
        $.each(data, function(i, field) {


            $op.append('<option value="' + field.city_id + '">' + field.type + ' ' + field.city_name +
                '</option>');

        });

    });

}
</script>