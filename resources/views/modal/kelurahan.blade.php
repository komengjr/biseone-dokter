<label for="validationTextarea" class="form-label">Kelurahan</label>
<select class="form-control single-selectkel" name="kelurahan" required>
    <option value="">Pilih Kelurahan</option>
    @foreach ($kelurahan as $kelurahan)
        <option value="{{$kelurahan->M_KelurahanID}}">{{$kelurahan->M_KelurahanName}}</option>
    @endforeach
</select>
<script>
    $(document).ready(function() {
        $('.single-selectkel').select2();
    });
</script>
