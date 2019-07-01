<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Vardas</th>
      <th scope="col">Pavardė</th>
      <th scope="col">Amžius</th>
      <th scope="col">Adresas</th>
      <th scope="col">Veiksmas</th>
    </tr>
  </thead>
  <tbody>

  <?php if(!empty($posts)):?>
  <?php foreach($posts as $post):?>
    <tr>
      <td class="getinfo" data-name="<?php echo $post->vardas;?>" data-id="<?php echo $post->id;?>" style="cursor:pointer" data-toggle="modal"><?php echo $post->vardas;?></td>
      <td><?php echo $post->pavarde;?></td>
      <td><?php echo $post->amzius;?></td>
      <td><?php echo $post->adresas;?></td>
      <td>
        <?php echo $this->html->link('Redaguoti', ['action'=>'edit', $post->id], ['class'=>'btn btn-outline-info']);?>
        <?= $this->Form->postLink(
        'Ištrinti',
        ['action'=>'delete', $post->id],
        ['class'=>'btn btn-outline-danger delete'],
        ['confirm'=>'Ar tikrai?'])
        ?>
      </td>
    </tr>

   <?php endforeach;?>
   <?php else:?>
   <td>Nėra įrašų</td>
   <?php endif;?>
  </tbody>
</table>
</div>