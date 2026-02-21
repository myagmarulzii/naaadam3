@extends('layouts.app')

@section('content')
<h2>Оролцогчид</h2>
<a class="tab" href="{{ route('admin.participants.create') }}">+ Оролцогч нэмэх</a>
<table>
<tr><th>#</th><th>Нэр</th><th>Төрөл</th><th>Цол</th><th></th></tr>
@foreach($participants as $participant)
<tr>
<td>{{ $participant->rank }}</td>
<td>{{ $participant->name }}</td>
<td>{{ $participant->sport->name }}</td>
<td>{{ $participant->title }}</td>
<td>
    <a href="{{ route('admin.participants.edit', $participant) }}">Засах</a>
    <form method="post" action="{{ route('admin.participants.destroy', $participant) }}" style="display:inline">
        @csrf @method('DELETE')<button type="submit">Устгах</button>
    </form>
</td>
</tr>
@endforeach
</table>
@endsection
