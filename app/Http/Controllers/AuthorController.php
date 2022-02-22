<?php

namespace App\Http\Controllers;

use App\Author;
//use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class AuthorController extends Controller
{
    
    public function showAllAuthors()
    {


        $data = response()->json(Author::all());
        //return response()->json(Author::all());
        $encrypted_json = Crypt::encrypt($data);
       // $name_decrypt = Crypt::decrypt($name);

    //dd($name);
   // dd($name_decrypt);
        return $encrypted_json;
    }

    public function showOneAuthor($id)
    {
        //return response()->json(Author::find($id));
        $data_id = response()->json(Author::find($id));
        $encrypted_json__ = Crypt::encrypt($data_id);  
        return $encrypted_json__;      
    }

    public function create(Request $request)
    {   
        $author = Author::create($request->all());
        
        

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }



              
}