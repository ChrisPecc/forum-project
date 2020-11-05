@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        <form action="{{ route('thread.create', $subsection -> id)}}" method="post">
            @csrf
            @method('GET')
            <button class="btn btn-primary" type="submit">Nouveau Sujet</button>
        </form>

        <table class="table table-bordered">
            <tr class="thead-light">
                <th scope="colgroup" colspan="2">{{ $subsection -> subsection_name }}</th>
            </tr>
            @foreach ($threads as $thread)
                <tr>
                    <td><a href="{{route('single.thread.show', $thread->id)}}">{{ $thread -> thread_name }}</a></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection