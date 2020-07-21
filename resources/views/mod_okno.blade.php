    <div class="modal fade" id="exampleModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" name="{{ $contact->id }}"">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Выберете действие...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

            <div class="modal-body">
              <p><a href="{{url('/show/'.$contact->id)}}" class="tooltip-test" title="Tooltip">Подробно</a></p>
              <hr>
              <p><a href="{{url('/izbrannie/'.$contact->id)}}" class="tooltip-test" title="Tooltip">В Избранные</a></p>
              <hr>
              <p><a href="{{url('/edit/'.$contact->id ) }}" class="tooltip-test" title="Tooltip">Обновить</a></p>
              <hr>
              <p><a href="{{url('/')}}" class="tooltip-test" title="Tooltip">Удалить</a></p>

            </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
