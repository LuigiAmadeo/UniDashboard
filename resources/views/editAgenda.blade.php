@extends('layouts.sidebar')

@section('content')
<style>

    .box{
        color: #708090;
        font-family: 'Montserrat';
        width: 55vw;
        height: 35vw;
        display: flex;
        justify-content: center;
        border: 1vw solid rgba(200,160,160,255); 
        border-radius:0.7vw;
        margin-left: 15vw;
        padding-top: 5vw;
        box-shadow: 0.5vw 0.5vw 1vw 0.8vw #C0C0C0;

    }
    
    .form-group{
        margin: 2vw 0 2vw 0;
    }
    
    input{
        font-size:1.5vw;
        border-radius:1.5vw;
        border: solid #9ca3af;
        color:#4b5563"
    }
    
    a{
        margin-right: 2vw;
    }
    
    button{
        cursor: pointer;
    }
    .cancel{
        width: 5vw;
        background-color:#4b5563;
        height:3vw;
        border-radius:1vw;
        border:none;
        color:white;
        margin-left: 11.5vw
    }
    .update{
        width: 8.5vw;
        background-color:#0ea5e9;
        height:3vw;
        border-radius:1vw;
        border:none;
        color:white;
        margin-left: -1.5vw;
    }
    .form-control{
        padding-top: 0.3vw;
        padding-bottom: 0.3vw;
        padding-left: 0.7vw;
    }
    hr {
    border: none;
    height: 1px;
    background-color:#d4d4d8;
    width: 40vw;
    
    }
    </style>
    
    <div class="box">
    
        <form action="/editAgenda/{{$detail->id}}" method="POST">
            @csrf
            <h1 style="font-size: 60px; margin-top: -2.5vw; margin-bottom: -0.9vw; margin-left: 5.7vw">Update Agenda</h1>
            <div>
                <hr>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="time" style="color:#71717a; margin-left: 8.7vw" value="{{ old('time') ?? $detail->time}}">
            </div>
    
            <div class="form-group">
                <input type="text" class="form-control" name="agenda" style="color:#71717a; margin-left: 8.7vw" value="{{ old('agenda') ?? $detail->agenda}}">
            </div>
            <a href="/agenda/{{Auth::user()->id}}"><button type="button" class="cancel">Cancel</button></a>
            <button class="update" type="submit">Update</button></a>
        </form>
    
    </div>
@endsection

