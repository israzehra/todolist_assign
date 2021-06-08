<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Todo list</title>
</head>
<body>
    <h1 style="color: blue;
    text-align: center;
    font-size: 55px;">WELCOME</h1>
    <?php if(session()->has('success')): ?>
    <p><?php echo e(session()->get('success')); ?></p>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>


    
</body>
</html><?php /**PATH C:\phpfolder\htdocs\todo_list\resources\views/layouts/master.blade.php ENDPATH**/ ?>