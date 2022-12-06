@if (session()->has('message'))

    <div style="margin: 0 auto;" class="alert alert-info alert-dismissible fade show" role="alert" id="myAlert">
        <h4>{{session('message')}}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif