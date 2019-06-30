<?php echo $this->Form->create($post);?>
  <fieldset>
    <legend>Pridėti</legend>

    <div class="form-group">
      <?php echo $this->Form->input('vardas', ['class'=>'form-control', 'Placeholder'=>'Vardas', 'style'=>'width:350px']);?>
    </div>

    <div class="form-group">
      <?php echo $this->Form->input('pavarde', ['class'=>'form-control', 'Placeholder'=>'Pavardė', 'style'=>'width:350px']);?>
    </div>

    <div class="form-group">
       <?php echo $this->Form->input('amzius', ['class'=>'form-control', 'Placeholder'=>'Amžius', 'style'=>'width:350px']);?>
    </div>

    <div class="form-group">
       <?php echo $this->Form->input('adresas', ['class'=>'form-control', 'Placeholder'=>'Adresas', 'style'=>'width:350px']);?>
    </div>

    </fieldset>
    <?php echo $this->Form->button(__('Pridėti'), ['class'=>'btn btn-outline-primary', 'style'=>'width:173px']);?>
    <?php echo $this->html->link('Atgal', ['action'=>'index'], ['class'=>'btn btn-outline-primary', 'style'=>'width:173px']);?>

<?php echo $this->Form->end();?>