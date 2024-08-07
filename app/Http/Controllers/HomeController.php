<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Branch;
use App\Models\Country;
use App\Models\User;
use App\Models\User_info;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //Admin
public function index(){

    if(Auth::user()->role_id ==2){
        return view('dashboard');
    }else{
        return view('admin.admin_panel');
    }

}
//Branch

    public function viewBranch(){

     $allData = Branch::all();


        return view ('admin.branch.view_branch',compact('allData'));


    }


    public function addBranch(){
        $allData = Branch::all();
        return view('admin.branch.create_branch',compact('allData'));
    }
    public function store(Request $request){

        $brnach = new Branch();
        $brnach->name = $request->name;
        $brnach->save();
        return redirect()->route('branch.view');
    }
    public function editBranch($id){

        $editData=Branch::find($id);
        return view('admin.branch.create_branch',compact('editData'));
    }

    public function updateBranch(Request $request,$id){

        $data =Branch::find($id);

        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('branch.view');

    }

//Country
    public function viewCountry(){

     $data['allCountry'] =Country::all();

      return view('admin.country.view_country',$data);

    }


    public function addCountry(){

        return view('admin.country.create_country');
    }
    public function storeCountry(Request $request){

        $brnach = new Country();
        $brnach->name = $request->name;
        $brnach->save();
        return redirect()->route('country.view');
    }
    public function editCountry($id){

        $editData=Country::find($id);
        return view('admin.country.create_country',compact('editData'));
    }

    public function updateCountry(Request $request,$id){

        $data =Country::find($id);

        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('country.view');

    }
//Agent
    public function viewAgent(){

        $data['allAgent'] =Agent::all();

        return view('admin.agent.view_agent',$data);

    }


    public function addAgent(){

        return view('admin.agent.create_agent');
    }
    public function storeAgent(Request $request){

        $agent = new Agent();
        $agent->name = $request->name;
        $code=rand(0000,9999);
        $agent->save();
        return redirect()->route('country.view');
    }
    public function editData($id){

        $editData=Agent::find($id);
        return view('admin.agent.create_agent',compact('editData'));
    }

    public function updateAgent(Request $request,$id){

        $data =Agent::find($id);

        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('agent.view');

    }
//USER INFO

    public function viewUserInfo(){

       // $access = Role::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
       // $data['allUser']=User_info::with(['country'])->get();
      //  $data['allCountry'] = Country::orderBy('id', 'asc')->get();
       // $access = Role::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
      //  $data['user_id'] =Auth::id();
      // $data['allUser']= User_info::where('id', 'user_id')->get();
     //  $data['allUser']=User_info::where('user_id','=',user('id'))->get();





    //use App\Models\Destination;
   // use App\Models\Flight;

        //$data['allUser']=User_info::with(['country'])->get();
       // $data['allUser']= User_info::where('user_id',Auth::id())->with(['country'])->get();
        //$data['allUser']= User_info::where('user_id',Auth::id())->with(['country'])->get();
        //get user wise data
       //$data['allUser']= User_info::where('user_id',Auth::id())->with(['country'])->get();
        //$publishedComments = Comment::whereRelation('post', 'published', '=', true)->get();
//        $data['allUser']=User_info::where('user_id', '=', Auth::id())->get();

//        if (Auth::user()->role_id == 1) {
//            $data['allUser']=User_info::with(['country'])->get();
//
//        } else {
//            $data['allUser']= User_info::where('user_id',Auth::id())->with(['country'])->get();
//        }
        if (Auth::user()->role_id == 1) {
            $data['allUser']=User_info::with(['country'])->get();

        }elseif (Auth::user()->role_id == 5){

            $data['allUser']=User_info::with(['country'])->get();
        }else{
            $data['allUser']= User_info::where('user_id',Auth::id())->with(['country'])->get();
        }




       // $data['allUser']= User_info::where('user_id',Auth::id())->with(['country'])->get();
//        dd($data['allUser']);

        $data['user'] = User::find(Auth::id());
      // $data['allUser']=User::where('id',Auth::id())->with(['user_info','user_info.country'])->get();
       // dd($data['allUser']->toArray());
        $data['branches']=Branch::all();
        $data['allCountry']=Country::all();
        return view ('admin.user_info.view_user_info',$data);
    }



    public function addUserInfo(){
        //dd($data);
        $data['allCountry'] = Country::orderBy('id', 'asc')->get();
        $data['allUser']=User_info::all();
        $data['user']=User::all();
        $data['branches']=Branch::all();



        return view('admin.user_info.create-user-info',$data);
    }

    public function storeUserInfo(Request $request){

        $user_info = new User_info();
        $user_info->f_name = $request->f_name;
        $user_info->m_name = $request->m_name;
        $user_info->nid = $request->nid;
        $user_info->phone = $request->phone;
        $user_info->email = $request->email;
        $user_info->name = $request->name;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/pic'), $filename);
            $user_info['image'] = $filename;
        }
        $user_info->user_id = Auth::user()->id;
        $user_info->address = $request->address;
        if ($request->file('passport')) {

            $file = $request->file('passport');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/pic'), $filename);
            $user_info['passport'] = $filename;
        }

        $user_info->country_id= $request->country_id;
        $user_info->branch_id = $request->branch_id;
        $user_info->agent_id = $request->agent_id;
        $user_info->created_by = Auth::user()->id;
        $user_info->updated_by = Auth::user()->id;

        $user_info->save();
        return redirect(route('userinfo.view'));
    }
    public function editUserInfo($id){

        $data['allCountry'] = Country::orderBy('id', 'asc')->get();
        $data['allUser']=User_info::find($id);
        $data['user']=User::all();
        $data['branches']=Branch::all();

        return view('admin.user_info.edit-user-info',$data);
    }

    public function updateUserInfo(Request $request,$id){

        $user_info =User_info::find($id);

        $user_info->f_name = $request->f_name;
        $user_info->m_name = $request->m_name;
        $user_info->nid = $request->nid;
        $user_info->passport = $request->passport;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/pic'), $filename);
            $user_info['image'] = $filename;
        }
        $user_info->user_id = Auth::user()->id;
        $user_info->address = $request->address;
        $user_info->country_id= $request->country_id;
        $user_info->branch_id = $request->branch_id;
        $user_info->agent_id = $request->agent_id;
        $user_info->created_by = Auth::user()->id;
        $user_info->updated_by = Auth::user()->id;

        $user_info->save();
        session()->flash('success',' class update success');
        return redirect()->route('userinfo.view');

    }


}
