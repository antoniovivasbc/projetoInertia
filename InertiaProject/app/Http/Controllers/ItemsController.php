<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Log;

class ItemsController extends Controller
{
    public function index() {
        $items = Item::all();

        return inertia(
            'CRUD/Listing',
            ['data' => $items]
        );
    }

    public function create(){
        return inertia('CRUD/Insert');
    }

    public function store(Request $request){
        Log::emergency($request->all());

        return redirect('/listing');
    }
}