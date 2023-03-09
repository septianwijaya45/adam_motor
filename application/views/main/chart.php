<?php 
    foreach($query as $row){
        $outletMenu[] = $row['nama_outlet'].' | '.$row['nama_menu'];
        $laku[] = $row['harga_laku'];
    }
?>


<script>
    const ctx = document.getElementById('canvas');
    new Chart(ctx, {
        type: 'bar',
        data: {
        labels: <?php echo json_encode($outletMenu);?>,
        datasets: [{
            label: 'Rupiah',
            data: <?php echo json_encode($laku);?>,
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
</script>