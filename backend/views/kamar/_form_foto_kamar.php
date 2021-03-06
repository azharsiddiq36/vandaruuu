<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
// use yii\helpers\Html;
use yii\helpers\Url;
use yii\jui\JuiAsset;
use yii\web\JsExpression;
use kartik\file\FileInput;
use wbraganca\dynamicform\DynamicFormWidget;
use app\modules\yii2extensions\models\Image;

use common\models\FotoKamar;
use common\models\FotoKamarSearch;

/* @var $this yii\web\View */
/* @var $model common\models\FotoKamar */
/* @var $form yii\widgets\ActiveForm */
?>
<div id="panel-option-values" class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-camera"></i> Foto Kamar</h3>
    </div>
    <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper',
            'widgetBody' => '.form-options-body',
            'widgetItem' => '.form-options-item',
            'min' => 1,
            'insertButton' => '.add-item',
            'deleteButton' => '.delete-item',
            'model' => $modelFotoKamar[0],
            'formId' => 'dynamic-form',
            'formFields' => [
                'foto_id_kamar',
                'foto_kamar',
            ],
        ]); ?>

        <table class="table table-bordered table-striped margin-b-none">
            <thead>
                <tr>
                    <th style="width: 90px; text-align: center"></th>
                    <!-- <th class="required">Option value name</th> -->
                    <th style="width: 250px;">Image</th>
                    <th style="width: 90px; text-align: center">Actions</th>
                </tr>
            </thead>
            <tbody class="form-options-body">
                <?php foreach ($modelFotoKamar as $index => $modelFotoKamars): ?>
                    <tr class="form-options-item">
                        <td class="sortable-handle text-center vcenter" style="cursor: move;">
                            <i class="fa fa-arrows"></i>
                        </td>
                        <!-- <td class="vcenter"> -->
                            <?php // $form->field($modelFotoKamars, "[{$index}]name")->label(false)->textInput(['maxlength' => 128]); ?>
                        <!-- </td> -->
                        <td>
                            <?php if (!$modelFotoKamars->isNewRecord): ?>
                                <?= Html::activeHiddenInput($modelFotoKamars, "[{$index}]foto_id_foto"); ?>
                                <?= Html::activeHiddenInput($modelFotoKamars, "[{$index}]foto_id_kamar"); ?>
                                <?= Html::activeHiddenInput($modelFotoKamars, "[{$index}]foto_id_foto"); ?>
                                <!-- <?php // Html::activeHiddenInput($modelFotoKamars, "[{$index}]deleteImg"); ?> -->
                            <?php endif; ?>
                            <?php
                            //Image
                                // $modelImage = FotoKamar::findOne(['foto_id_foto' => $model->foto_id_foto]);
                                $modelImage = FotoKamar::findOne(['foto_id_foto' => $modelFotoKamars->foto_id_foto]);
                                $initialPreview = [];
                                if ($modelImage) {
                                    $pathImg = Yii::$app->basePath . "/web/foto/". $modelImage->path;
                                    $initialPreview[] = Html::img($pathImg, ['class' => 'file-preview-image']);
                                }
                            ?>
                            <?= $form->field($modelFotoKamars, "[{$index}]foto_kamar")->label(false)->widget(FileInput::classname(), [
                                'options' => [ 
                                    'multiple' => false,    
                                    'accept' => 'image/*',    
                                    'class' => 'optionvalue-img'    
                                ],    
                                'pluginOptions' => [    
                                    'previewFileType' => 'image',    
                                    'showCaption' => false,    
                                    'showUpload' => false,    
                                    'browseClass' => 'btn btn-default btn-sm',    
                                    'browseLabel' => ' Pick image',    
                                    'browseIcon' => '<i class="glyphicon glyphicon-picture"></i>',    
                                    'removeClass' => 'btn btn-danger btn-sm',    
                                    'removeLabel' => ' Delete',    
                                    'removeIcon' => '<i class="fa fa-trash"></i>',    
                                    'previewSettings' => [    
                                        'image' => ['width' => '138px', 'height' => 'auto']    
                                    ],    
                                    // 'initialPreview' => '../../backend/web/foto/'. $modelFotoKamars->foto_kamar,   
                                    'initialPreview' => $initialPreview, 
                                    'layoutTemplates' => ['footer' => '']    
                                ]    
                            ]) ?>
                        
                        </td>
                        <td class="text-center vcenter">
                            <button type="button" class="delete-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"></td>
                <td><button type="button" class="add-item btn btn-success btn-sm"><span class="fa fa-plus"></span> New</button></td>
            </tr>
        </tfoot>
    </table>
    <?php DynamicFormWidget::end(); ?>
</div>

<?php
$js = <<<'EOD'

$(".optionvalue-img").on("filecleared", function(event) {
    var regexID = /^(.+?)([-\d-]{1,})(.+)$/i;
    var id = event.target.id;
    var matches = id.match(regexID);
    if (matches && matches.length === 4) {
        var identifiers = matches[2].split("-");
        $("#optionvalue-" + identifiers[1] + "-deleteimg").val("1");
    }
});

var fixHelperSortable = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};

$(".form-options-body").sortable({
    items: "tr",
    cursor: "move",
    opacity: 0.6,
    axis: "y",
    handle: ".sortable-handle",
    helper: fixHelperSortable,
    update: function(ev){
        $(".dynamicform_wrapper").yiiDynamicForm("updateContainer");
    }
}).disableSelection();

EOD;
JuiAsset::register($this);
$this->registerJs($js);
?>