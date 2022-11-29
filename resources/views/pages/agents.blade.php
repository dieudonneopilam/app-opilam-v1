@extends('layouts.app')
@section('main')
    <div class="agents">
        <div class="head">
            <a href="{{ route('home.index') }}" style="width: 100%">
                <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
            </a>
            <h2>agents</h2>
            <a href="{{ route('user.create') }}">
                <svg class="add" color="blue" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
            </a>
        </div>
        <div class="content">
            @foreach ($users as $user)
            <div class="div-content">
                <img class="picture" src="{{ Storage::url($user->file) }}" alt="">
                <div class="names">
                    <p class="name-agent">{{ $user->name }}<br> <span style="font-size: 14px">
                    @isset($user->program->feeder->designation)
                    {{ $user->program->feeder->designation }}
                    @else
                    Auncune affectation
                    @endisset
                    </span></p>
                    <div class="div-btn">
                        <a class="delete" href="">
                            Supprimer
                        </a>
                        <a class="edit" href="{{ route('user.edit',[$user->id]) }}">
                            modifier
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
