<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Resources\GuitarResource;
use App\Http\Requests\GuitarRequest;

class GuitarController extends Controller
{
    public function index(Request $request){
        $guitars = Guitar::all();
        if($request->has('orderBy')){
            if(!in_array($request->get('orderBy'), ["name", "strings", "body"])){
                abort(400);
            }

            if($request->has('order')){
                if(!in_array($request->get('order'), ['asc', 'desc'])){
                    abort(400);
                }

                if($request->get('orderBy') == 'name'){
                    $guitars = Guitar::orderBy('manufacturer', $request->get('order'))->orderBy('model', $request->get('order'))->get();
                }else{
                    $guitars = Guitar::orderBy($request->get('orderBy'), $request->get('order'))->get();
                }
            }
        }
        return GuitarResource::collection($guitars);
    }

    public function show(int $id){
        return new GuitarResource(Guitar::findOrFail($id));
    }

    public function store(GuitarRequest $request){
        $data = $request->validated();
        $guitar = Guitar::create($data);
        return new GuitarResource($guitar);
    }

    public function update(GuitarRequest $request, int $id){
        $data = $request->validated();
        Guitar::findOrFail($id)->update($data);
        return new GuitarResource(Guitar::findOrFail($id));
    }

    public function destroy(int $id){
        Guitar::findOrFail($id);
        Guitar::destroy($id);
    }
}
