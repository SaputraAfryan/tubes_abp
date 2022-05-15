@extends('layouts.main', ['title' => $title[0]])

@section('pariwisata')
    <div class="container-category" style="padding:20px;background-color: #60c5fc">
        <table style="width: 100%">
            <tr>
                <td align="left">
                    <div style="color: #330066">
                        <div class="d-flex justify-content-between">
                            <h2>Rekomendasi Pariwisata</h2>
                            <a href="/pariwisata" class="btn btn-warning">See More</a>
                        </div>
                        <div class="d-flex justify-content-center" style="padding: 20px;background-color:#60c5fc">
                            <ul class="list-inline-block">
                                <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 1</li>
                                <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 2</li>
                                <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 3</li>
                            </ul>   
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection

@section('penginapan')
<div class="container-category" style="padding:20px;background-color: #60c5fc">
    <table style="width: 100%">
        <tr>
            <td align="left">
                <div style="color: #330066">
                    <div class="d-flex justify-content-between">
                        <h2>Rekomendasi Penginapan</h2>
                        <a href="/penginapan" class="btn btn-warning">See More</a>
                    </div>
                    <div class="d-flex justify-content-center" style="padding: 20px;background-color:#60c5fc">
                        <ul class="list-inline-block">
                            <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 1</li>
                            <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 2</li>
                            <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 3</li>
                        </ul>   
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
@endsection

@section('nearest')
<div class="container-category" style="padding:20px;background-color: #60c5fc">
    <table style="width: 100%">
        <tr>
            <td align="left">
                <div style="color: #330066">
                    <div class="d-flex justify-content-between">
                        <h2>Pariwisata Terdekat</h2>
                        <a href="/nearest" class="btn btn-warning">See More</a>
                    </div>
                    <div class="d-flex justify-content-center" style="padding: 20px;background-color:#60c5fc">
                        <ul class="list-inline-block">
                            <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 1</li>
                            <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 2</li>
                            <li class="list-inline-item" style="width: 150px;height:150px; background-color: bisque">Foto 3</li>
                        </ul>   
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
@endsection