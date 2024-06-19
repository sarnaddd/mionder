@extends('dashboard.patient')

@section('konten')
  <h4>Tracker</h4>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Symptom</th>
                        <th>Doctor</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    @foreach ($keluhan as $tracker)
                    <tr>
                        <td>{{ $tracker->tanggal }}</td>
                        <td>{{ $tracker->keluhan }}</td>
                        <td>{{ $tracker->dokter->name }}</td>
                        <td>
                            @if (!$tracker->response)
                                <b>Dokter belum merespon</b>
                            @endif
                            {{ $tracker->response }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection