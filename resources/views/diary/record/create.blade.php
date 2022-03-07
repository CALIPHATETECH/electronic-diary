<x-app-layout>
    @section('title')
       {{strtolower(Auth::user()->name)}}
    @endsection
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <br>
        <br>
        <br>
        <br>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('diary.record.register')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="content" id="" cols="30" rows="5" class="form-control" placeholder="write to your diary here"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
