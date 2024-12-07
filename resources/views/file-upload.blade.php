@extends('app')

@section('contents')

    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="mt-4">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">  {{ $error }} </div>
                        @endforeach
                    @endif
                </div>

                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">File</label>
                                <input type="file" class="form-control" id="" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <table class="mt-3">
                            <tbody>
                                @foreach ($files as $file)
                                    <td><img style="width:200px" src="/storage/{{ $file->file_path }}" alt=""</td>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <table class="mt-3">
                            <tbody>
                                {{-- @foreach ($files as $file) --}}
                                    <td>
                                        <a href="{{ route('file.download') }}">Download File</a>
                                    </td>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection