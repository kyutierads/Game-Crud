<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Game::get();
        return view('game-list',compact('data'));
    }
    public Function addgame(){
        return view('add-game');
    }   
    public function savegame(Request $request){
        $request->validate([
        'name' => 'required',
        'description' => 'required']);

        $name = $request->name;
        $description = $request->description;
         
        $gm = new Game();
        $gm->name = $name;
        $gm->description = $description;
        $gm->save();

        return redirect()->back()->with('success','Game Added Successfully!.');
    }
   

    public function editGame($id){
        $data = Game::where('id','=',$id)->first();
        return view('edit-game',compact('data'));    
    } 
    public function updategame(Request $request)
    {
        //
        $request->validate([

            'name' => 'required',
            'description' => 'required',
        ]);  

        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        Game::where('id','=',$id)->update([
            'name'=>$name,
            'description'=>$description
        ]);
        return redirect()->back()->with('success','Student Updated Successfully.');
    }

   
    public function destroy($id)
    {
        //
        Game::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Student Deleted Successfully.');
    }
}
