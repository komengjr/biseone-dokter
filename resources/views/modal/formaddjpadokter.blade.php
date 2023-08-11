<div class="p-4 border rounded">
    <form action="{{ url('simpandatajpadokter', []) }}" method="post" class="was-validated row g-3" enctype="multipart/form-data">
        @csrf

        <div class="col-md-6">
            <label for="validationTextarea" class="form-label">Label</label>
            <input type="text" class="form-control" id="validationFormCheck1" name="label" required>
            <input type="text" class="form-control" id="validationFormCheck1" name="id" required value="{{$id}}" hidden>
        </div>
        <div class="col-md-6">
            <label for="validationTextarea" class="form-label">JPA</label>
            <select class="form-control single-select" name="jpa" required>
                <option value="">Pilih JPA</option>
                @foreach ($jpa as $item)
                <option value="{{$item->Nat_JpaID}}">{{$item->Nat_JpaName}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="validationTextarea" class="form-label">Kota</label>
            <select class="form-control single-select2" name="kota" onchange="getDataOptionTiket()" id="datakota">
                <option value="">Pilih Kota</option>
                @foreach ($city as $city)
                <option value="{{$city->M_CityID}}">{{ $city->M_CityName}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4" id="tampildistric">

        </div>
        <div class="col-md-4" id="tampilkelurahan">

        </div>

        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <hr>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-times"></i> Simpan
            </button>

        </div>



    </form>
</div>
<script>
    $(document).ready(function() {
        $('.single-select').select2();
        $('.single-select1').select2();
        $('.single-select2').select2();
        $('.multiple-select').select2();
      });
</script>
