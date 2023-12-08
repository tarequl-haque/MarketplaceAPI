<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Throwable;

class UserController extends Controller
{
    
    /**
     * Check if the user exist in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkUser($userId){
        
        try{
            $user = User::where('user_id','=',$userId)->first();
            if ($user) {                
                return $user;
            }
            else{
                return response()->json(["404"=>"Resource not found, Aquest usuari no existeix."]);
            }
        }catch(Throwable $e) {
            //report($e);
            return response()->json(["400"=>"Bad request, data no té format especificat."]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user = new User();

            $user->user_id = rand(0,20);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->verified = $request->verified;
            $user->admin = $request->admin;
            $user->type_of_institution = $request->typeOfInstitution;
            //$user->remember_token = $request->remember_token;
            //$user->project_published = $request->projectsPublished;

            $user->save();

            return response()->json($user);

        } catch (Throwable $e) {
           // report($e);           
           return response()->json(["400"=>"Bad request, data no té format especificat."]);
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $user = $this->checkUser($request->userId);

        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $user = $this->checkUser($request->userId);

        return response()->json($user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        try {
            $user = $this->checkUser($request->userId);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->type_of_institution = $request->typeOfInstitution;

            $user->save();

            return response()->json($user);

        } catch (Throwable $e) {
           // report($e);
           return $e;
    //        return response()->json(["400"=>"Bad request, data no té format especificat."]);

        } 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        try{
            $user = $this->checkUser($request->userId);
            User::where('user_id', '=',$request->userId)->delete();

            return response()->json("User ".$request->userId." deleted.",200);

        } catch (Throwable $e) {
            //report($e);
            return response()->json(["404"=>"Resource not found, Aquest usuari no existeix."]);
        }

    }
}
