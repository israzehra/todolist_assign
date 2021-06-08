
<?php $__env->startSection('content'); ?>

<?php echo Form::open(array('url' => route('todolist.index'), 'method' => 'post')); ?>

<?php echo Form::text('task_name'); ?>

<?php echo Form::submit('add'); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpfolder\htdocs\todo_list\resources\views/add_todolist.blade.php ENDPATH**/ ?>