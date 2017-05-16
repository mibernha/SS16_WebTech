<?php $__env->startSection('content'); ?>
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div id=text>
<p>Der Server konnte nicht erreicht werden.</p>

</div>
</div>
</div>
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<img id=error src="../public/images/error500.jpg" alt="error500.jpg">

</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>