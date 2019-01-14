<?php $__env->startSection('content'); ?>
<form method="POST" action="/documents">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <textarea name="content" class="form-control"><?php echo e(request()->input('content')); ?></textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Analyze">
</form>

Characters: <?php echo e(isset($characters) ? $characters : 0); ?><br />
Vowels: <?php echo e(isset($vowels) ? $vowels : 0); ?><br />
Spaces: <?php echo e(isset($spaces) ? $spaces : 0); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>