;
<?php $__env->startSection('content'); ?>;
<h2 class="text-center" style="margin-bottom: 30px">Tashkilot haqida ma'lumot</h2>
     <div class="row justify-content-center">
          <div class="col-md-6">
               <div class="mb-3">
                    <a href="<?php echo e(route('companies.index')); ?>" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Orqaga</a>
               </div>
               <table class="table table-bordered">
                    <tr>
                         <td>Tashkilot nomi</td>
                         <td><?php echo e($company->name); ?></td>
                    </tr>
                    <tr>
                         <td>Tashkilot manzili</td>
                         <td><?php echo e($company->address); ?></td>
                    </tr>
                    <tr>
                         <td>Tashkilot telefon raqami</td>
                         <td><?php echo e($company->phone); ?></td>
                    </tr>
                    <tr>
                         <td>Qo'shilgan vaqt</td>
                         <td><?php echo e($company->created_at); ?></td>
                    </tr>
                    <tr>
                         <td>Taxrirlangan vaqt</td>
                         <td><?php echo e($company->updated_at); ?></td>
                    </tr>
               </table>
          </div>
     </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GOLD\Desktop\laravel-practice\resources\views/companies/show.blade.php ENDPATH**/ ?>