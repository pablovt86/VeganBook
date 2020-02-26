<div class="modal fade modal-slide-in-rigth" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$post->id}}">
{{Form::model($post, ['route' => ['posts.destroy', $post->id],'method'=>'delete'])}}
@csrf
 <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden ="true">x</span>
    </button>
    <h5 class="modal-title">eliminar post</h5>
    </div>
    <div class="modal-body">
      <p>confirme si desea eliminar el post</p>
    </div>
    <div class="modal-footer">
      <button type="button"class="btn btn_default" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary"> confirmar</button>
    </div>
  </div>

</div>
{{ Form::close() }}                            
</div>