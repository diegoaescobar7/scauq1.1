<div class="activities form">
<?php echo $this->Form->create('Activity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Activity'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('dirigido');
		echo $this->Form->input('fechaInicio');
		echo $this->Form->input('fechaFin');
		echo $this->Form->input('afecta');
		echo $this->Form->input('fuentes_informacion');
		echo $this->Form->input('proceso');
		echo $this->Form->input('id_Estado_Actividad');
		echo $this->Form->input('id_Archivo_Entregable_Actividad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
