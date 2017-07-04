<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 04.07.17
 * Time: 12:43
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Редактирование профиля';
$this->params['breadcrumbs'][] = $this->title;

    $form = ActiveForm::begin(); ?>
        <?= $form->field($profiledate, 'profile_firstname') ?>
        <?= $form->field($profiledate, 'profile_lastname') ?>
        <?= $form->field($profiledate, 'profile_patronymic') ?>
        <?= $form->field($profiledate, 'profile_birth_date')->input('date') ?>
        <?= $form->field($profiledate, 'profile_phonecell')->widget(\yii\widgets\MaskedInput::classname(), [
    'mask' => '(999)-999-99-99',
]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>