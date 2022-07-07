
<?php $__env->startSection('content'); ?>
<div class="container">
    <embed src="../storage/files/<?php echo e($file->name); ?>.pdf" type="application/pdf" width="1000px" height="1000px" style="margin: auto;">
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VANESSA GIOVANI\Documents\GitHub\unidashboard\resources\views/viewer.blade.php ENDPATH**/ ?>