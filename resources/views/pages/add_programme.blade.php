@extends('layouts.app')
@section('main')
    <div class="add-agent">
        <div class="head">
            <div style="display: flex;justify-content: space-between;align-items: center">
                <a href="{{ route('program') }}" style="width: 20%">
                    <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>
                </a>
                <p class="title" style="width: 90%;text-align: right;display: inline-block">new program</p>
            </div>
        </div>
        <form action="">
            <div class="group-form">
                <label for="agent">agent</label>
                <select class="input-form" name="agent" id="agent">
                    <option value="1">Dieudonné Ngwangwa</option>
                    <option value="2">Lubala Luc</option>
                </select>
            </div>
            <div class="group-form">
                <label for="feeder">feeder</label>
                <select class="input-form" name="feeder" id="feeder">
                    <option value="1">Nguba</option>
                    <option value="2">Essence</option>
                </select>
            </div>
            <div class="group-form group-form-btn">
                <button class="btn">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
