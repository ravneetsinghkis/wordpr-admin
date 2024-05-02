<?php
/*Template name:send-invite*/
get_header();?>
<div class="container">
<form method="POST" action="send_invite.php">
    <div class="col-md-12">
        <label for="email" class="form-label">Enter Invite Email address</label>
        <input class="form-control" type="email" id="email_id" name="email_id" value="" placeholder="john.doe@example.com" required>
        <div class="invalid-tooltip"></div>
    </div>
    <div class="mt-2 " style="margin-left: 20px;">
        <button type="submit" class=" btn btn-primary me-2">Send Invite Url</button>
    </div>
</form>
</div>
<?php
get_footer();
?>
<style>
    .container {
    width: 525px;
    display: block;
    margin: 0 auto;
}
button.btn.btn-primary.me-2 {
    font-size: 20px ! important;
    padding: 10px;
    margin: 15px auto 0 auto;
    display: block;
}
.col-md-12 label, .col-md-12 .form-control {
    display: block;
    margin: 0 auto;
    width: 100%;
    text-align: center;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
 jQuery( "form" ).on( "submit", function( event ) {
  event.preventDefault();
  var pdata = {
     action: "my_submit_log_action",
     email_id: $('#email_id').val()
  }
  $.post( "<?php echo admin_url('admin-ajax.php'); ?>", pdata, function( data ) {
       var response=JSON.parse(data);
    console.log(response.message);
       alert(response.message);
  });
 })
   
 
</script>