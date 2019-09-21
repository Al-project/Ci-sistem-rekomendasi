

<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<!-- end load library -->
 
<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $nama_pengguna[] = $result->nama_pengguna; //ambil bulan
		$hobi[] = $result->hobi; //ambil bulan
        $value[] = (float) $result->Jarak; //ambil nilai
    }
    /* end mengambil query*/
     
?>
 
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Report Jarak Antar User',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'Berdasarkan Data Jarak',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($nama_pengguna);?>
			
        },
        exporting: { 
            enabled: false 
        },
        exporting: { 
            enabled: false 
        },
		
		

        yAxis: {
            title: {
                text: 'Jarak'
            },
        },
		
		 
		
        tooltip: {
             formatter: function() {
                 return 'The value for <b>' + this.x + '</b>  <b>' + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Report Data',
			
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: 'white',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
		
		
		
    });
});
        </script>