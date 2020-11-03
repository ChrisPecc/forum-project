@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        <table class="table table-bordered">
            <tr class="thead-light">
                <th scope="col">{{ $section -> section_name }}</th>
            </tr>
            @foreach ($subsections as $subsection)
                <tr>
                    <td><a href="{{route('thread.list.show', $subsection->id)}}">{{ $subsection -> subsection_name }}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection