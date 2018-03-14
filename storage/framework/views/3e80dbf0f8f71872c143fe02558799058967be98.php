<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Simulasi</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('simulation')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
                            <label for="price" class="col-md-4 control-label">Harga Rumah</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value="<?php echo e(old('price')); ?>" required autofocus>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dp') ? ' has-error' : ''); ?>">
                            <label for="dp" class="col-md-4 control-label">DP</label>

                            <div class="col-md-6">
                                <input id="dp" type="number" class="form-control" name="dp" value="<?php echo e(old('dp')); ?>" required >
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('waktu') ? ' has-error' : ''); ?>">
                            <label for="waktu" class="col-md-4 control-label">Jangka Waktu(tahun)</label>

                            <div class="col-md-6">
                                <input id="waktu" type="number" class="form-control" name="waktu" value="<?php echo e(old('waktu')); ?>" required >
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('bunga') ? ' has-error' : ''); ?>">
                            <label for="bunga" class="col-md-4 control-label">Bunga(%)</label>

                            <div class="col-md-6">
                                <input id="bunga" type="number" class="form-control" name="bunga" value="<?php echo e(old('bunga')); ?>" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Calculate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Hasil</div>
                <div class="panel-body">
                    <?php if($datas !==  null): ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Angsuran Ke </td>
                                <td>Cicilan Pokok</td>
                                <td>Bunga</td>
                                <td>Total Angsuran</td>
                                <td>Sisa Hutang</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>-</td>
                            </tr>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data['no']); ?></td>
                                    <td><?php echo e(number_format($data['angka_pokok'], 2)); ?></td>
                                    <td><?php echo e(number_format($data['angka_bunga'], 2)); ?></td>
                                    <td><?php echo e(number_format($data['cicilan'], 2)); ?></td>
                                    <td><?php echo e(number_format($data['hutang'], 2)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>