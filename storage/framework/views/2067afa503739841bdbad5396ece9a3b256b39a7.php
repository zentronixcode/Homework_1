<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h3>Update Data</h3><br>   
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- <?php echo e($ids = $p->id); ?>                  -->
                    <form action="<?php echo e(route('Ec_item.update', $p->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                    <div class="form-group row">
                        
                        <div class="col-md-6">
                            <input type="hidden" name="old_photo" value="<?php echo e($p->photo); ?>">
                            <input type="hidden" name="id_item" value="<?php echo e($p->id); ?>">
                            <label for="product_name" class="col-md-12 col-form-label text-md-left"><?php echo e(__('Product Name')); ?></label>
                            <br>
                            <div class="col-md-12">
                                <input id="produk_name" type="text" value="<?php echo e($p->product_name); ?>" class="form-control <?php if ($errors->has('produk_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('produk_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="product_name" value="<?php echo e(old('product_name')); ?>" required autocomplete="product_name">

                                <?php if ($errors->has('product_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('product_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="col-md-12 col-form-label text-md-left"><?php echo e(__('Amount')); ?></label>
                            <br>
                            <div class="col-md-12">
                                <input id="amount" value="<?php echo e($p->amount); ?>" type="number" min="0" class="form-control <?php if ($errors->has('amount')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('amount'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="amount" value="<?php echo e(old('amount')); ?>" required autocomplete="amount">

                                <?php if ($errors->has('amount')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('amount'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="col-md-12 col-form-label text-md-left"><?php echo e(__('Price')); ?></label>
                            <br>
                            <div class="col-md-12">
                                <input id="price" value="<?php echo e($p->price); ?>" type="text" class="form-control <?php if ($errors->has('price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('price'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="price" value="<?php echo e(old('price')); ?>" required autocomplete="price">

                                <?php if ($errors->has('price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('price'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="col-md-12 col-form-label text-md-left"><?php echo e(__('Photo')); ?></label>
                            <br>
                            <div class="col-md-12">
                                <input id="photo" type="file" accept="image/*" style="padding:3px;" class="form-control <?php if ($errors->has('photo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('photo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="new_photo" autocomplete="photo">

                                <?php if ($errors->has('photo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('photo'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="cat_id" class="col-md-12 col-form-label text-md-left"><?php echo e(__('Category')); ?></label>
                            <br>
                            <div class="col-md-12">
                            <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <select id="cat_id" class="form-control <?php if ($errors->has('cat_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cat_id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="cat_id" value="<?php echo e(old('cat_id')); ?>" required autocomplete="cat_id">
                                
                                    <option value="<?php echo e($p1->id); ?>"><?php echo e($p1->category_name); ?></option>
                                </select>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if ($errors->has('cat_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cat_id'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                            <div class="col-md-12 col-form-label"></div>
                            <br>
                            <button type="submit" class="form-control btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                            </button>
                            </div>
                                
                        </div>
                        
                    </div>
                    </form>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\homework_1\resources\views/ec/update.blade.php ENDPATH**/ ?>