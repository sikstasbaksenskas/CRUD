<div class="row">

    <h1>
        <?php echo $this->Html->link('Pridėti', ['action'=>'add'], ['class'=>'btn btn-outline-primary']);?>
    </h1>

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

    <!-- Modal -->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header text-success">

               </div>
               <div class="modal-body">

               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
               </div>
             </div>
           </div>
         </div>
    <?-- Modal ends -->

</div>


<script>

    <!-- Paieska -->

    $('document').ready(function(){
         $('#search').keyup(function(){
            var searchkey = $(this).val();
            searchTags( searchkey );
         });

        function searchTags( keyword ){
        var data = keyword;
        $.ajax({
                    method: 'get',
                    url : "<?php echo $this->Url->build( [ 'controller' => 'Posts', 'action' => 'search' ] ); ?>",
                    data: {keyword:data},
                    success: function( response )
                    {
                       $( '.table-hover' ).html(response);
                    }
                });
        };
    });


    <!-- Modal pildymas -->

    $(document).on("click", ".getinfo", function () {
         var info_id = $(this).data('id');
         var info_name = $(this).data('name');
         $(".modal-body").text("Šio vartotojo ID -> " + info_id );
         $(".modal-header").text("Papildoma informacija apie -> " + info_name );
         $('#myModal').modal('show');
    });

</script>