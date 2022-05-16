@extends('layouts.all', ['title' => $title])

@section('container')
<div class="d-flex justify-content-center" style="padding: 20px;background-color:#60c5fc">
    <div class="d-flex align-items-center">
        <div class="flex-shrink-0">
          <img src="/Image{{ strtolower($title) }}/{{ $datas->name }}.jpeg" class="rounded" alt="{{ $datas->name }} image" width="650" height="400">
        </div>
        <div class="flex-grow-1 ms-3">
            <ul class="list-unstyled">
                <li><h2>{{ $datas->name }}</h2></li>
                @if ($title == 'Pariwisata')
                    <li><p>{{ $datas->desciption }}</p></li>
                    <li><b>{{ $datas->location }}</b></li>
                @elseif ($title == 'Penginapan')
                    <li><p>{{ $datas->description }}</p></li>
                    <li><b>{{ $datas->location }}</b></li>
                @endif
            </ul>
        </div>
    </div>
    {{-- <table style="width: 100%; border-collapse: separate;border-spacing: 15px;">
        <tr>
            @for ($i = 1; $i <= $datas->count(); $i++)
            <td>
                
                <a href="/{{ strtolower($title) }}/{{ $i-1 }}">
                    <img src="/Image{{ strtolower($title) }}/{{ $datas[$i-1]->name }}.jpeg" class="rounded" alt="{{ $datas[$i-1]->name }} image" width="400" height="250">
                </a>
            </td>
                @if ($i%3 == 0 )
                    </tr>
                    <tr>
                @endif
            @endfor
        </tr>
    </table>   --}}
</div>
@endsection