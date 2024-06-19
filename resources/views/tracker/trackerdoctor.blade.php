@extends('dashboard.doctor')

@section('konten')
  <h4>Patient</h4>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="9">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Result</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    @foreach ($keluhan as $tracker)
                    <tr>
                        <td>{{ $tracker->tanggal }}</td>
                        <td>{{ $tracker->user->name }}</td>
                        <td>{{ $tracker->keluhan }}</td>
                        <td>
                            @if (!$tracker->response)
                                <b>Anda belum merespon</b>
                            @endif
                            {{ $tracker->response }}
                        </td>
                        <td>
                            <button type="button" class="btn  {{ !$tracker->response ? 'btn-warning' : 'btn-success' }}" data-toggle="modal" data-target="#response{{ $tracker->id }}" form="response{{ $tracker->id }}">
                                <span class="text">{{ !$tracker->response ? 'Respond' : 'Edit' }}</span>
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="response{{ $tracker->id }}" tabindex="-1" role="dialog" aria-labelledby="response{{ $tracker->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="KeluhanForm">Form Tracker</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{ route('response.dokter', $tracker->id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="tanggal" class="col-form-label">tanggal:</label>
                                            <input disabled type="date" value="{{ $tracker->tanggal }}" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal">
                                                @error('tanggal')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Name:</label>
                                            <input disabled type="text" value="{{ $tracker->user->name }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keluhan" class="col-form-label">Keluhan:</label>
                                            <input disabled type="text" value="{{ $tracker->keluhan }}" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan">
                                                @error('keluhan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="response" class="col-form-label">result:</label>
                                            <input value="{{ $tracker->response }}" name="response" class="form-control @error('response') is-invalid @enderror" id="response" name="response" />
                                                @error('response')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection