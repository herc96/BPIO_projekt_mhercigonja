<?php $__env->startSection('content'); ?>
<?php if($errors->count() > 0): ?>
    <div class="alert alert-danger" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?= $message ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<form method="post" action="/subjects">
<?php echo csrf_field(); ?>

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
</div>
<div class="form-group">
    <input class="form-control" name="description" type="text" placeholder="Description">
</div>
<div class="form-group">
    <input class="form-control" name="year" type="text" placeholder="Year">
</div>
<div class="form-group">
    <input class="form-control" name="hour_lesson" type="text" placeholder="Hour lesson">
</div>
<div class="form-group">
    <input class="form-control" name="hour_exercise" type="text" placeholder="Hour exercise">
</div>
<div class="form-group">
    <select class="form-control" name="teacher_id">
        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->first_name); ?> <?php echo e($teacher->last_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>