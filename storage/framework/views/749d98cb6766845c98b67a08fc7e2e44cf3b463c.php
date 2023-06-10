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
    <base href="/public">
     <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>


  <body>
  <div class="container-scroller">
  <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <form action="<?php echo e(url('/updatefoodchef',$data->id)); ?> " method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div>
                <label>Chef Name</label>
                <input style="color:black" type="text" name="name"  value="<?php echo e($data->name); ?>"   required>
            </div>
            <div>
                <label>Speciality</label>
                <input  style="color:black" type="text" name="speciality"  value="<?php echo e($data->speciality); ?>"  required>
            </div>
        
            

            <div>
                <label>Old Image</label>

                <img hight="200" width="200" src="/chefimages/<?php echo e($data->image); ?>">
                
                <div>
                <label> New Image</label>
                <input type="file" name="image"      required>
                </div>

                <input type="submit"  class="btn btn-info" name="submit" value="Update">
        
              </form>
                </div> 
             </div>



  <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
</html><?php /**PATH E:\totorial\restaurant\resources\views/admin/updatechef.blade.php ENDPATH**/ ?>