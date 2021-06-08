

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('todolist.create')); ?>"><i style="margin-left: 78%;
    font-size: 44px; background-color:rgba(137, 196, 244, 1) ;" class="fas fa-plus-square"></i></a>
<table border="1" cellpadding="10" cellspacing="0" style="margin-left: 17%;
    width: 65%;">
<thead>
<tr style="background-color:rgba(137, 196, 244, 1);">
<th>S.no</th>
<th>Task name</th>
<th>Completed at</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php if(count($todolists)): ?>
<?php $__currentLoopData = $todolists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($list->id); ?></td>
<td><?php echo e($list->todo_tasks); ?></td>
<td><?php echo e($list->Completed_at); ?></td>
<td style="display:flex;">
<a href="<?php echo e(route('todolist.edit' , ['todolist' => $list->id])); ?>"><i style=" font-size:25px;" class="far fa-edit"></i></a>

<?php echo Form::open(array('url' => route('todolist.destroy' , ['todolist' => $list->id]) ,'method' => 'delete')); ?>


<?php echo Form::button('<i style="margin-left:5%; font-size:25px;" class="far fa-trash-alt"></i>' , ['type' => 'submit' , 'class' => 'btn btn-warning btn-sm']); ?>


<?php echo Form::close(); ?>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<tr>
<td colspan="4">No data found</td>

</tr>
<?php endif; ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpfolder\htdocs\todo_list\resources\views/todolist.blade.php ENDPATH**/ ?>