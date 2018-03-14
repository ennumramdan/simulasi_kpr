<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('home.update', $user->id)); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input name="_method" value="PUT" type="hidden">   
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="id" type="hidden" name="if" value="<?php echo e($user->id); ?>" required autofocus>
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="<?php echo e($user->address); ?>" required>

                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('job') ? ' has-error' : ''); ?>">
                            <label for="job" class="col-md-4 control-label">Job</label>

                            <div class="col-md-6">
                                <input id="job" type="text" class="form-control" name="job" value="<?php echo e($user->job); ?>" required>

                                <?php if($errors->has('job')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('job')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('income') ? ' has-error' : ''); ?>">
                            <label for="income" class="col-md-4 control-label">Income</label>

                            <div class="col-md-6">
                                <input id="income" type="text" class="form-control" name="income" value="<?php echo e($user->income); ?>" required>

                                <?php if($errors->has('income')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('income')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('npwp') ? ' has-error' : ''); ?>">
                            <label for="npwp" class="col-md-4 control-label">NPWP</label>

                            <div class="col-md-6">
                                <input id="npwp" type="file"accept="image/*" class="form-control" name="npwp" value="">
                                <small>*empty it, if you won't edit</small>
                                <?php if($errors->has('npwp')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('npwp')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('home_price') ? ' has-error' : ''); ?>">
                            <label for="home_price" class="col-md-4 control-label">Home Price</label>

                            <div class="col-md-6">
                                <input id="home_price" type="number" class="form-control" name="home_price" value="<?php echo e($user->home_price); ?>" required>

                                <?php if($errors->has('home_price')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('home_price')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <small>*empty it, if you won't edit</small>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>