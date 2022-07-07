@extends('layouts.sidebar')
@section('content')


    <form action="/agenda/{{ Auth::user()->id }}" method="POST">
        <div class="buttonContainer"
            style="display:flex; justify-content:space-evenly;height:3vw;width:60vw; margin-left:18vw;font-family: 'Montserrat';">

            @csrf
            <div class="form-group" style="">
                <input
                    style="width: 5vw;margin-top: 0.1vw;height:3vw;border-radius:1vw;border:solid 0.1vw;text-align:center"
                    type="text" class="form-control" name="time" placeholder="07.00" required>
            </div>

            <div class="form-group">
                <input style="width: 30vw;margin-top: 0.1vw;height:3vw;border-radius:1vw;border:solid 0.1vw;" type="text"
                    class="form-control" name="agenda" placeholder="Cook Breakfast" required>
            </div>

            <button type="submit"
                style="width: 10vw;background-color:#f59e0b;height:3vw;border-radius:1vw;border:none;color:white">Add
                Agenda</button></a>

        </div>
    </form>



    <div class="Container" style="margin-top:2vw;height:45vw;display: flex;justify-content:center;">

        <div class="rightContainer" style="width:60vw;
                            height:40vw;
                            border: 1vw solid rgba(200,160,160,255); 
                            border-radius:0.7vw;
                            display:flex;
                            flex-direction:column;
                            color:#708090;
                            box-shadow: 0.5vw 0.5vw 1vw 0.8vw #C0C0C0;
                            font-family: 'Montserrat';">

            <h1 style="margin-left: 2vw">Today's Agenda</h1>


            <div class="agenda_container" style="margin-left: 4vw;margin-top:1vw">
                <table style="font-size:1.3vw ">
                    @forelse ($agenda_details as $item)

                        <tr>
                            <td>                            
                                @php
                                    $time = $item->time;
                                    echo number_format((float)$time, 2, '.', '');
                                @endphp
                            </td>
                            <td style="padding-left: 3vw">{{ $item->agenda }}</td>
                            <td>
                                <form action="/delete/{{ $item->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <div style="padding-left: 14vw; padding-right: 1vw">
                                        <button type="submit"
                                            style="width: 8.5vw;background-color:#22c55e;height:3vw;border-radius:1vw;border:none;color:white">Complete</button>
                                    </div>
                                </form>

                            </td>
                            <td>
                                <a href="/editAgendaForm/{{$item->id}}"><button style="width: 8.5vw;background-color:#0ea5e9;height:3vw;border-radius:1vw;border:none;color:white">Edit</button></a>
                            </td>
                        </tr>

                    @empty
                        
                        No Agendas For Today.
                        <img src="/storage/calendar.png" alt="" width="88%">

                    @endforelse
                </table>
            </div>

        </div>


    </div>

@endsection
