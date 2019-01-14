<?php $__env->startSection('content'); ?>

<a class="btn btn-primary float-right" href="/signs/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">test1date</th>
      <th scope="col">test1grade</th>
      <th scope="col">test2date</th>
      <th scope="col">test2grade</th>
      <th scope="col">testdate</th>
      <th scope="col">testgrade</th>
      <th scope="col">presence</th>
      <th scope="col">student_id</th>
      <th scope="col">subject_id</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $signs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?= $sign->test1date ?></td>
      <td><?= $sign->test1grade ?></td>
      <td><?= $sign->test2date ?></td>
      <td><?= $sign->test2grade ?></td>
      <td><?= $sign->testdate ?></td>
      <td><?= $sign->testgrade ?></td>
      <td><?= $sign->presence ?></td>
      <td><?= $sign->student->first_name ?></td>
      <td><?= $sign->subject->name ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>