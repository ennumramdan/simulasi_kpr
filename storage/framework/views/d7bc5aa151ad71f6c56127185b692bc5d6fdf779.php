<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You logged in, Welcome back <?php echo e($user->name); ?>!

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID. </td>
                                <td>Name</td>
                                <td>E-mail</td>
                                <td>Address</td>
                                <td>Job</td>
                                <td>Income </td>
                                <td>NPWP </td>
                                <td>Home Price </td>
                                <td>Action </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($usr->id); ?></td>
                                    <td><?php echo e($usr->name); ?></td>
                                    <td><?php echo e($usr->email); ?></td>
                                    <td><?php echo e($usr->address); ?></td>
                                    <td><?php echo e($usr->job); ?></td>
                                    <td><?php echo e($usr->income); ?> </td>
                                    <td>
                                        <img src="<?php echo e($usr->npwp); ?>" width="75" />
                                    </td>
                                    <td><?php echo e($usr->home_price); ?></td>
                                    <td>
                                    <a href="<?php echo e(route('home.edit', $usr->id)); ?>" class="btn btn-ms btn-primary"> Edit </a>
                                    <?php if($user->id === 1): ?>
                                        <?php if($usr->id !== 1): ?>
                                        <form class="form-horizontal" method="post" action="<?php echo e(route('home.destroy', $usr->id)); ?>" >
                                            <?php echo e(csrf_field()); ?>

                                            <input name="_method" value="DELETE" type="hidden"> 
                                            <input type="submit" class="btn btn-ms btn-danger" value="Delete">
                                        </form>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>