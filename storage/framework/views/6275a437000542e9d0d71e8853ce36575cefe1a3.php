<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
  <div class="container-scroller">
  <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <form action="<?php echo e(url('/uploadchef')); ?>" method="post" enctype="multipart/form-data">
 
  <?php echo csrf_field(); ?>
<div>
    <label>Name</label>
    <input style="color:black" type="text" name="name" required="" placeholder=" name">
</div>
<div>
    <label>Speciality</label>
    <input style="color:black" type="text" name="speciality" required   placeholder=" speciality">
</div>
<div>
   
    <input type="file" name="image" required >
</div>

<div>
    
    <input type="submit"  class="btn btn-info" value="Submit" required="" >
</div>

</form>


<table bgcolor="black" >
            <tr>
              <th  style="padding:30px">Chef Name </th>
              <th  style="padding:30px">Speciality</th>
              <th  style="padding:30px">Image </th>
              <th  style="padding:30px">Actions1 </th>
              <th  style="padding:30px">Actions2 </th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr align="center">
            <td><?php echo e($data->name); ?></td>
            <td><?php echo e($data->speciality); ?></td>
            <td><img hight="200" width="200" src="/chefimages/<?php echo e($data->image); ?>"></td>
            <td><a href="<?php echo e(url('/deletechef',$data->id)); ?>" class="btn btn-light">Delete</a></td>
            
            <td><a href="<?php echo e(url('/updatechef',$data->id)); ?>" class="btn btn-light">Update</a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           
  <div>
  <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    
  </body>
</html><?php /**PATH E:\totorial\restaurant\resources\views/admin/adminchefs.blade.php ENDPATH**/ ?>