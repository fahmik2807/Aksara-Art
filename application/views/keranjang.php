<div class="container-fluid">
	<h4>Shopping Cart</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			
			<th>No</th>
			<th class="text-center">Nama Produk</th>
			<th class="text-center">Harga</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Sub-Total</th>
            <th colspan="1">AKSI</th>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				
				<!--<?php echo base_url();?>index.php/dashboard/tambah_quantity/<?php echo $items['id'] ?>"><div class="btn btn-primary"> +</div></a></div>-->
				<!--<?php echo base_url();?>index.php/dashboard/kurang_quantity/<?php  echo $items['id'] ?>"><div class="btn btn-primary"> -</div></a></div>-->
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td >Rp. <?php echo number_format($items['price'],'0',',','.')  ?></td>
				<td class="text-center"><?php echo $items['qty'] ?>
				<td >Rp. <?php echo number_format($items['subtotal'],'0',',','.') ?></td>
                <td><div class="btn btn-danger btn-sm"><a href="<?php echo base_url();?>index.php/dashboard/hapus_item/<?php echo $items['rowid'] ?>/<?php echo $items['id'] ?>/<?php echo $items['qty'] ?>"><i class="fa fa-trash"></i></a></div></td>

			</tr>

			

		<?php endforeach; ?>

		<!-- <tr>
			<td colspan="5"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->total(), '0',',','.') ?></td>
			</tr> -->

	

	</table>
    </div>
    <div class="container-fluid">
    <div class="row">
    <div class="col-6">
    <form action="<?php echo base_url('rajaongkir/ongkir') ?>"  method="post">
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
        <select class="form-control" name="kurir" id="kurir">
            <option value=""> Pilih Kurir</option>
            <option value="jne">JNE</option>
            <option value="tiki">TIKI</option>
            <option value="pos">POS Indonesia</option>
        </select>
    </div>

    <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" value="submit" class="btn btn-success">Cek</button>
              </div>
            </div>
    </form>

    </div>
    <div class="col-6">
    <div class="panel panel-default">
		<div class="panel-body">
            <?php if (isset($hasil['rajaongkir'])): ?>
        <?php $rajaongkir = $hasil['rajaongkir']; ?>
		  <table width="100%">
		    <tr>
		      <td>Tujuan</td>
		      <td>: <?php echo $rajaongkir['destination_details']['city_name']; ?></td>
		    </tr>
		    <tr>
		      <td>Berat (Kg)</td>
		      <td>:  <?php echo $rajaongkir['query']['weight']; ?> </td>
		    </tr>
		  </table><br>
		  <table class="table table-striped table-bordered ">
          <?php if (isset($rajaongkir['results'][0])): ?>
            <?php $result = $rajaongkir['results'][0]; ?>
		  	<thead>
		  		<tr>
		  			<th>Kurir</th>
                      <?php if (isset($result['costs'][0])): ?>
                <?php $cost = $result['costs'][0]['cost'][0]; ?>
		  			<th>Tarif</th>
		  			<th>ETD(Estimates Days)</th>
		  		</tr>
		  	</thead>
		  	<tbody>
		  		<td><?php echo $result['name']; ?></td>
                <td> <?php echo $cost['value'] * $rajaongkir['query']['weight']; ?></td>
                <td><?php echo $cost['etd']; ?></td>
		  	</tbody>
              
		  </table>
          <?php endif; ?>
          <?php endif; ?>
          <?php endif; ?>
          <table>
          <tr>
		      <td><strong>Total</strong></td>
              <?php if (isset($rajaongkir['results'][0])&& isset($cost['value'])): ?>
                <td class="right-align">:   <?php echo number_format($this->cart->total()+ $cost['value'] * $rajaongkir['query']['weight'], '0',',','.') ?> </td>
              <?php else: ?>  
                <td class="right-align">:   <?php echo number_format($this->cart->total(), '0',',','.') ?> </td>
                <?php endif; ?>
            </tr>
          </table>
		</div>
	</div>
     </div>
    </div>
    </div>

            

    <div class="container-fluid">
	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Delete Cart</div></a>
		<a href="<?php echo base_url('welcome') ?>"><div class="btn btn-sm btn-primary">Continue Shopping</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Purchase</div></a>
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
