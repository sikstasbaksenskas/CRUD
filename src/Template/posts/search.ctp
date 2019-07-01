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
      <td style="cursor:pointer" data-toggle="modal" data-target=<?php echo "#".$post->vardas;?>><?php echo $post->vardas;?></td>
      <td><?php echo $post->pavarde;?></td>
      <td><?php echo $post->amzius;?></td>
      <td><?php echo $post->adresas;?></td>
      <td>
        <?php echo $this->html->link('Redaguoti', ['action'=>'edit', $post->id], ['class'=>'btn btn-outline-info']);?>
        <?= $this->Form->postLink(
        'Ištrinti',
        ['action'=>'delete', $post->id],
        ['class'=>'btn btn-outline-danger'],
        ['confirm'=>'Ar tikrai?'])
        ?>
      </td>
      <td>

         <!-- Modal -->
         <div class="modal fade" id=<?php echo $post->vardas;?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
               <p class="text-success">Papildoma Informacija apie <?php echo $post->vardas;?></p>
               </div>
               <div class="modal-body">
                 <?php echo "Šio vartotojo ID yra ".$post->id;?>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
               </div>
             </div>
           </div>
         </div>
         <?-- s -->

      </td>
    </tr>

   <?php endforeach;?>
   <?php else:?>
   <td>Nėra įrašų</td>
   <?php endif;?>
  </tbody>
</table>
</div>