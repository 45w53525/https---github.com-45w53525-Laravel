<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Skill;

class SkillsController extends Controller
{

  public function apilist(){

       return Skill::all();

  }




     public function list(){
     return view('skills.list', [
            'skills' => Skill::all()
        ]);
    }

       public function delete(skill $skill)
     {
           $skill->delete();

           return redirect('/console/skills/list')
                  ->with('message', 'Skill has been deleted!');  

     }

      public function addForm()
    {

        return view('skills.add');
    }
    
     public function add()
    {

        $attributes = request()->validate([
            'language' => 'required',
            'expertise' => 'required',
        ]);
        
        
        $skill = new Skill();
        $skill->language = $attributes['language'];
        $skill->expertise = $attributes['expertise'];
        $skill->save();

        return redirect ('/console/skills/list')

            ->with('message', 'skills has been added!');
    }


      public function editForm(Skill $skill)
    {
        return view('skills.edit', [
            'skills' => $skill,
        ]);
    }


    public function edit(Skill $skill)
    {

        $attributes = request()->validate([

            'language' => 'required',
            'expertise' => 'required',
         ]);

         $skill->language = $attributes['language'];
         $skill->expertise = $attributes['expertise'];
         $skill->save();

         return redirect ('/console/skills/list')

            ->with('message', 'skills has been Edited!');
         
    }

          



















}
