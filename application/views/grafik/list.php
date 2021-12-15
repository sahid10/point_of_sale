<?php
foreach ($data as $row) {
    $nama_barang[] = $row->nama_barang;
    $total_beli[] = $row->total_beli;
}
?>
<style type="text/css">
    .highcharts-figure, .highcharts-data-table table {
    min-width: 270px;
    max-width: 600px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
<div class="row">
    <div class="col-md-6"> 
        <div class="card border-info text-dark" style="padding: 0;">
            <div class="card-heading border bottom tab-info bg-info" >
                <h4 class="card-title">Grafik Laporan chartjs</h4>
            </div>
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-info text-dark" >
            <div class="card-heading border bottom bg-info">
                <h4 class="card-title">Grafik Laporan Highcharts</h4>
            </div>

            <figure class="highcharts-figure" style="margin: 0;">
                <div id="container"></div>
                <!-- <p class="highcharts-description">
                </p> -->
            </figure>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card border-info text-dark" style="padding: 0;">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Tanggal Beli</th>
                    <th>Jumlah Uang</th>
                    <th>Total Belanja</th>
                    <th>Uang Kembali</th>
                    <th>Id Transaksi</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Jual</th>
                    <th>Total Beli</th>
                </tr>
            </thead>
            <tbody>
            <?php  
               $no = 1;
            foreach ($data as $row) {
                echo "<tr><td>$no</td>"
                . "<td>$row->nama_kategori</td>"
                . "<td>$row->tanggal_beli</td>"
                . "<td>$row->jumlah_uang</td>"
                . "<td>$row->total_belanja</td>"
                . "<td>$row->uang_kembali</td>"
                . "<td>$row->id_transaksi</td>"
                . "<td>$row->kd_barang</td>"
                . "<td>$row->nama_barang</td>"
                . "<td>$row->Satuan</td>"
                . "<td>$row->harga_jual</td>"
                . "<td>$row->total_beli</td>"
                . "</tr>";
                $no++;

                    // $d['nama_kategori'];
                    // $d['tanggal_beli'];
                    // $d['jumlah_uang'];
                    // $d['total_belanja'];
                    // $d['uang_kembali'];
                    // $d['id_transaksi'];
                    // $d['kd_barang'];
                    // $d['nama_barang'];
                    // $d['Satuan'];
                    // $d['harga_jual'];
                    // $d['total_beli'];
            }
   
  ?>
            </tbody>
        </table>
    </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/bower_components/highcharts/highcharts.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/highcharts/highcharts-more.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/highcharts/exporting.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/highcharts/export-data.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/highcharts/accessibility.js"></script>
<script src="<?php echo base_url() ?>assets/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/chart.js/dist/Chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        data: {
            labels:<?php echo json_encode($nama_barang) ?>,
            datasets: [{
                    label:'',
                    backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    data:<?php echo json_encode($total_beli) ?>,
                }]

        },
        options: {
            layout: {
                padding: {
                    left: 50,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }


        }

        // Configuration options go here
    });

</script>
<script>
    Highcharts.chart('container', {

    chart: {
        polar: true,
        type: 'line'
    },

    accessibility: {
        description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.'
    },

    title: {
        text: 'Budget vs spending',
        x: -80
    },

    pane: {
        size: '80%'
    },

    xAxis: {
        categories: ['Sales', 'Marketing', 'Development', 'Customer Support',
            'Information Technology', 'Administration'],
        tickmarkPlacement: 'on',
        lineWidth: 0
    },

    yAxis: {
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0
    },

    tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    series: [{
    type: 'area',
        name: 'Allocated Budget',
        data: [43000, 19000, 60000, 35000, 17000, 10000],
        pointPlacement: 'on'
    }, {
    type: 'area',
        name: 'Actual Spending',
        data: [50000, 39000, 42000, 31000, 26000, 14000],
        pointPlacement: 'on'
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                pane: {
                    size: '70%'
                }
            }
        }]
    }

});
</script>
<!-- datatables -->
<script>
    $(document).ready(function () {

        load_data();

        function load_data(query)
        {
            $.ajax({
                url: "<?php echo base_url() ?>index.php/grafik/cari",
                method: "POST",
                data: {query: query},
                success: function (data)
                {
                    $('#result').html(data);
                }
            });
        }
        $('#search_text').keyup(function () {
            var search = $(this).val();
            if (search != '')
            {
                load_data(search);
            } else
            {
                load_data();
            }
        });
    });
</script>