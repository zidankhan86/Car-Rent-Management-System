<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report()
    {
        $report=Book::all();
        return view('backend.report.report',compact('report'));
    }

    public function reportSearch(Request $request)
    {

        $validator = Validator::make($request->all(), [
           'from_date'    => 'required|date',
           'to_date'      => 'required|date|after:from_date',
       ]);

        if($validator->fails())
        {
            // notify()->error($validator->getMessageBag());
            // toastr()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }



       $from=$request->from_date;
       $to=$request->to_date;


      $status=$request->status;

         $report=Book::whereBetween('created_at', [$from, $to])->get();
         return view('backend.report.report',compact('report'));

     }
}

