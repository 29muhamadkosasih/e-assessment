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
                            name="nama_skema_id" value="{{ old('nama_skema_id') }}" required>
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
                        <input type="text" id="plFirstName" name="no_skkni"
                            class="form-control @error('no_skkni') is-invalid @enderror" placeholder="Masukan No SKKNI"
                            required />
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
                                            <input type="text" id="plFirstName" name="kode"
                                                class="form-control @error('kode') is-invalid @enderror"
                                                placeholder="Masukan Kode" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi"
                                                class="form-control @error('unit_kompetensi') is-invalid @enderror"
                                                placeholder="Masukan Unit Kompetensi" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control @error('element_kompetensi') is-invalid @enderror"
                                            id="editor" name="element_kompetensi" rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control @error('kuk') is-invalid @enderror" id="editor2"
                                            name="kuk" rows="5"></textarea>
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

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode4" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi4"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor9" name="element_kompetensi4"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor10" name="kuk4" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode5" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi5"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor11" name="element_kompetensi5"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor12" name="kuk5" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionSix" aria-expanded="false" aria-controls="accordionSix">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode6" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi6"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor13" name="element_kompetensi6"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor14" name="kuk6" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionSeven" aria-expanded="false"
                                    aria-controls="accordionSeven">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode7" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi7"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor15" name="element_kompetensi7"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor16" name="kuk7" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionEight" aria-expanded="false"
                                    aria-controls="accordionEight">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode8" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi8"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor17" name="element_kompetensi8"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor18" name="kuk8" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionNine" aria-expanded="false" aria-controls="accordionNine">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode9" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi9"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor19" name="element_kompetensi9"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor20" name="kuk9" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionTen" aria-expanded="false" aria-controls="accordionTen">
                                    Kode Unit & Kompetensi </button>
                            </h2>
                            <div id="accordionTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Kode</label>
                                            <input type="text" id="plFirstName" name="kode10" class="form-control"
                                                placeholder="Masukan Kode" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="plFirstName">Unit Kompetensi</label>
                                            <input type="text" id="plFirstName" name="unit_kompetensi10"
                                                class="form-control" placeholder="Masukan Unit Kompetensi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Element Kompetensi</label>
                                        <textarea class="form-control" id="editor7" name="element_kompetensi10"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label class="form-label" for="plFirstName">Kriteria Unjuk Kerja</label>
                                        <textarea class="form-control" id="editor8" name="kuk10" rows="5"></textarea>
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
		} );

        ClassicEditor
		.create( document.querySelector( '#editor4' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
		.create( document.querySelector( '#editor5' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
		.create( document.querySelector( '#editor6' ) )
		.catch( error => {
			console.error( error );
		} );

        ClassicEditor
            .create(document.querySelector('#editor7'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor8'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor9'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor10'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor11'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor12'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor13'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor14'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor15'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor16'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor17'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor18'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor19'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor20'))
            .catch(error => {
                console.error(error);
            });

</script>
@endsection