@extends('layouts.app')
@section('main')
    <div class="add-agent edit-agent">
        <div class="head">
            <div class="head-edit-agent">
                <a href="{{ route('user.index') }}" style="width: 10%">
                    <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>
                </a>
                <p class="title title-add-agent title-edit-agent">Modifier agent </p>
            </div>
            <p class="p-image-edit"><img class="img-edit" src="{{ Storage::url($user->file) }}" alt=""></p>
        </div>
        <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="group-form">
                <label for="name">name</label>
                <input type="text" class="input-form" id="name" name="name" placeholder="dieudonne ngwangwa" value="{{ $user->name }}">
            </div>
            <div class="group-form">
                <label for="mail">mail</label>
                <input type="text" class="input-form" id="mail" name="mail" placeholder="dieudonneopilam2@gmail.com" value="{{ $user->email }}">
            </div>
            <div class="group-form">
                <label for="phone">phone</label>
                <input type="text" class="input-form" id="phone" name="phone" placeholder="+243 81......" value="{{ $user->phone }}">
            </div>
            <div class="group-form">
                <label for="sexe">sexe</label>
                <select class="input-form" name="sexe" id="sexe" value="{{ $user->sexe }}">
                    <option value="m">masculin</option>
                    <option value="f">feminin</option>
                </select>
            </div>
            <div class="group-form">
                <label for="password">password</label>
                <input type="password" value="{{ $user->password }}" class="input-form" id="password" name="password" placeholder="votre mot de passe">
            </div>
            <div class="group-form">
                <label for="confirm">confirm</label>
                <input type="password" value="{{ $user->password }}" class="input-form" id="confirm" name="confirm" placeholder="confirmer votre mot de passe">
            </div>
            <div class="group-form" style="width: 100%">
                <label for="confirm">confirm</label>
                <input type="file" value="{{ $user->password }}" class="input-form" id="confirm" name="file" placeholder="confirmer votre mot de passe">
            </div>
            <div class="group-form group-form-btn">
                <button class="btn">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
