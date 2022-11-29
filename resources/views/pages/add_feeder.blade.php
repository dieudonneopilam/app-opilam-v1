@extends('layouts.app')
@section('main')
    <div class="add-agent">
        <div class="head head-add-agent" style="display: flex;justify-content: space-between">
            <a href="{{ route('feeder.index') }}" style="width: 20%">
                <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
            </a>
            <p class="title title-add-agent" style="display: inline-block;text-align: right">ajouter un feeder</p>
        </div>
        <form action="{{ route('feeder.store') }}" method="POST">
            @csrf
            <div class="group-form">
                <label for="name">name</label>
                <input type="text" class="input-form" id="name" name="name" placeholder="ex : nguba">
            </div>
            <div class="group-form">
                <label for="ip">ip adresse</label>
                <input type="text" class="input-form" id="ip" name="ip" placeholder="url ip">
            </div>
            <div class="group-form">
                <label for="field">name field</label>
                <input type="text" class="input-form" id="name" name="field" placeholder="ex : field1">
            </div>
            <div class="group-form">
                <label for="api">url api reponse</label>
                <input type="text" class="input-form" id="api" name="api" placeholder="url api">
            </div>
            <div class="group-form group-form-btn">
                <button class="btn">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
