<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expert;
use App\Models\Category;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreExpertRequest;
use App\Http\Requests\UpdateExpertRequest;
use App\Models\Consultation;
use App\Models\Subscription;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expert::all();
        return view('dashboard.experts.index', compact('experts'));
    }

    public function indexRegisterExpert()
    {
        return view('public.expert.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.experts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpertRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $lastUser = User::get()->count();
        
        $request->validate([
            'expert_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:30',
            'bio' => 'required',
            'certifications' => 'required',
            'experience' => 'required',
        ]);
        
        if ($request->hasFile('expert_img')) {
            $file = $request->expert_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
        }

        Expert::create([
            'expert_name'     => $request->expert_name,
            'email'           => $request->email,
            'password'        => bcrypt($request->password),
            'bio'             => $request->bio,
            'certifications'  => $request->certifications,
            'experience'      => $request->experience,
            'role_id'         => $request->role_id,
            // 'price_per_hours' => $request->price_per_hours,
            'expert_img'      => './uploads/' . $new_file,
            'user_id'         => $lastUser + 1,
        ]);
        User::create([
            "role_id"   => 3,
            "user_name" => $request->expert_name,
            "email"     => $request->email,
            "password"  => bcrypt($request->password),
        ]);

        return redirect()->route('expertd.index');
    }

    public function storeRegister(Request $request)
    {

        $lastUser = User::get()->count();
        // dd($lastUser);
        $request->validate([
            'expert_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:30',
            'bio'=>'required',
            'certifications' => 'required' ,
            'experience' => 'required',
        ]);
        if ($request->hasFile('expert_img')) {
            $file = $request->expert_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
        }

        Expert::create([
            'expert_name'     => $request->expert_name,
            'email'           => $request->email,
            'password'        => bcrypt($request->password),
            'bio'             => $request->bio,
            'certifications'  => $request->certifications,
            'experience'      => $request->experience,
            'role_id'         => $request->role_id,
            'user_id'         => $lastUser + 1,
            // 'price_per_hours' => $request->price_per_hours,
            'expert_img'      => './uploads/' . $new_file,
        ]);
        User::create([
            "role_id"   => 3,
            "user_name" => $request->expert_name,
            "email"     => $request->email,
            "password"  => bcrypt($request->password),
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function showProfile()
    {
        $user = Auth::user();
        $expert = Expert::where('user_id', $user->id)->first();
        $consultations = Consultation::where('expert_id', $expert->id)->get();
        // $subscription = Subscription::where('consultation_id', $consultations->id)->get();
        return view('public.expertProfile', compact('expert', 'consultations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editExpert = Expert::find($id);
        return view('dashboard.experts.edite', compact('editExpert'));
    }

    public function expertEditConsultation($id){
        $categories = Category::all();
        $editConsultation = Consultation::find($id);
        return view('public.expertEditConsultation', compact('editConsultation','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpertRequest  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $expertUpdate = Expert::find($id);
        if ($request->hasFile('expert_img')) {
            $file = $request->expert_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
            $expertUpdate->expert_img =  './uploads/' . $new_file;
        }
        $expertUpdate->expert_name     = $request->expert_name;
        $expertUpdate->email           = $request->email;
        $expertUpdate->password        = bcrypt($request->password);
        $expertUpdate->bio             = $request->bio;
        $expertUpdate->certifications  = $request->certifications;
        $expertUpdate->experience      = $request->experience;
        $expertUpdate->role_id      = $request->role_id;
        // $expertUpdate->price_per_hours = $request->price_per_hours ;

        $expertUpdate->update();
        return redirect()->route('expertd.index');
    }

    public function updateProfile(Request $request, $id){
        $request->validate([
            'expert_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:30',
            'bio'=>'required',
            'experience'=>'required',
            'certifications'=>'required',
            'user_img' =>'required',

        ]);
        // dd($request);
        $expertUpdate = Expert::find($id);
        if ($request->hasFile('expert_img')) {
            $file = $request->expert_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
            $expertUpdate->expert_img =  './uploads/' . $new_file;
        }
        $expertUpdate->expert_name     = $request->expert_name;
        $expertUpdate->email           = $request->email;
        $expertUpdate->password        = bcrypt($request->password);
        $expertUpdate->bio             = $request->bio;
        $expertUpdate->certifications  = $request->certifications;
        $expertUpdate->experience      = $request->experience;
        $expertUpdate->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expertDestroy = Expert::find($id);
        // $ex = $expertDestroy->id;
        // $userDestroy = User::where('id', $ex)->get();
        // $id2 = $userDestroy->id;
        // $userDestroy->destroy($id2);

        
        $expertDestroy->destroy($id);
        return redirect()->route('expertd.index');
    }

    // public function handlLogin(Request $request)
    // {
    //     if(Auth::guard('webexpert')->attempt($request->only(['email', 'password']))){
    //         return view('public/expertProfile');
    //     }
    //     return redirect()->back()->with('error', 'invalid Credentials');
    // }

    // public function login()
    // {
    //     return view('public/expertProfile');
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if(auth()->guard('expert')->attempt([
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ])) {
    //         $user = auth()->user();

    //         return redirect()->intended(url('/admin/dashboard'));
    //     } else {
    //         return redirect()->back()->withError('Credentials doesn\'t match.');
    //     }
    // }

    // public function logout(){
    //     Auth::guard('webexpert')->logout();
    //     return redirect()->route('home');
    // }

    public function expertDestroyConsultation($id)
    {
        $destroyConsultation = Consultation::find($id);
        $destroyConsultation->destroy($id);
        return route('public.expertProfile');
    }

    public function expertCreateConsultation($id)
    {
        $expert = Expert::find($id);
        $categories = Category::all();

        return view('public.createConsultationExpert', compact('expert', 'categories'));
    }

    

    public function expertStoreConsultation(Request $request, $id)
    {
        
        // $request->validate([
        //     'expert_name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:30',
        //     'bio' => 'required',
        //     'certifications' => 'required',
        //     'experience' => 'required',
        // ]);
        
        if($request->hasFile('consultation_img')){
            $file = $request->consultation_img;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('uploads', $new_file);
        }
        Consultation::create([
            'consultation_name'  => $request->consultation_name,
            'title'              => $request->title,
            'price'              => $request->price,
            'description'        => $request->description,
            'expert_id'          => $request->expert_id,
            'category_id'        => $request->category_id,
            'consultation_img'   => './uploads/' . $new_file,
        ]);
        return redirect()->route('public.expertProfile');
    }

    public function specificConsultation($id){
        $consultation_ids = Consultation::where('expert_id', $id)->pluck('id')->toArray();
        // dd($consultation_ids);
        $ids = Subscription::whereIn('consultation_id', $consultation_ids)->get();
        // dd($ids);

        return view('public.showSubscribtions', compact('ids'));


    }

}
