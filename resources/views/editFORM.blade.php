@extends('layouts.sidebar')
@section('content')

<form action="/edit/{{$user->id}}" style="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="Container" style="margin-top:2vw;height:45vw;display: flex;justify-content:space-evenly;">

        <div class="rightContainer" style=
                            "width:55vw;
                            height:35vw;
                            border: 1vw solid #FFFFFF; 
                            border-radius:0.7vw;
                            display:flex;
                            flex-direction:column;
                            color:#708090;
                            justify-content:space-evenly;
                            box-shadow: 0.5vw 0.5vw 1vw 0.8vw #C0C0C0;">

            <div class="form-group">
                <label style="font-size: 3vw;font-family: 'Montserrat';">Profile Name</label> <br>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name}}" style="font-family: 'Montserrat';width: 50vw;height:3.5vw;font-size:1.5vw;border-radius:1.5vw;border: solid #9ca3af;color:#4b5563">
                <br>
                @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="form-group">
                <label style="font-family: 'Montserrat';font-size: 3vw">Email address</label> <br>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email}}" style="font-family: 'Montserrat', serif;width: 50vw;height:3.5vw;font-size:1.5vw;border-radius:1.5vw;border: solid #9ca3af; color: #4b5563">
                <br>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group">
                <label style="font-family: 'Montserrat';font-size: 3vw">Password</label> <br>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" style="font-family: 'Montserrat';width: 50vw;height:3.5vw;font-size:1.5vw;border-radius:1.5vw;border: solid #9ca3af;color: #4b5563">
                <br>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="buttonContainer" style="display: flex; margin-left:33vw">
                <a href="/home" style="margin-right: 2vw;"><button type="button" style="width: 5vw;background-color:#4b5563;height:3vw;border-radius:1vw;border:none;color:white">Cancel</button></a>
                <button type="submit" style="width: 10vw;background-color:#22c55e;height:3vw;border-radius:1vw;border:none;color:white">Save Changes</button>
            </div>

        </div>
        
        <div class="leftContainer" style="display:flex;flex-direction:column;align-items:center;margin-top:2vw">

            <div class="portrait" style="width: 15vw;height:15vw;"> <img src="../storage/{{$image}}" alt=""> </div>
            
            <label class="btn btn-default btn-file" style="color:blue">
                Change Your Profile Picture <input type="file" class="form-control @error('images') is-invalid @enderror" style="display: none" name="images">
            </label>

            @error('images')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

</div>
</form>





@endsection