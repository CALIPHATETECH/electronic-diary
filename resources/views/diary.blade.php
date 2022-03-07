    <div class="row">
        <div class="col-md-3 "> 
        <img src="img/user.jpg" alt="" class="rounded-full h-350 w-350 object-cover">
        </div>

        <div class="col-md-9">
        <br>
            <img src="diary/logo.gif" width="" height="" alt="About {{Auth::user()->name}}" />
            <div id="abosut" class="text text-left">
            <br>
            <br>
            <h6>{{Auth::user()->about}}</h6>
            <br>
            <br>
            <br>
            @foreach(Auth::user()->userMonthlyDiaries as $diary)
                <div class="card ml-2 shadow">
                    <div class="card-header h3">Recorded at {{$diary->month->name ?? 'nill'}} {{$diary->year->name ?? 'nill'}}</div>
                    <div class="card-body ">
                        @foreach($diary->userMonthlyDiaryItems as $diaryItem)
                            <p><b>{{$diaryItem->created_at}}</b></p>
                            <p class="text text-center text-success h4">{{$diaryItem->content}}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>