<?php $__env->startSection('content'); ?>
<?php if($errors->count() > 0): ?>
    <div class="alert alert-danger" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?= $message ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<form method="post" action="/teachers">
<?php echo csrf_field(); ?>

<div class="form-group">
    <input class="form-control" name="first_name" type="text" placeholder="First Name">
</div>
<div class="form-group">
    <input class="form-control" name="last_name" type="text" placeholder="Last Name">
</div>
<div class="form-group">
    <input class="form-control" name="title" type="text" placeholder="Title">
</div>



<button type="submit" class="btn btn-success">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>