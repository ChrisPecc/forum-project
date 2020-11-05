@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{$thread-> section -> section_name}} > {{$thread-> subsection -> subsection_name}} > {{ $thread -> thread_name}}
                </div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{route('post.store', $thread-> id)}}">
                        @csrf
                        @method('POST')

                        <input type="hidden" id="thread_id" class="form-control" name="thread_id" value="{{$thread-> id}}">
                        
                        <div class="form-group row">
                            <label for="post_content" class="col-md-2 col-form-label text-md-right">Post</label>

                            <div class="col-md-8">
                                <textarea id="post_content" rows="15" class="form-control @error('description') is-invalid @enderror" name="post_content" required></textarea>
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2 text-right">
                                <a class="mx-2" href="{{route('single.thread.show', $thread-> id)}}">Retour</a>
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