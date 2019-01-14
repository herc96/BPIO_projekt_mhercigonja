<?php $__env->startSection('content'); ?>

<a class="btn btn-primary float-right" href="/subjects/new">Novi</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">year</th>
      <th scope="col">hour_lesson</th>
      <th scope="col">hour_exercise</th>
      <th scope="col">teacher_id</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?= $subject->id ?></td>
      <td><?= $subject->name ?></td>
      <td><?= $subject->description ?></td>
      <td><?= $subject->year ?></td>
      <td><?= $subject->hour_lesson ?></td>
      <td><?= $subject->hour_exercise ?></td>
      <td><?= $subject->teacher->first_name ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>