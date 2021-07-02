<?php $form = \app\src\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'name') ?>
    <?php echo $form->field($model, 'priority') ?>
    <?php echo $form->field($model, 'department') ?>
    <input type="submit" value="Submit">
<?php \app\src\form\Form::close() ?>
