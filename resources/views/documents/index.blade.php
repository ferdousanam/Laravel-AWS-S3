@extends('layouts.main')

@section('content')
    <div class="row m-1">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">File Name</th>
                    <th scope="col">Download</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $key => $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->file_name }}</td>
                        <td>
                            <a href="{{ route('documents.show', $row->id) }}">Download</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
