<?php
/**
 * @package Akashbooking
 */
?>


<form id="popupform" action="#" method="post"  data-url="<?php echo admin_url('admin-ajax.php')?>">
    <div>
        <input type="button" value="Book Here" class="popupbutton" />
    </div>

    <div id="akashbookingform-auth-container" class="auth-container" style="width:250px;margin:20px;position:relative;background: #fff;padding: 10px;border-radius: 4px;">
        <h2 class="h">Book appointment</h2>
        <input type="text" id="clientmail" name="clientmailname" placeholder="Enter your mail" value="<?php echo get_option('clientmail') ?>"/>
        <br>
        <input type="text" id="clienttime" name="clienttimename" placeholder="Enter time" value="<?php echo esc_attr(get_option('clienttime')) ?>"/>
        <br>
        <input type="text" id="clientdate" name="clientdatename" placeholder="Enter metting topic" value="<?php echo esc_attr(get_option('clientdate')) ?>"/>
        <br>
        <input type="text" id="clienttopic" name="clienttopicname" placeholder="Enter References" value="<?php echo esc_attr(get_option('clienttop')) ?>"/>
        <br>
        <input type="submit" name="clientbook" value="Submit"/>
        <input type="button" class="close_button" name="close" value="close"/>

    </div>
</form>


<?php
    global $wpdb;
    if(isset($_POST['clientbook'])){
        update_option('clientmail',$_POST['clientmailname']);
        update_option('clienttime',$_POST['clienttimename']);
        update_option('clientdate',$_POST['clientdatename']);
        update_option('clienttop',$_POST['clienttopicname']);
        $mail=get_option('clientmail');
        $time=get_option('clienttime');
        $date=get_option('clientdate');
        $topic=get_option('clienttop');


    
           
        $email=get_option('clientmail');
        $time=get_option('clienttime');
        $date=get_option('clientdate');
        $topic=get_option('clienttop');
        $email1=stripslashes($email);

    $wpdb->query("CREATE TABLE IF NOT EXISTS userbooking_akash (useremail VARCHAR(20),usertime VARCHAR(20),userdate VARCHAR(20),usertopic VARCHAR(30) ); ");
    
    if(is_email($email1)){

    
        $wpdb->query("INSERT INTO `userbooking_akash` (`useremail`, `usertime`, `userdate`, `usertopic`) VALUES ('$email1', '$time', '$date', '$topic');");

        ?>
        <h5>Email was saved </h5>
<?php
    }
    else{
        ?>
        <h5>Wrong email</h5>
        <?php
    }

    }
?>







