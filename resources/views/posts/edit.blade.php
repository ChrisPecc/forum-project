@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{$post -> thread-> section -> section_name}} > {{$post -> thread-> subsection -> subsection_name}} > {{ $post -> thread -> thread_name}}
                </div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{route('post.update', $post-> id)}}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group row">
                            <label for="post_content" class="col-md-2 col-form-label text-md-right">Post</label>

                            <div class="col-md-8">
                                <textarea id="post_content" rows="15" class="form-control @error('description') is-invalid @enderror" name="post_content" required>{{$post-> post_content}}</textarea>
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2 text-right">
                                <a class="mx-2" href="{{route('single.thread.show', $post->thread-> id)}}">Retour</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Valider') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection