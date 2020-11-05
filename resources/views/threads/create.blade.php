@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$subsection-> section-> section_name}} > {{$subsection-> subsection_name}}</div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{route('thread.store')}}">
                        @csrf
                        @method('POST')

                        <input type="hidden" id="section_id" class="form-control" name="section_id" value="{{$subsection-> section -> id}}">

                        <input type="hidden" id="subsection_id" class="form-control" name="subsection_id" value="{{$subsection->id}}">
                            

                        <div class="form-group row">
                            <label for="thread_name" class="col-md-2 col-form-label text-md-right">Titre</label>

                            <div class="col-md-8">
                                <input type="text" id="thread_name" class="form-control @error('description') is-invalid @enderror" name="thread_name" required>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="post_content" class="col-md-2 col-form-label text-md-right">Post</label>

                            <div class="col-md-8">
                                <textarea id="post_content" rows="15" class="form-control @error('description') is-invalid @enderror" name="post_content" required></textarea>
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Valider') }}
                                </button>
                                <a href="">Retour</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection