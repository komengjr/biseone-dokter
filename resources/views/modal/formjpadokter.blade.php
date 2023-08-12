


{{-- <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css', []) }}" rel="stylesheet" /> --}}
{{-- <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css', []) }}" rel="stylesheet" /> --}}
<link href="{{ url('assets/plugins/select2/css/select2.min.css', []) }}" rel="stylesheet"/>
<div class="card">
    <div class="card-body">
        <div class="p-4 border rounded">
            <form action="{{ url('updatedatadokter', []) }}" method="post" class="was-validated row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-2">
                    <label for="validationTextarea" class="form-label">Kode Dokter</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="kd_dokter" value="{{$data->M_DoctorCode}}" required>
                    <input type="text" class="form-control" id="validationFormCheck1" name="id" value="{{$data->M_DoctorID}}" hidden>
                </div>
                <div class="col-md-1">
                    <label for="validationTextarea" class="form-label">Awalan 1</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="awal1" value="{{$data->M_DoctorPrefix}}">
                </div>
                <div class="col-md-1">
                    <label for="validationTextarea" class="form-label">Awalan 2</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="awal2" value="{{$data->M_DoctorPrefix2}}">
                </div>
                <div class="col-md-4">
                    <label for="validationTextarea" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="nama_dokter" required value="{{$data->M_DoctorName}}">
                </div>
                <div class="col-md-2">
                    <label for="validationTextarea" class="form-label">Akhiran</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="akhir1" value="{{$data->M_DoctorSufix}}">
                </div>
                <div class="col-md-2">
                    <label for="validationTextarea" class="form-label">Akhiran</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="akhir2" value="{{$data->M_DoctorSufix2}}">
                </div>

                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="kd_dokter" value="{{$data->M_DoctorM_SexID}}" required>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="kd_dokter" value="{{$data->M_DoctorM_ReligionID}}" required>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="validationFormCheck1" name="tgl_lahir" value="{{$data->M_DoctorDOB}}" required >
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Specialis</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="kd_dokter" value="{{$data->M_DoctorM_SpecialistID}}" required>
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Telepon</label>
                    <input type="text" class="form-control" name="telpon" id="validationFormCheck1" value="{{$data->M_DoctorPhone}}">
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Handphone</label>
                    <input type="text" class="form-control" name="hp" id="validationFormCheck1" value="{{$data->M_DoctorHP}}">
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="validationFormCheck1" value="{{$data->M_DoctorEmail}}">
                </div>
                <div class="col-md-3">
                    <label for="validationTextarea" class="form-label">Marketing Dokter</label>
                    <select name="staff" id="" class="form-control single-select2" >
                        @php
                            $staff1 = DB::table('m_staff')->where('M_StaffNIK',$data->M_DoctorM_StaffNIK)->first();
                        @endphp
                        @if ($staff1)
                        <option value="{{ $data->M_DoctorM_StaffNIK}}">{{ $staff1->M_StaffName }}</option>
                        @endif
                        <option value="">Pilih Staff</option>
                        @foreach ($staff as $item)
                            <option value="{{ $item->M_StaffNIK }}">{{ $item->M_StaffName }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Catatan</label>
                    <input type="text" class="form-control" id="validationFormCheck1" name="catatan"  value="{{$data->M_DoctorNote}}">
                </div>
                {{-- <hr> --}}
                <div class="col-md-12 pt-4">
                <button type="submit" class="btn btn-info" >
                    <i class="fa fa-times"></i> Update
                </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="buttonaddjpa" data-id="{{$data->M_DoctorID}}">
            <i class="fa fa-times"></i> Tambah JPA
        </button>

    </div>
    <div class="card-body" id="showformjpa">
        <div class="p-4 border rounded">
            <table class="table">
                <thead>
                    <tr>
                        <td>Label</td>
                        <td>Alamat</td>
                        <td>JPA</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jpa as $datajpa)
                        <tr>
                            <td>{{$datajpa->M_DoctorAddressNote}}</td>
                            <td>{{$datajpa->M_DoctorAddressDescription}}</td>
                            <td>{{$datajpa->Nat_JpaName}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

      });
</script>
