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
 
  <div style="position: relative; top:60px; right:-150px" >
         <form action="<?php echo e(url('/uploadfood')); ?> " method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div>
                <label>Title</label>
                <input style="color:black" type="text" name="title"  placeholder="Title "  required>
            </div>
            <div>
                <label>Price</label>
                <input  style="color:black" type="text" name="price"  placeholder="Price "  required>
            </div>
            <div>
                <label>Image</label>

                <input type="file" name="image"   required>
            </div>
            <div>
                <label>Description</label>
                <input style="color:black"  type="text" name="description"  placeholder=" Description "  required>
            </div>
               <input  type="submit"  class="btn btn-info" name="submit" value="Upload">
        
         </form>
         <div> 




          <table bgcolor="black" width="500" hight="500">
            <tr>
              <th  style="padding:30px">Food Name </th>
              <th  style="padding:30px">Food Price</th>
              <th  style="padding:30px">Food Image </th>
              <th  style="padding:30px">Food Description </th>
              <th  style="padding:30px">Actions1 </th>
              <th  style="padding:30px">Actions2 </th>
            </tr>
           
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr align="center">
            <td><?php echo e($data->title); ?></td>
            <td><?php echo e($data->price); ?>$</td>
            <td><img hight="200" width="200" src="/foodimages/<?php echo e($data->image); ?>"></td>
            <td><?php echo e($data->description); ?></td>
            <td><a href="<?php echo e(url('/deletemenu',$data->id)); ?>"  class="btn btn-light">Delete</a></td>
            <td><a href="<?php echo e(url('/updateview',$data->id)); ?>"  class="btn btn-light">Update</a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



          </table>
         </div>


       
  </div>
</div>

<?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    
  </body>
</html><?php /**PATH E:\totorial\restaurant\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>