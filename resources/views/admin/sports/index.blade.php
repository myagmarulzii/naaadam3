@extends('layouts.app')

@section('content')
<h2>Спорт төрлүүд</h2>
<a class="tab" href="{{ route('admin.sports.create') }}">+ Төрөл нэмэх</a>
<table>
<tr><th>Нэр</th><th>Slug</th><th></th></tr>
@foreach($sports as $sport)
<tr>
<td>{{ $sport->name }}</td>
<td>{{ $sport->slug }}</td>
<td>
    <a href="{{ route('admin.sports.edit', $sport) }}">Засах</a>
    <form method="post" action="{{ route('admin.sports.destroy', $sport) }}" style="display:inline">@csrf @method('DELETE') <button type="submit">Устгах</button></form>
</td>
</tr>
@endforeach
</table>
@endsection
