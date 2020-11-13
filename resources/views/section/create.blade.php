@extends('layouts.app', ['requirementsJs' => ['app', 'admin.create'], 'requirementsCss' => ['master', 'admin']])

@section('view')
<main>
    <div class="adminLayout col-md-10 col-lg-6">
        <a class="col-11 mb-3" href="{{ route('admin') }}">Retour</a>
        <h4 class="col-11 title">Créer une section</h4>
        <form id="createForm" class="d-flex flex-column align-items-center pb-5" action="{{ route('storeSection') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="col-11 form-group row">
                <label for="type">Type de section</label>
                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" autocomplete="off">
                    <option value="text" selected>Texte (présentation...)</option>
                    <option value="cards">Cartes (ateliers, consults...)</option>
                    <option value="list">Liste (horaires, contact...)</option>
                    <option value="tarifs">Tarifs</option>
                </select>

                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-11 form-group row">
                <label for="title">Titre de la section</label>
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" required autocomplete="off">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-11 form-group row">
                <label>Contenu de la section</label>
                <div class="col-12 p-0" id="contentEdition">
                    <textarea rows=4 id="content" class="form-control" name="content" required autocomplete="off"></textarea>
                    <label class="mt-3" for="image_url">Ajouter une image (optionnel)</label>
                    <input type="file" class="form-control-file @error('image_url') is-invalid @enderror" name="image_url" id="image_url" accept=".jpeg,.png,.jpg,.gif,.svg,.webp">
                    @error('image_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="col-11 form-group row">
                <label for="appointement_before">
                    <input id="appointement_before" type="checkbox" class="@error('appointement_before') is-invalid @enderror" @if(old('appointement_before')==true)checked @endif name="appointement_before"  autocomplete="off">
                    Afficher une section «Prendre rendez-vous» au dessus
                </label>

                @error('appointement_before')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-11 form-group row">
                <label for="anchor">
                    <input id="anchor" type="checkbox" class="@error('anchor') is-invalid @enderror" @if(old('anchor')==true)checked @endif name="anchor"  autocomplete="off">
                    Afficher un lien vers cette section dans le menu de naviguation
                </label>

                @error('anchor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <input type="button" id="submitForm" value="Créer la section">
        </form>
    </div>
</main>
@endsection
