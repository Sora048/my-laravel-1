@include('partials.header')
    <?php $array = array('title' => 'Student System'); ?>
    <x-nav :data="$array"/>
    <x-messages />

    <header class="container-fluid">
        <a href="#">
            <h1>Student List</h1>
        </a>
    </header>

    <section class="table-section">
        <table class="table">
            <thead class="table-light">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="table-dark">{{$student->first_name}}</td>
                        <td class="table-dark">{{$student->last_name}}</td>
                        <td class="table-dark">{{$student->email}}</td>
                        <td class="table-dark">{{$student->age}}</td>
                        <td class="table-dark"><a href="/student/{{$student->id}}" class="view_list" style="background-color: #1a8efb; border-radius: 4px; padding: .5em 1em; color: #ffffff;">view</a></td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
        <div class="paginate">
            {{$students->links()}}
        </div>
    </section>

@include('partials.footer')