@include('superadmin.layouts.sidebar')
@include('superadmin.layouts.header')

<main class="py-4">
    {{-- Bagian konten utama --}}
    @yield('container') {{-- Bisa diganti content juga --}}
</main>

@yield('scripts') {{-- Penting untuk DataTables JS! --}}

@include('superadmin.layouts.footer')
