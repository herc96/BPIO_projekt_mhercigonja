<?php $__env->startSection('content'); ?>
<a class="btn btn-primary float-right" href="/students/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">dateofbirth</th>
      <th scope="col">address</th>
      <th scope="col">sign</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?= $student->id ?></td>
      <td><?= $student->first_name ?></td>
      <td><?= $student->last_name ?></td>
      <td><?= $student->dateofbirth ?></td>
      <td><?= $student->address ?></td>
      <td><?= $student->sign ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>