<?php $__env->startSection('content'); ?>

<a class="btn btn-primary float-right" href="/continents/new">Novi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">number_of_countries</th>
      <th scope="col">native_name</th>
      
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $continents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $continent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?= $continent->name ?></td>
      <td><?= $continent->number_of_countries ?></td>
      <td><?= $continent->native_name ?></td>

      
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>