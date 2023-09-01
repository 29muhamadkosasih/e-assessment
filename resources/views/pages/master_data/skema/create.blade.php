<form action="{{ route('skema.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Skema</label>
        <input type="text" class="form-control @error('nama_skema') is-invalid @enderror"
            placeholder="Masukan Nama Skema" name="nama_skema" value="{{ old('nama_skema') }}" />
        @error('nama_skema')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">No. Skema</label>
        <input type="text" class="form-control @error('no') is-invalid @enderror" placeholder="Masukan No Skema"
            name="no" value="{{ old('no') }}" />
        @error('no')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
</form>
