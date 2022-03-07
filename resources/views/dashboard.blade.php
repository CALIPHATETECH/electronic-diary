<x-app-layout>
    @section('title')
       {{strtolower(Auth::user()->name)}}
    @endsection

    @include('diary')
</x-app-layout>
