<div class="modal fade" id="edit-hasil-rapat{{ $item->id_hasil }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Hasil Rapat Sikap</h4>
        </div>
        <form action="{{ url('raport/update-hasil-rapat/'.$item->id_hasil) }}" method="POST">
            @method('POST')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Masukan hasil rapat</label>
                    <textarea name="hasil_rapat" id="" cols="30" class="form-control" rows="10"></textarea>
                </div>
            </div>

           <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
           </div>
        </form>
      </div>
    </div>
</div>