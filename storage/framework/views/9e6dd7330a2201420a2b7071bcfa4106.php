;
<?php $__env->startSection('content'); ?>;
     <h2 class="text-center">Bu tashkilotlar ro'yxati</h2>
     
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="<?php echo e(route('companies.create')); ?>" class="btn btn-success" type="button">Tashkilot qo'shish</a>
     </div>

     <table class="table table-bordered">
          <thead>
               <tr>
                    <th>T/R</th>
                    <th>Tashkilot nomi</th>
                    <th>Tashkilot manzili</th>
                    <th>Tashkilot raqami</th>
                    <th>Amallar</th>
               </tr>
          </thead>
          
          <tbody>
               <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(($companies->currentPage() - 1) * $companies->perPage() + $loop->index + 1); ?></td>
                    <td><?php echo e($company->name); ?></td>
                    <td><?php echo e($company->address); ?></td>
                    <td><?php echo e($company->phone); ?></td>
                    <td>
                        <a href="<?php echo e(route('companies.show', ['company' => $company->id])); ?>" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                        <a href="<?php echo e(route('companies.edit', ['company' => $company->id])); ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                        <form action="<?php echo e(route('companies.destroy', ['company' => $company->id])); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
     </table>
     <?php echo e($companies->links()); ?>

     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\GOLD\Desktop\laravel-practice\resources\views/companies/index.blade.php ENDPATH**/ ?>