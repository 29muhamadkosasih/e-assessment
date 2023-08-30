<form action="{{ route('skema.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Skema</label>
        <input type="text" class="form-control @error('nama_skema') is-invalid @enderror" placeholder="John Doe"
            name="nama_skema" value="{{ $edit->nama_skema }}" />
        @error('nama_skema')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
    <a href="{{ route('skema.index') }}" class="btn btn-secondary float-end ">Back</a>
</form>