<div class="form"><?php $form=$this->beginWidget('CActiveForm', array(	'id'=>'feedback-form',	'enableAjaxValidation'=>false,)); ?>	<p class="note">带星号（<span class="required">*</span>）的是必须的。</p>	<?php echo $form->errorSummary($model); ?>	<div class="row">		<?php echo $form->labelEx($model,'name'); ?>		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>		<?php echo $form->error($model,'name'); ?>	</div>	<div class="row">		<?php echo $form->labelEx($model,'tel'); ?>		<?php echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>100)); ?>		<?php echo $form->error($model,'tel'); ?>	</div>	<div class="row">		<?php echo $form->labelEx($model,'email'); ?>		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>		<?php echo $form->error($model,'email'); ?>	</div>	<div class="row">		<?php echo $form->labelEx($model,'content'); ?>		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>		<?php echo $form->error($model,'content'); ?>	</div>	<div class="row buttons">		<?php echo CHtml::submitButton($model->isNewRecord ? '发布' : '保存'); ?>	</div><?php $this->endWidget(); ?></div><!-- form -->