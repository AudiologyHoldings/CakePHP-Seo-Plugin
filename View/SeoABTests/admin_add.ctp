<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoABTests form">
	<?php echo $this->Form->create('SeoABTest');?>
		<fieldset>
			<legend><?php echo __('Admin Add Seo AB Test'); ?></legend>
		<?php
			echo $this->Form->input('SeoUri.uri', array('after' => 'The URL or URI expression you want this test to run on.'));
			echo $this->Form->input('slug', array('after' => 'The slug for the your GA custom variable. Cannot contain a \' mark.'));
			echo $this->Form->input('roll', array('after' => 'The roll must be a number between 1 and 100 (100 being 100% roll success), or a callback function with Model::function syntax.'));
			echo $this->Form->input('priority', array('default' => 999, 'after' => 'The lower the priority the more important the test is in regards to others.'));
			echo $this->Form->input('redmine', array('after' => 'The Redmine ticket ID'));
			echo $this->Form->input('start_date');
			echo $this->Form->input('end_date');
			echo $this->Form->input('description');
			echo $this->Form->input('is_active');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>
</div>