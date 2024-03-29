@include('admin.layouts.header')
@include('admin.layouts.navbar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">@yield('title')</li>
        </ol>
    </section>
    <!-- Main content -->

    <section class="content">
        @include('admin.layouts.message')
        @yield('content')
    </section>
</div>

@include('admin.layouts.footer')