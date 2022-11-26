@extends('layouts.app')
@section('main')
    <div class="menu-main menu-p menu-coupure">
        <div class="title-coupure">
            <a href="{{ route('home') }}" style="width: 100%">
                <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
            </a>
            <h2 class="title">Nguba</h2>
        </div>
        <div class="content">
            <div class="m-p m-coupure">
                <div class="content-program heure title-etat">
                    <p style="font-size: 20px">Etat Actuel du feeder</p>
                </div>
                <div class="lampe lame-temoin">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" color="orange" width="50" height="50" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
                      </svg> --}}
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-lightbulb-off-fill" viewBox="0 0 16 16">
                        <path d="M2 6c0-.572.08-1.125.23-1.65l8.558 8.559A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm10.303 4.181L3.818 1.697a6 6 0 0 1 8.484 8.484zM5 14.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5zM2.354 1.646a.5.5 0 1 0-.708.708l12 12a.5.5 0 0 0 .708-.708l-12-12z"/>
                      </svg>
                </div>
                <div class="action action-h action-coupure">
                    <a href="" class="btn-coupure">ON</a>
                </div>
            </div>
        </div>
    </div>
@endsection
