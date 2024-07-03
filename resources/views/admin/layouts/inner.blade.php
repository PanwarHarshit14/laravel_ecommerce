@extends('admin.layouts.app')

@section('main_section')
<div class="d-flex vh-100">
    <aside class="bg-dark text-white dash-sidebar">
        <header class="px-3 py-2 bg-warning">
            {{ env('APP_NAME') }}
            </header>
            <main class="p-3">
                <x-admin-menubar/>
            </main>
            </aside>
                <section class="flex-grow-1">
                    <header class="bg-light py-2 border-bottom shadow">
                        <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-end">
                        <div class="dropdown">
                        <button class="btn dropdrown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                        </ul>
                        </div>
                        </div>
                        </div>
                    </header>
                    <main>
                        <div class="container-fluid py-3">
                            @yield('inner_section')
                        </div>
                    </main>
                </section>
                </div>
@endsection