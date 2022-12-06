@include('partials.header', [$title])
<x-messages />
    
<header class="container-fluid">
    <a href="/">
        <h1>
            Edit {{$students->first_name}} {{$students->last_name}}
        </h1>
    </a>
</header>

<main class="main-container">

    <section class="section-2">
        <form action="/student/{{$students->id}}" method="POST" class="form-create">
            @method('PUT')
            @csrf
            <div class="form-bg">
                <div class="form-input">
                    <label class="form-label" for="first_name">First Name</label><br>
                    <input type="text" name="first_name" value="{{$students->first_name}}">
                </div>
                @error('first_name')
                <p class="error-message">
                    {{$message}}
                </p>
            @enderror
            </div>
            <div class="form-bg">
                <div class="form-input">
                    <label class="form-label" for="last_name">Last Name</label><br>
                    <input type="text" name="last_name" value="{{$students->last_name}}">
                </div>
                @error('last_name')
                    <p class="error-message">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="form-bg">
                <div class="form-input">
                    <label class="form-label" for="gender ">Gender</label><br>
                    <select type="text" name="gender" style="width: 100%; ouline: 0; border: 0; background-color: #cdcdcd;">
                        <option {{$students->gender == "" ? 'selected': ''}}>Select Gender</option>
                        <option value="Male" {{$students->gender == "Male" ? 'selected': ''}}>Male</option>
                        <option value="Female" {{$students->gender == "Female" ? 'selected': ''}}>Female</option>
                    </select>
                </div>
                @error('gender')
                    <p class="error-message">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="form-bg">
                <div class="form-input">
                    <label class="form-label" for="age">Age</label><br>
                    <input type="number" name="age" autocomplete="off" value="{{$students->age}}">
                </div>
                @error('age')
                    <p class="error-message">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="form-bg">
                <div class="form-input">
                    <label class="form-label" for="email">Email</label><br>
                    <input type="text" name="email" placeholder="your@email.com" value="{{$students->email}}">
                </div>
                @error('email')
                    <p class="error-message">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <button type="submit">Update</button>
        </form>
        <form action="/student/{{$students->id}}" method="POST">
            @method('delete')
            @csrf

            <button type="submit" class="warning">Delete</button>
        </form>
    </section>
</main>
@include('partials.footer')