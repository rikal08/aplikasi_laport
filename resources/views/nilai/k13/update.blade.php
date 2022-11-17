<div class="modal fade" id="edit-nilai2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Nilai Siswa</h4>
        </div>
        <form action="{{ url('update-nilai') }}" method="POST">
            @method('DELETE')
            @csrf
            <div class="modal-body">
              <input type="text" id="nisn_siswa"  hidden>    
              <input type="text" id="id_kelas_a" hidden>    
              <input type="text" id="id_guru_a" hidden>    
              <input type="text" id="id_mapel_a" hidden>    
              <input type="text" id="id_tahun_ajaran_a" hidden>
              
              <div class="form-group">
                <label for="">Nilai Pengetahuan</label>
                <select name="" id="nilai_peng" class="form-control">
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C+">C+ </option>
                    <option value="C">C</option>
                    <option value="C-">C-</option>
                    <option value="D+">D+</option>
                    <option value="D">D</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nilai Keterampilan</label>
                <select name="" id="nilai_prak" class="form-control">
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C+">C+ </option>
                    <option value="C">C</option>
                    <option value="C-">C-</option>
                    <option value="D+">D+</option>
                    <option value="D">D</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nilai Sikap</label>
                <select name="" id="nilai_sikap" class="form-control">
                    <option value="SB">SB</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="K">K</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Deskripsi Pengetahuan</label>
                <textarea name="" class="form-control" id="des_peng" cols="30" rows="10" placeholder="Masukan Deskripsi"></textarea>
              </div>
              <div class="form-group">
                <label for="">Deskripsi Keterampilan</label>
                <textarea name="" class="form-control" id="des_prak" cols="30" rows="10" placeholder="Masukan Deskripsi"></textarea>
              </div>
              <div class="form-group">
                <label for="">Deskripsi Sikap Spritual dan Sosial</label>
                <textarea name="" class="form-control" id="des_sikap" cols="30" rows="10" placeholder="Masukan Deskripsi"></textarea>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" id="update_nilai2" class="btn btn-primary">Update</button>
              </div>
        </form>
      </div>
    </div>
</div>