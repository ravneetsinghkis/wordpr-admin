<?php
/*Template name:login*/
get_header();?>
<div class="container">
<?php echo do_shortcode('[wppb-login]');?>
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
</style>