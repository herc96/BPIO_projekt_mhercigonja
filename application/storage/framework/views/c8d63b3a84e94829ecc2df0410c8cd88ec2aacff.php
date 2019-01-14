<?php $__env->startSection('content'); ?>

<a class="btn btn-primary float-right" href="/teachers/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">title</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?= $teacher->first_name ?></td>
      <td><?= $teacher->last_name ?></td>
      <td><?= $teacher->title ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>