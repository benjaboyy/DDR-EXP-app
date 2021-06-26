<?php
          
if($_SESSION['is_active'] == '1'){
       // Query
        $scores = "SELECT * From users WHERE is_active = '1'";
        $query_scores = mysqli_query($connection, $scores);
//        $result = $mysqli->query($scores);
        
        // If query fails, show the reason 
        if(!$query_scores){
           die("SQL query failed: " . mysqli_error($connection));
        }
        
       // Create mysql query
        while($row = mysqli_fetch_array($query_scores)) {
            $id_scores            = $row['id'];
            $tag_scores           = $row['tag'];
            $iidx_scores          = $row['iidx'];
            $popn_scores          = $row['popn'];
            $itg_scores           = $row['itg'];
            $itg_d_scores         = $row['itg_d'];
            $pump_scores          = $row['pump'];
            $pump_d_scores        = $row['pump_d'];
            
            $output_iidx .= '
                    <tr>
                      <td>'.$id_scores.'</td>
                      <td>'.$tag_scores.'</td>
                      <td>'.$iidx_scores.'</td>
                    </tr>
                    ';
            $output_popn .= '
                    <tr>
                      <td>'.$id_scores.'</td>
                      <td>'.$tag_scores.'</td>
                      <td>'.$popn_scores.'</td>
                    </tr>
                    ';
            $output_itg .= '
                    <tr>
                      <td>'.$id_scores.'</td>
                      <td>'.$tag_scores.'</td>
                      <td>'.$itg_scores.'</td>
                    </tr>
                    ';
            $output_itg_d .= '
                    <tr>
                      <td>'.$id_scores.'</td>
                      <td>'.$tag_scores.'</td>
                      <td>'.$itg_d_scores.'</td>
                    </tr>
                    ';
            $output_pump .= '
                    <tr>
                      <td>'.$id_scores.'</td>
                      <td>'.$tag_scores.'</td>
                      <td>'.$pump_scores.'</td>
                    </tr>
                    ';
            $output_pump_d .= '
                    <tr>
                      <td>'.$id_scores.'</td>
                      <td>'.$tag_scores.'</td>
                      <td>'.$pump_d_scores.'</td>
                    </tr>
                    ';
        }
}

?>