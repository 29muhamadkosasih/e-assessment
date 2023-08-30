@extends('layouts.master')
@section('content')
@section('title', 'Dashboard')
<div class="col-12">
    <div class="card mb-3">
        <div class="card-body">
            <form action="#" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-5">
                        <label for="from" class="">Year</label><br>
                        <input type="text" name="from" class="form-control mb-0" placeholder="2023"
                            onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                    </div>
                    <div class="col-md-5">
                        <label for="to" class="">Month</label><br>
                        <input type="text" name="to" class="form-control mb-0" placeholder="09"
                            onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                    </div>
                    <div class="col-md-2 mb-2">
                        <button type="submit" class="btn btn-primary float-end mt-4">Cari Data</button>
                    </div>
                </div>
            </form>
            <div class="row gy-3 mt-3">
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Semua Skema</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Skema AJJ</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah TUK</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assesor</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-3 mt-3">
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessment </h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Assessment Tatap Muka (ATM)</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Asessment Jarak Jauh (AJJ)</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-3 mt-3">
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessi Tatap Muka</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessi TM - Kompeten</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessi TM - BK</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-3 mt-3">
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessi Jarak Jauh</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessi JJ - Kompeten</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                        <div class="card-info">
                            <h6 class="mb-0">Jumlah Assessi JJ - BK</h6>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
