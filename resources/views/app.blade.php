<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="56521008259-hafd1sqafv0potaun35q73bgspe8ebu1.apps.googleusercontent.com">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        @if (session('status'))
        <div class="success">
            {{ session('status') }}
        </div>
        @endif
        <h3>Create google event</h3>
        <div class="container">
            <form class="form" action="/create_event" method="post">
                @csrf
                @honeypot
                <div class="form-group">
                    <div class="form-label">
                        <label for="name">Event name</label>
                    </div>

                    <div class="form-control">
                        <input type="text" class="input @error('name') invalid @enderror" id="name" name="name" value="{{ old('name') }}" autocomplete="name">
                        @error('name')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label">
                        <label for="phone">Your phone number</label>
                    </div>

                    <div class="form-control">
                        <input type="text" class="input @error('phone') invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="phone">
                        @error('phone')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label">
                        <label for="email">Your email</label>
                    </div>

                    <div class="form-control">
                        <input type="text" class="input @error('email') invalid @enderror" id="email" name="email" value="{{ old('email') }}" autocomplete="email">
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-container">
                    <div class="form-date">
                        <div class="form-label">
                            <label for="date">Event date</label>
                        </div>

                        <div class="form-control">
                            <input type="date" class="input @error('date') invalid @enderror" id="date" name="date" value="{{ old('date') }}">
                            @error('date')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-time">
                        <div class="form-label">
                            <label for="time">Event time</label>
                        </div>

                        <div class="form-control">
                            <input type="time" class="input @error('time') invalid @enderror" id="time" name="time" value="{{ old('time') }}">
                            @error('time')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="form-button">
                    <button type="submit">Create</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>