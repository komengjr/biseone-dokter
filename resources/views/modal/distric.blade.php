<label for="validationTextarea" class="form-label">Kota</label>
<select class="form-control single-selectdis" name="kota" onchange="getDataOptiondistrik()" id="datadistric" required>
    <option value="">Pilih Kecamatan dulu</option>
    @foreach ($distric as $item)
    <option value="{{$item->M_DistrictID}}">{{$item->M_DistrictName}}</option>
    @endforeach
</select>
<script>
    $(document).ready(function() {
        $('.single-selectdis').select2();
      });

</script>
