@extends('app')

@section('title')
    {{ 'CKEditor' }}
@endsection

@section('content')
    <section>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('create-ckeditor') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="editor" class="form-label">Example CKEditor</label>
                                <textarea class="form-control" id="editor" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                @foreach ($data as $d)
                <p>{!! $d->description !!}</p>
                <hr>
                @endforeach
            </div>
        </div>
    </section>
@endsection
