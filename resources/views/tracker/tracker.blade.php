@extends('dashboard.patient')

@section('konten')
  <h4>Tracker</h4>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
@endsection