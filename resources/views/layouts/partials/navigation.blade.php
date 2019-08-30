<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/') }}">
                <span class="badge badge-danger badge-pill" style="font-size: 20px">SIMPOSIS</span> | {{ strtoupper(School::get('school_name')) }}
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                @include('layouts.partials.top-nav-right')
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            @include('layouts.partials.primary-menu')
        </div>
    </div>
</div>
