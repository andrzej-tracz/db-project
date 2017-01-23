@extends('layouts.base')
@section('content')
    @include('components.sidebar')
    <div class="content-wrapper popular-content">
        <div class="header">
            Zestawienie kategorii filmów dla poszczególnych oddziałów
        </div>
        <div class="">
            @if(isset($ranks) && count($ranks))
                @foreach($ranks as $cinema => $row)
                <div class="">
                    <h3>{{ $cinema }}</h3>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-8">
                                Kategoria
                            </div>
                            <div class="col-xs-2">
                                Ilość sprzedaży
                            </div>
                            <div class="col-xs-2">
                                Udział
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @foreach($row as $rank)
                            <div class="row">
                                <div class="col-xs-8">
                                    <span>{{ $rank->movie_category }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ $rank->count }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ sprintf("%.2f%%", $rank->movie_category_percent) }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection