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

  <div class="container">
  <h1 align="center">Customer Orders</h1><br>
  <form align="center" action="<?php echo e(url('search')); ?>" method="get">
    <?php echo csrf_field(); ?>
    <input type="text" name="search" style="color:black";>
    <input type="submit" value="Search" class="btn btn-outline-success">
  </form>
  
  <div style="position:relative; top:60px; right:-100px">
  <table bgcolor="black"  border="4px">
            <tr align="center">
             
              <th  style="padding:40px">Name </th>
              <th  style="padding:40px">Phone </th>
              <th  style="padding:40px">Address </th>
              <th  style="padding:40px">Food Name </th>
              <th  style="padding:40px">Price</th>
              <th  style="padding:40px">Quantity </th>
              <th  style="padding:40px">Total Price </th>
            </tr>
           
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr align="center">
            <td><?php echo e($data->name); ?></td>
            <td><?php echo e($data->phone); ?></td>
            <td><?php echo e($data->address); ?></td>
            <td><?php echo e($data->foodname); ?></td>
            <td><?php echo e($data->price); ?>$</td>
            <td><?php echo e($data->quantity); ?></td>
            <td><?php echo e($data->price * $data->quantity); ?>$</td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



          </table>
</div>
</div>








</div>
  <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH E:\totorial\restaurant\resources\views/admin/order.blade.php ENDPATH**/ ?>