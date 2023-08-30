@extends('layouts/master')

@section('title', 'Kompetensi')

@section('content')
<!-- Invoice table -->
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Kompetensi</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('kompetensi.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="plFirstName">Nama Skema</label>
                        <select class="form-select @error('nama_skema_id') is-invalid @enderror" id="selectDefault"
                            name="nama_skema_id" value="{{ old('nama_skema_id') }}">
                            <option selected>Open this select</option>
                            @foreach ($nama_skema as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->nama_skema }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="plFirstName">No SKKNI</label>
                        <input type="text" id="plFirstName" name="no_skkni" class="form-control"
                            placeholder="Masukan No SKKNI" />
                    </div>
                </div>
                <div class="col-md mb-4 mb-md-2">
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    Kode Unit & Kompetensi
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor" name="element_kompetensi"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor2" name="kuk" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode2" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi2"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor3" name="element_kompetensi2"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor4" name="kuk2" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree" aria-expanded="false"
                                    aria-controls="accordionThree">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode3" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi3"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor5" name="element_kompetensi3"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor6" name="kuk3" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary float-end ms-2">Submit</button>
                    <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary float-end ">Back</a>
            </form>
        </div>
    </div>
</div>
<!-- /Invoice table -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );    
        
        ClassicEditor
		.create( document.querySelector( '#editor2' ) )
		.catch( error => {
			console.error( error );
		} );        
        ClassicEditor
		.create( document.querySelector( '#editor3' ) )
		.catch( error => {
			console.error( error );
		} );        ClassicEditor
		.create( document.querySelector( '#editor4' ) )
		.catch( error => {
			console.error( error );
		} );        ClassicEditor
		.create( document.querySelector( '#editor5' ) )
		.catch( error => {
			console.error( error );
		} );        ClassicEditor
		.create( document.querySelector( '#editor6' ) )
		.catch( error => {
			console.error( error );
		} );
</script>
@endsection