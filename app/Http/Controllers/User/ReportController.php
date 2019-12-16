<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailyReport;
use Auth;
use Carbon\Carbon;
use App\Http\Requests\User\DailyReportRequest;

class ReportController extends Controller
{
    private $daily;

    public function __construct(DailyReport $instanceClass)
    {
        $this->middleware('auth');
        $this->daily = $instanceClass;  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if (empty($request['search-month'])) {
            $dailys = $this->daily->paginate(10);
        } else {
            $dailys = $this->daily->getDate($request['search-month']);
        }
        
        return view('user.daily_report.index',compact('dailys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.daily_report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DailyReportRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id(); 
        $this->daily->fill($input)->save();
        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daily = $this->daily->find($id);
        return view('user.daily_report.show', compact('daily'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daily = $this->daily->find($id);
        return view('user.daily_report.edit', compact('daily'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DailyReportRequest $request, $id)
    {

        $input = $request->all();
        $this->daily->find($id)->fill($input)->save();
        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->daily->find($id)->delete();
        return redirect()->route('report.index');
    }
}
