@extends('dashboard.doctor')

@section('konten')
  <h4>Tracker</h4>
    <div class="card-body">
        <div class="card-header py-3">
            <button type="button" data-toggle="modal" data-target="#tracker" class="btn btn-primary btn-icon-split">
                <span class="text">Add Tracker</span>
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="9">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Doctor</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    @foreach ($trackers as $tracker)
                    <tr>
                        <td>{{ $tracker->Tanggal }}</td>
                        <td>{{ $tracker->nama_dokter }}</td>
                        <td>{{ $tracker->result }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tracker" tabindex="-1" role="dialog" aria-labelledby="KeluhanFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="KeluhanForm">Form Tracker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/trackerdoctor" method="POST">
            @csrf
            @method('POST')
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
                <label for="result" class="col-form-label">result:</label>
                    <textarea class="form-control @error('result') is-invalid @enderror" id="result" name="result"></textarea>
                        @error('result')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
            </div>
            {{-- <div class="form-group">
                <label for="nama_dokter" class="col-form-label">Nama Dokter:</label>
                    <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" id="nama_dokter" name="nama_dokter">
                        @error('nama_dokter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
            </div> --}}

            
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