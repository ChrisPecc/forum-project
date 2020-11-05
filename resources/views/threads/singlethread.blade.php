@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card-body">

        <!-- <div>
            <button class="btn btn-primary float-right my-2" type="submit">Répondre</button>
        </div> -->

        <table class="table table-bordered">
            <tr>
                <th scope="colgroup" colspan="2">{{ $thread-> thread_name }}</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post-> user ->name }}
                        {{ $post-> created_at}}
                    </td>
                    <td >
                        <div class="d-flex flex-column">
                            <div>
                                <button class="btn btn-primary btn-sm float-right" type="submit">Editer</button>
                            </div>
                            <div class="p-1">
                                {{ $post-> post_content }}
                            </div>
                        </div> 
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="{{route('post.create', $thread -> id)}}" method="get">
            @csrf
            @method('GET')
            
            <button class="btn btn-primary float-right my-2" type="submit">Répondre</button>
        </form>
        
    </div>
</div>
@endsection