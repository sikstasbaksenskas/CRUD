<?php echo $this->Form->create($posts) ?>
  <fieldset>
    <legend>Redaguoti</legend>

    <div class="form-group">
      <?php echo $this->Form->input('vardas', ['class'=>'form-control', 'value'=>$vardas, 'style'=>'width:350px']);?>
    </div>

    <div class="form-group">
      <?php echo $this->Form->input('pavarde', ['class'=>'form-control', 'value'=>$pavarde, 'style'=>'width:350px']);?>
    </div>

    <div class="form-group">
       <?php echo $this->Form->input('amzius', ['class'=>'form-control', 'value'=>$amzius, 'style'=>'width:350px']);?>
    </div>

    <div class="form-group">
       <?php echo $this->Form->input('adresas', ['class'=>'form-control', 'value'=>$adresas, 'style'=>'width:350px']);?>
    </div>

    </fieldset>
<?php echo $this->Form->button('Redaguoti', ['class'=>'btn btn-outline-info', 'style'=>'width:173px']) ?>
<?php echo $this->html->link('Atgal', ['action'=>'index'], ['class'=>'btn btn-outline-info', 'style'=>'width:173px']);?>
<?php echo $this->Form->end() ?>


