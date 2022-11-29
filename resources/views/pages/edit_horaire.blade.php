@extends('layouts.app')
@section('main')
    <div class="add-agent">
        <div class="head" style="display: flex;justify-content: space-between;align-items: center">
            <a href="{{ route('horaire.show',$horaire->feeder_id) }}" style="width: 10%">
                <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
            </a>
            <p class="title">mofier cet horaire</p>
        </div>
        <form action="{{ route('horaire.update',$horaire->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="group-form">
                <label for="heureD">heure Debut</label>
                <input type="time" class="input-form" id="heureD" name="heureD" placeholder="ex : nguba" value="{{ $horaire->HeureDebut }}">
            </div>
            <div class="group-form">
                <label for="heureF">heure fin</label>
                <input type="time" class="input-form" id="heureF" name="heureF" placeholder="ex : 192.168.0..." value="{{ $horaire->HeureFin }}">
            </div>
            <div class="group-form">
                <label for="type">type</label>
                <select class="input-form" name="type" id="type">
                    <option value="0">coupure</option>
                    <option value="1">retablissement</option>
                </select>
            </div>
            <div class="group-form group-form-btn">
                <button class="btn">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
