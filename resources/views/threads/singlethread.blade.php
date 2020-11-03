@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
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
                    <td>{{ $post-> post_content }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection