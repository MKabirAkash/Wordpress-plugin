<div class="container">
    <h1>show all booking here</h1>
    <table style="width:75%;">
        <tr >
            <th> Client name </th>
            <th>Appointment time</th>
            <th>Appointment day</th>
            <th>Appointment topic</th>
        </tr>
        
            <?php
            require_once PLUGIN_BASE.'/assets/booking_database_connect.php';
            
            $sql="SELECT * from userbooking_akash;";
            $bookinglist=mysqli_query($conn,$sql);
            
            
            while($book =mysqli_fetch_assoc($bookinglist))
            {
             ?>

        <tr>
            <td><?php echo $book['useremail'];?></td>
            <td><?php echo $book['usertime'];?><td>
            <td><?php echo $book['userdate'];?></td>
            <td><?php echo $book['usertopic'];?></td>

        </tr>
            <?php
            }
            ?>
        
</table>
</div>
