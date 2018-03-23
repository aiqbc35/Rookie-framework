<h3>uiiyy--<?php echo e($data); ?></h3>
<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($value->username); ?><br />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
