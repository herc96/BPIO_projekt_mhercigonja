<?php $__env->startSection('content'); ?>


<?php if($errors->count() > 0): ?>
    <div class="alert alert-danger" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?= $message ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<form method="post" action="/continents">
<?php echo csrf_field(); ?>

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Name">
</div>
<div class="form-group">
    <input class="form-control" name="number_of_countries" type="text" placeholder="Number of countries">
</div>
<div class="form-group">
    <input class="form-control" name="native_name" type="text" placeholder="Native name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
<div class="form-group">
    <select class="form-control" name="student_name">
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($student->name); ?>"><?php echo e($student->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>