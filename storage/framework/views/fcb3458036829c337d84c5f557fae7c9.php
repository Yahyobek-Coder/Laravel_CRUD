;
<?php $__env->startSection('content'); ?>;
<h2 class="text-center">Tashkilot ma'lumotlarini taxrirlash</h2>
     <div class="row">
          <div class="col-md-6">
               <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                         <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                                   
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </ul>
                    </div>
                    <?php endif; ?>
               <form action="<?php echo e(route('companies.update', ['company'=>$company->id])); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
               <div class="mb-3">
                    <label class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($company->name); ?>">
               </div>
               <div class="mb-3">
                    <label class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control" name="address" value="<?php echo e($company->address); ?>">
               </div>
               <div class="mb-3">
                    <label class="form-label">Tashkilot telefon raqami</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo e($company->phone); ?>">
               </div>
               
                    <button type="submit" class="btn btn-primary">Saqlash</button>
               </form>
          </div>
     </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GOLD\Desktop\laravel-practice\resources\views/companies/edit.blade.php ENDPATH**/ ?>