<?php 
    global $wpdb;
    if(isset($_POST['akashaddemail'])){
   
            //register_setting('akash_admin_booking','akashemailid');
            // settings_fields('akash_admin_booking')
            update_option('akashemailidinput',$_POST['akashemail']);
            update_option('akashtime',$_POST['time']);
            update_option('akashdate',$_POST['date']);
            update_option('akashtopic',$_POST['topic']);
            

       
       
        $email=get_option('akashemailidinput');
        $time=get_option('akashtime');
        $date=get_option('akashdate');
        $topic=get_option('akashtopic');
        $email1=stripslashes($email);

        if(is_email($email1)){ ?>
            <p>Booking is Saved </p>


            <?php
            $wpdb->query("INSERT INTO `userbooking_akash` (`useremail`, `usertime`, `userdate`, `usertopic`) VALUES ('$email1', '$time', '$date', '$topic');");

        }
        else{?>
        
            <h2>Email is not valid </h2>
            <?php
        }
    }
    

        ?>



<div class="wrap">
    <h2>Add a custom booking from administration</h2>

    <form action="" method="post" id="adminform" >
        <input type="text" name="akashemail" id="akashemailid" placeholder="enter your email" value="<?php echo esc_attr(get_option("akashemailidinput"))?>"/> 
        <br><br>
        <input type="text" name="time" id="timeid" placeholder="enter appointment age" value="<?php echo esc_attr(get_option('akashtime'));?>" />
        <br><br>
        <input type="text" name="date" id="dateid" placeholder="enter your age" value="<?php echo esc_attr(get_option('akashday'));?>" />
        <br><br>
        <input type="text" name="topic" id="topicid" placeholder="enter your age" value="<?php echo esc_attr(get_option('akashtopic'));?>" />
        <br><br>
        <input type="submit" name="akashaddemail" class="btn-btn-primary" value="Create booking"/>
        
    </form>
   

</div>

