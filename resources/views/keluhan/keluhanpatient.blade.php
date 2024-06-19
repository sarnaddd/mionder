@extends('dashboard.patient')

@section('konten')
  <h4>Symptom</h4>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
            <button type="button" data-toggle="modal" data-target="#KeluhanForm" class="btn btn-primary btn-icon-split">
                <span class="text">Add Symptom</span>
            </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Symptom</th>
                        <th>Doctor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluhan as $data)
                    <tr>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->keluhan }}</td>
                        <td>{{ $data->dokter->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="KeluhanForm" tabindex="-1" role="dialog" aria-labelledby="KeluhanFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="KeluhanForm">Form Keluhan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('keluhan.add' )}}" method="POST">
        @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="Tanggal" class="col-form-label">Tanggal:</label>
                        <input type="date" class="form-control @error('Tanggal') is-invalid @enderror" id="Tanggal" name="Tanggal">
                            @error('Tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                </div>
                <div class="form-group">
                    <label for="keluhan" class="col-form-label">Keluhan:</label>
                        <textarea class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan"></textarea>
                            @error('keluhan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                </div>
                <div class="form-group">
                    <label for="dokter_id" class="col-form-label">Nama Dokter:</label>
                        {{-- <input type="text" class="form-control @error('Nama_Dokter') is-invalid @enderror" id="Nama_Dokter" name="Nama_Dokter"> --}}
                        <select class="form-control" name="dokter_id" id="dokter_id">
                            <option value="" selected disabled>Pilih Dokter</option>
                            @foreach ($dokter as $item) 
                                <option value="{{ $item->id }}">{{ $item->name }}</option> 
                            @endforeach
                        </select>
                            @error('Nama_Dokter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection