<?php 
    include 'includes/class-autoload.inc.php';
    Header::getHeader("Contact - Mina Ilic Tattoo");
?>
<link rel="stylesheet" href="assets/css/contact.css">
<div class="container items-center">
    <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
        <div class="left-form">
            <label>First name</label><br>
            <input type="text" name="client_firstname"><br><br>
            <label>Last name</label><br>
            <input type="text" name="client_lastname"><br><br>
            <label>Phone number</label><br>
            <input type="number" name="client_number"><br><br>
            <label>Email address</label><br>
            <input type="email" name="client_email"><br><br>
        </div>
        <div class="right-form">
            <label>Are you over 18?</label><br>
            <input type="radio" name="client_adult" value="yes" checked>
            <label for="yes">Yes</label><br>
            <input type="radio" name="client_adult" value="no">
            <label for="no">No</label><br><br>   
            <label>Design idea</label><br>
            <textarea name="client_design_idea" cols="30" rows="5"></textarea><br><br>
        
        
            <label>Placement on body</label><br>
            <textarea name="client_placement" cols="30" rows="5"></textarea>
        </div>
        <div class="right-form">
            <label>Size in cm</label><br>
            <input type="text" name="client_size"><br><br>
            <label>Preferable dates</label><br>
            <textarea name="client_preferable_date" cols="30" rows="5"></textarea><br><br>
            <label>References</label><br>
            <input type="file" name="client_references"><br><br>

            <input type="submit" class="button button--saqui button--round-l button--text-thick" name="send" value="Send">
        </div>

    </form>
</div>
<?php 
    Footer::getFooter();
?>