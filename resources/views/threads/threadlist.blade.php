@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
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