<?php
    include("config.php");
    include('session.php');
    include('yay.php');
//echo $rows['Latitude'];
//echo distance(19.139788799999998,72.8711168,19.1363,72.8277);
    $sql = "SELECT * FROM request";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
   // echo $count;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo '<table class="table">
        <thead>
          <tr>
            <th class="text-white mb-4 " scope="col">Name</th>
            <th class="text-white mb-4 " scope="col">Email</th>
            <th class="text-white mb-4 " scope="col">Number</th>
            <th class="text-white mb-4 " scope="col">Incident</th>
            <th class="text-white mb-4 " scope="col">Landmark</th>
          </tr>
        </thead>
        <tbody>';
        while($row = mysqli_fetch_assoc($result)) {
            //if(distance())
            $name = $row['Name'];
            $email = $row['Email'];
            $contact = $row['Contact'];
            $incident = $row['Incident'];
            $landmark = $row['Landmark'];
            $lat = $row['Latitude'];
            $lon = $row['Longitude'];
            $lat1 = $rows['Latitude'];
            $lon1 = $rows['Longitude'];
            echo distance($lat,$lon,$lat1,$lon1);
            if(distance($lat,$lon,$lat1,$lon1)<=10)
            {
           echo 
           "<tr>
           <td>$name</td>
           <td >$email</td>
           <td >$contact</td>
           <td >$incident</td>
           <td >$landmark</td>
           </tr>
           ";
            }
        }
        echo '</tbody>
        </table>';
    } else {
        echo "0 results";
    }
?>