@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
            @foreach ($sections as $section)
                @if (
                    ($section -> section_name === 'Général' )||
                    ($section -> section_name === 'Informatique' )||
                    ($section -> section_name === 'Forum' && Auth::check()) ||
                    ($section -> section_name === 'VIP' && Auth::check() && (Auth::user() -> role -> role === 'VIP' || Auth::user() -> role -> role === 'moderator' || Auth::user() -> role -> role === 'admin')) ||
                    ($section -> section_name === 'Modérateurs' && Auth::check() && (Auth::user() -> role -> role === 'moderator' || Auth::user() -> role -> role === 'admin')) 
                )
                <table class="table table-bordered">
                    <tr class="thead-light">
                        <th scope="col"><a href="{{route('sections.show', $section->id)}}">{{ $section -> section_name }}</a></th>
                    </tr>
                    @foreach ($subsections as $subsection)
                        @if ($subsection -> section_id === $section -> id)
                        <tr>
                            <td><a href="{{route('thread.list.show', $subsection->id)}}">{{ $subsection -> subsection_name }}</a></td>
                        </tr>
                        @endif
                    @endforeach
                </table>
                @endif
            @endforeach
        </div>
</div>
@endsection