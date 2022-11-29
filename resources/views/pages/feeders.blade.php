@extends('layouts.app')
@section('main')
    <div class="agents">
        <div class="head">
            <div style="width: 100%;display: flex;justify-content: space-between;align-items: center">
                <a href="{{ route('home.index') }}" style="width: 100%">
                    <svg class="retour" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                      </svg>
                </a>
                <a href="{{ route('feeder.create') }}">
                    <svg class="add" xmlns="http://www.w3.org/2000/svg" color="blue" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg>
                </a>
            </div>
            <h2>feeders</h2>

        </div>
        <div class="content">
            @forelse ($feeders as $feeder)
            <div class="div-content">
                <div class="names">
                    <p class="name-agent">feeder {{ $feeder->designation }}</p>
                    <div class="agent-feeder">
                        @isset($feeder->program->id)
                            <img class="f-agent" src="{{ Storage::url($feeder->program->user->file) }}" alt="agent">
                            <p class="name">{{ $feeder->program->user->name }}</p>
                        @else
                            <p class="name">aucune affectation</p>
                        @endisset

                    </div>
                    <div class="div-btn">
                        <a class="edit-f" href="{{ route('feeder.edit',$feeder->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                              </svg>
                        </a>
                        <a class="delete delete-f" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a>
                        <a class="action action-f" href="{{ route('horaire.show',$feeder->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
                <p style="width:100%;display: inline-block;text-align: center">Aucun enregistrement des feeders trouvé</p>
            @endforelse
        </div>
    </div>
@endsection
