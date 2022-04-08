<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MetaUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Notifications\postPublished;
use Illuminate\Support\Facades\Notification;
use URL;
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
          $this->middleware('permission:agent-list', ['only' => ['index','store']]);
          $this->middleware('permission:agent-create', ['only' => ['create','store']]);
          $this->middleware('permission:agent-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:agent-delete', ['only' => ['destroy']]);
          $this->middleware('permission:agent-excel', ['only' => ['importexcel','formexcel']]);
          $this->middleware('permission:agent-show', ['only' => ['show']]);
    }
    public function index()
    {

        $agent = User::query();
       $agetn= $agent->where('type' , 'agent');
        if ($keyword = request('search')) {
            $agetn=$agent->where('name', 'LIKE', "%{$keyword}%")->orWhere('family','LIKE',"%{$keyword}%")->orWhere('code','LIKE',"%{$keyword}%");
        }
        $agent = $agent->latest()->paginate(25);
       return view('Admin.agent.index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agent = new User;
        $metauser=new MetaUser;
        $action = URL::route('admin.agent.store');
        $title='افزودن نماینده';
        return view('Admin.agent.create',compact(['agent','action','title','metauser']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' =>['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'email'=>['nullable','string'],
            'status'=>['nullable','boolean'],
            'parent'=>['nullable'],
            'expert_id'=>['nullable'],
            'type'=>['nullable'],
        ]);

        $agent=User::create([
            'code' =>$data['code'],
            'name' => $data['name'],
            'family' => $data['family'],
            'password' => Hash::make($data['mobile']),
            'mobile' => faTOen($data['mobile']),
            'email'=>$data['email'],
            'status'=> $data['status'],
        
            'expert_id' => $data['expert_id'],
            'type' => $data['type'],

        ]);
        $agent->MetaUser()->create($request->all());
     alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
     return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(User $agent)
    {
       return view('Admin.Agent.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(User $agent)
    {
        $metauser=$agent->Metauser;
        $action = URL::route('admin.agent.update', ['agent' => $agent->id]);
        $title='ویرایش نماینده';
        return view('Admin.agent.create',compact(['agent','action','title','metauser']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $agent)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'email'=>['nullable','string'],
            'status'=>['nullable','boolean'],
            'parent'=>['nullable'],
            'expert_id'=>['nullable'],
            'type'=>['nullable'],
        ]);

        $agent->update([
            'name' => $data['name'],
            'family' => $data['family'],
            'mobile' => faTOen($data['mobile']),
            'email'=>$data['email'],
            'status'=> $data['status'],
            'expert_id' => $data['expert_id'],
            'type' => $data['type'],
        ]);
        $agent->MetaUser->update($request->all());
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.agent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $agent)
    {
        $agent->delete();
        alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return back();
    }
    public function importexcel(Request $request)
    {
        Excel::import(new UsersImport, $request->file('excel'));
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
   

    }
   
}
