<?php if(count($combinations) > 0): ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td class="text-center">
                <label for="" class="control-label">Variant</label>
            </td>
            <td class="text-center">
                <label for="" class="control-label">Variant Price</label>
            </td>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $combinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $combination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <label for="" class="control-label"><?php echo e($combination['type']); ?></label>
                </td>
                <td>
                    <input type="number" name="price_<?php echo e($combination['type']); ?>"
                           value="<?php echo e($combination['price']); ?>" min="0"
                           step="0.01"
                           class="form-control" required>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php endif; ?>
<?php /**PATH /home/vagrant/code/diningtest/resources/views/vendor-views/product/partials/_edit-combinations.blade.php ENDPATH**/ ?>