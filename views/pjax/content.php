<?php echo $content ?>
<?php $loadtype = (Request::current()->is_ajax()) ? 'Ajax' : 'Page refresh'?>
<hr />Loaded using <?php echo $loadtype ?>
