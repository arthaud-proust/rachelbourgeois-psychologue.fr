@extends('layouts.app', ['requirementsJs' => ['app'], 'requirementsCss' => ['master']])

@section('view')
<header>
    <div class="container">
        <h1 class="mx-md-auto col-11 col-md-12 title">Rachel Bourgeois</h1>
        <h2 class="mx-md-auto col-11 col-md-12 subtitle">Psychologue à Bordeaux</h2>
</div>
</header>
<main class="container">

    @foreach($sections as $section)
        @if($section->appointement_before)
            <x-card-appointment/>
        @endif

        @if($section->type=="text" && $section->image_url)
            <section class="section text withImage col-md-6" id="{{$section->title}}">
                <h2 class="col-11 col-md-12 section-title">{{$section->title}}</h2>
                <p class="col-11 col-md-12 section-content withImage">
                    <img class="section-image" src="{{asset('img/'.$section->image_url)}}" alt=" "/>
                    {!!$section->content!!}
                </p>
            </section>
        @else
            <section class="section {{$section->type}} @if($section->type=="list")col-md-6 @else col-md-12 @endif" id="{{$section->title}}">
                <h2 class="col-11 col-md-12 section-title">{{$section->title}}</h2>

                @if($section->type=="text")
                    <p class="col-11 col-md-12 section-content">
                        {!! $section->content !!}
                    </p>
                @elseif($section->type=="cards")
                    <div class="col-md-12 section-content">
                        <div class="card-spacer"></div>
                        @foreach(json_decode($section->content, true) as $card)
                        <div class="card">
                            <h3 class="card-title">{{$card[0]}}</h3>
                            <p class="card-content">{!!$card[1]!!}</p>
                        </div>
                        @endforeach
                        <div class="card-spacer"></div>
                    </div>

                @elseif($section->type=="list")
                    <ul class="col-11 col-md-12 section-content">
                        @foreach(json_decode($section->content, true) as $line)
                        <li class="listLine">
                            <h3 class="listLine-title">{{$line[0]}}</h3>
                            <div class="listLine-content">
                                @foreach($line[1] as $element)
                                    <span class="listLine-element">{{$element}}</span>
                                @endforeach
                            </div>
                        </li>
                        @endforeach
                    </ul>

                @elseif($section->type=="tarifs")
                    <ul class="col-11 col-md-12 section-content">
                        @foreach(json_decode($section->content, true) as $line)
                        <li class="listLine">
                            <h3 class="listLine-name">{!!$line[0]!!}</h3>
                            <span class="listLine-tarif">{{$line[1]}}</span>
                        </li>
                        @endforeach
                    </ul>
                @endif
            </section>
        @endif
    @endforeach
</main>
@endsection
