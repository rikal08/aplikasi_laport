<div class="modal fade" id="create-hasil-rapat">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data Hasil Rapat Sikap</h4>
        </div>
        <form action="{{ url('raport/tambah-hasil-rapat') }}" method="POST">
            @method('POST')
            @csrf
            <input type="text"  name="id_tahun_ajaran" value="{{ $ta }}" hidden>
            <input type="text"  name="id_kelas" value="{{ $kelas->id_kelas }}" hidden>

            <p class="text-center">Apakah anda ingin menambahkan data hasil rapat sikap spritual dan sosial pada tahun ajaran semester <b>{{ $tha->semester }} - {{ $tha->tahun_ajaran }}</b>? tekan simpan untuk proses selanjutnya!</p>

           <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
           </div>
        </form>
      </div>
    </div>
</div>