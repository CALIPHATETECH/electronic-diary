<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DiaryController extends Controller
{
    public function newRecord()
    {
        return view('diary.record.create');
    }

    public function register(Request $request)
    {
        $user = Auth::user();
        $diary = $user->userMonthlyDiaries()->firstOrCreate([
            'month_id'=>$user->currentMonth()->id,
            'year_id'=>$user->currentYear()->id,
            ]);
        $diary->userMonthlyDiaryItems()->firstOrCreate([
            'content'=>$request->content,
            'link'=>$request->content,
        ]);
        return redirect()->route('dashboard');   
    }
}
