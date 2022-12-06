@include('partials.header')

    <header>
        <a href="#">
            <h1>Admin Register</h1>
        </a>
    </header>

    <main class="main-container">
        <section class="section-1">
            <h3>Welcom to Student System</h3>
            <p>Sign in to your account <strong><a href="/login" style="color: #808080">here</a></strong></p>
        </section>

        <section class="section-2">
            <form action="/store" class="form-create" method="POST">
                @csrf
                <div class="form-bg">
                    <div class="form-input">
                        <label class="form-label" for="name">Name</label><br>
                        <input type="text" name="name" placeholder="Enter Full Name*" value="{{old('name')}}">
                    </div>
                    @error('name')
                        <p class="error-message">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="form-bg">
                    <div class="form-input">
                        <label class="form-label" for="email">Email</label><br>
                        <input type="text" name="email" placeholder="your@email.com*" value="{{old('email')}}">
                    </div>
                    @error('email')
                        <p class="error-message">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="form-bg">
                    <div class="form-input">
                        <label class="form-label" for="password">Password</label><br>
                        <input type="password" name="password" placeholder="Password*">
                    </div>
                    @error('password')
                        <p class="error-message">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="form-bg">
                    <div class="form-input">
                        <label class="form-label" for="password_confirmation">Confirm_Password</label><br>
                        <input type="password" name="password_confirmation" placeholder="Password*">
                    </div>
                    @error('password_confirmation')
                        <p class="error-message">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <button>Register</button>
            </form>
        </section>
    </main>

@include('partials.footer')

