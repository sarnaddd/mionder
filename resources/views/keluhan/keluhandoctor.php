@extends('dashboard.doctor')

@section('konten')
<h4>Symptom</h4>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Patient</th>
                        <th>Symptom</th>
                        <th>Doctor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluhan as $data)
                    <tr>
                        <td>{{ $data->Tanggal }}</td>
                        <td>{{ $data->Nama_Pasien }}</td>
                        <td>{{ $data->Keluhan }}</td>
                        <td>{{ $data->Nama_Dokter }}</td>
                        <td>
                            <form action="{{ route('keluhan.delete', $data->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white">
                                        <i class="fa-solid fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection