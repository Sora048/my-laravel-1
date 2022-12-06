@include('partials.header')

<x-messages />

    <header>
        <a href="#">
            <h1>Admin Login</h1>
        </a>
    </header>

    <main class="main-container">
        <section class="section-1">
            <h3>Welcom to Student System</h3>
            <p>Sign up to your account <strong><a href="/register" style="color: #808080">here</a></strong></p>
        </section>

        <section class="section-2">
            <form action="/login/process" class="form-create" method="POST">
                @csrf
                <div class="form-bg">
                    <div class="form-input">
                        <label class="form-label" for="email">Email</label><br>
                        <input type="text" name="email" placeholder="your@email.com">
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
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    @error('password')
                        <p class="error-message">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <button type="submit">Login</button>
            </form>
        </section>
    </main>

@include('partials.footer')

