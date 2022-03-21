
<?php $__env->startSection('backend-section'); ?>
    <div class="main-content">
        <form name="add_banner" method="post" enctype="multipart/form-data" action=<?php echo e($url); ?>>
            <?php echo csrf_field(); ?>
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo e($title); ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tagline</label>

                                        <input type="text" class="form-control" name="tagline" value="<?php if(isset($banner)): ?><?php echo e($banner->tagline); ?><?php endif; ?> <?php echo e(old('tagline')); ?>">
                                        <span class="text-danger">
                                            <?php $__errorArgs = ['tagline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <?php echo e($message); ?>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" class="form-control" name="image[]" multiple>
                                        <span class="text-danger">
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <?php echo e($message); ?>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>
        </form>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admincampsandhotel.com\resources\views/backend/add-banner.blade.php ENDPATH**/ ?>