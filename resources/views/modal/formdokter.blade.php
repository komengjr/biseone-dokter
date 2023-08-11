


{{-- <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css', []) }}" rel="stylesheet" /> --}}
{{-- <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css', []) }}" rel="stylesheet" /> --}}
<link href="{{ url('assets/plugins/select2/css/select2.min.css', []) }}" rel="stylesheet"/>
<div class="card">
    <div class="card-body">
        <div class="p-4 border rounded">
            <form action="{{ url('simpandatadokter', []) }}" method="post" class="was-validated row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-2">
                    <label for="validationTextarea" class="form-label">Kode Dokter</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="kd_dokter" required>
                </div>
                <div class="col-md-1">
                    <label for="validationTextarea" class="form-label">Awalan 1</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="awal1">
                </div>
                <div class="col-md-1">
                    <label for="validationTextarea" class="form-label">Awalan 2</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="awal2">
                </div>
                <div class="col-md-4">
                    <label for="validationTextarea" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="nama_dokter" required>
                </div>
                <div class="col-md-2">
                    <label for="validationTextarea" class="form-label">Akhiran</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="akhir1">
                </div>
                <div class="col-md-2">
                    <label for="validationTextarea" class="form-label">Akhiran</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="akhir2">
                </div>

                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Jenis Kelamin</label>
                    <select class="form-control single-select" name="jk">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="1">Laki Laki</option>
                        <option value="2">Perempuan</option>
                        <option value="3">Gay</option>

                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Agama</label>
                    <select name="" id="" class="form-control" required name="agama">
                        <option value="">Pilih Agama yaa</option>
                        <option value="1">Islam</option>
                        <option value="2">Katolik</option>
                        <option value="3">Budha</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="validationFormCheck1" name="tgl_lahir" required>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Specialis</label>
                    <select name="spesialis" id="" class="form-select single-select1" name="spesialis" required>
                        <option value="">Pilih Spesiali</option>
                        @foreach ($spesialis as $spesialis)
                            <option value="{{ $spesialis->M_SpecialistID }}">{{ $spesialis->M_SpecialistName }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Telepon</label>
                    <input type="text" class="form-control" name="telpon" id="validationFormCheck1">
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Handphone</label>
                    <input type="text" class="form-control" name="hp" id="validationFormCheck1">
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="validationFormCheck1">
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Marketing Dokter</label>
                    <select name="staff" id="" class="form-control single-select2" >
                        <option value="">Pilih Staff</option>
                        @foreach ($staff as $item)
                            <option value="{{ $item->M_StaffNIK }}">{{ $item->M_StaffName }}</option>
                        @endforeach

                    </select>
                </div>


                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Catatan</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="catatan">
                </div>
                <hr>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-times"></i> Simpan
                    </button>

                </div>



            </form>
        </div>
    </div>
</div>
<script src="{{ url('assets/plugins/select2/js/select2.min.js', []) }}"></script>
<script src="{{ url('assets/plugins/select2/js/select2.min.js', []) }}"></script>
<script>
    $(document).ready(function() {
        $('.single-select').select2();
        $('.single-select1').select2();
        $('.single-select2').select2();

        $('.multiple-select').select2();

    //multiselect start



      });

</script>
