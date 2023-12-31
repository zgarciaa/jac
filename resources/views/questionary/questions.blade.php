@extends('layouts.base')

@section('content')
    <div>
        <div>
            <form action="{{ route('questionary.answers') }}" method="post">
                @csrf
                @foreach($questions as $question)
                    <div>
                        <x-question-component
                            :question="$question"
                        ></x-question-component>
                    </div>
                @endforeach
                <button type="submit">Enviar Respuestas</button>
            </form>
        </div>
    </div>
@endsection
