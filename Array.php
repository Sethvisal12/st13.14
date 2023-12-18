<style>
    .tcolor{
        color:blue;
        /* text-align: center ; */
    }
    td{
        text-align: center ;
    }
</style>
<?php
    $price =2000;
    $month = 10;
    $interest =2 ;
    //$post_data ="2023-11-15";
    $now = date('d-m-Y');
    $a=$price;
    $pricipal = $price /$month;
    $Interest_Month = $price * $interest /100;
    $total_Interest=0;
    echo "<table border='1' width = '500' cellspacing='0'>";
    for($i=1;$i<=$month;$i++){
        $tcol ="tcolor";
        if($i %2==0){
        }else{
        }   
        
        $post_date = date('d-m-Y', strtotime("$i months", strtotime($now)));
        ?>
        <tr class="<?php echo $tcol ?>" >
            <td>1</td>
            <td><?php echo $pricipal; ?></td>
            <td><?php echo $Interest_Month ?></td>
            <td><?php echo $pricipal + $Interest_Month; ?></td>
            <td><?php echo $post_date ?></td>
        </tr>
        <?php
        $total_Interest += $Interest_Month;
        
    }
    echo "</table>";
?>
Total Interest = <?php echo $total_Interest ."<br>"  ;?>
Total =<?php echo $total_Interest+$a ;?>