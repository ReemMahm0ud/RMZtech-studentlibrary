

<?php $__env->startSection('content'); ?>

<?php if($message =Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-md-6">
        <h1 style="text-align:center">LIBRARY</h1>
        <h1>book list</h1>
    </div>
    <div class="col-md-4">
        <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="form-group-prepend">
                    <button type="submit" class="btn btn-primary">search</button>
                </span>
            </div>
        </form>
    </div>
    <div class="col-md-2 text-right">
        <!--<a href="<?php echo e(action('BookController@create')); ?>" class="btn btn-primary">my favourite</a>-->
        <!--<a href="/files/create" class="btn btn-primary">upload file</a>-->
    </div>
</div>
<table class="table table-bordered table-hover table-dark">
    <thread>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Auther</th>
            <th>Edition</th>
            <th>catagory</th>
            <th width="200">Action</th>
        </tr>
    </thread>
    <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($book-> id); ?></td>
            <td><?php echo e($book-> name); ?></td>
            <td><?php echo e($book-> auther); ?></td>
            <td><?php echo e($book-> edition); ?></td>
            <td><?php echo e($book-> catagory); ?></td>
            <td>
                <form action="<?php echo e(action('BookController@destroy', $book->id)); ?>" method="post">
                    <a href="/files/<?php echo e($book->id); ?>" class="btn btn-info">Show</a>
                    <a class="btn btn-warning">favourite</a>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ALEX STORE\Downloads\llibrary_1\llibrary\resources\views/index.blade.php ENDPATH**/ ?>