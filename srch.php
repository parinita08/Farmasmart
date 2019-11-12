<?php require('connection.php');


    
    $srch=$_POST['srch'] ;
    echo $srch;

    $sql="CALL `search_crop`('$srch');";
        
//if ($conn->query($sql) == TRUE) {

                                  
    $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                
                if(mysqli_num_rows($res)>0)
                {
                  while(  $retrive=mysqli_fetch_array($res))
                  {
                    $r=$retrive;
        ?>
        <table>
            <tr>
                <th>FID</th>
                <th>Crop Name</th>
                <th>Unit Price</th>
                <th>InStock Qty</th>
            </tr>
           
                <tr>
                    <td><?php echo $r[0]; ?></td>
                    <td><?php echo $r[1]; ?>
                    </td>
                    <td><?php echo $r[2] ;?></td>
                    <td><?php echo $r[3]; ?></td>
                </tr>
            <?php }}?>
        </table>
    


