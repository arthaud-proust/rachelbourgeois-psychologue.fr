@extends('layouts.app', ['requirementsJs' => ['app', 'admin.edit'], 'requirementsCss' => ['master', 'admin']])

@section('view')
<main>
    <script>
        const sectionType = `<?=$section->type ?>`;
        const sectionOldContent = `<?=old('content')?old('content'):$section->content ?>`;
    </script>
    <div class="adminLayout col-md-10 col-lg-6">
        <a class="col-11 mb-3" href="{{ route('admin') }}">Retour</a>
        <h4 class="col-11 title">Éditer une section</h4>
        <form id="editForm" class="d-flex flex-column align-items-center" action="{{ route('updateSection', $section->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-11 form-group row">
                <label for="title">Titre de la section</label>
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')?old('title'):$section->title }}" name="title" required autocomplete="off">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-11 form-group row">
                <label>Contenu de la section</label>

                <div class="col-12 p-0" id="contentEdition">
                </div>
                @if( $section->type=="text" )
                    <label class="mt-3" for="image_url">
                        @if( (old('image_url')?old('image_url'):$section->image_url) )
                        Changer l'image (optionnel)
                        @else
                        Ajouter une image (optionnel)
                        @endif
                    </label>
                    <input type="file" class="form-control-file @error('image_url') is-invalid @enderror" name="image_url" id="image_url" accept=".jpeg,.png,.jpg,.gif,.svg,.webp">
                    @error('image_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                @endif
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-11 form-group row">
                <label for="appointement_before">
                    <input id="appointement_before" type="checkbox" class="@error('appointement_before') is-invalid @enderror" @if( (old('appointement_before')?old('appointement_before'):$section->appointement_before)==true)checked @endif name="appointement_before"  autocomplete="off">
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
                    <input id="anchor" type="checkbox" class="@error('anchor') is-invalid @enderror" @if( (old('anchor')?old('anchor'):$section->anchor)==true)checked @endif name="anchor"  autocomplete="off">
                    Afficher un lien vers cette section dans le menu de naviguation
                </label>

                @error('anchor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input type="button" id="submitForm" value="Mettre à jour la section">
        </form>

        <form id="deleteForm" class="d-flex flex-column align-items-center pt-2 pb-5" action="{{ route('destroySection', $section->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="button" id="submitDeleteForm" value="Supprimer la section">
        </form>
    </div>
</main>
@endsection
