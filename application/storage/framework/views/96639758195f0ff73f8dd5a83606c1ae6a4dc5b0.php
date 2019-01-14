<?php $__env->startSection('content'); ?>

<?php if($errors->count() > 0): ?>
    <div class="alert alert-danger" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?= $message ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<form method="post" action="/signs">
<?php echo csrf_field(); ?>

<div class="form-group">
    <input class="form-control" name="test1date" type="text" placeholder="Test 1 date">
</div>
<div class="form-group">
    <input class="form-control" name="test1grade" type="text" placeholder="Test 1 grade">
</div>
<div class="form-group">
    <input class="form-control" name="test2date" type="text" placeholder="Test 2 date">
</div>
<div class="form-group">
    <input class="form-control" name="test2grade" type="text" placeholder="Test 2 grade">
</div>
<div class="form-group">
    <input class="form-control" name="testdate" type="text" placeholder="Test date">
</div>
<div class="form-group">
    <input class="form-control" name="testgrade" type="text" placeholder="Test grade">
</div>
<div class="form-group">
    <input class="form-control" name="presence" type="text" placeholder="Presence">
</div>
<div class="form-group">
    <select class="form-control" name="student_id">
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($student->id); ?>"><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="subject_id">
        <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>