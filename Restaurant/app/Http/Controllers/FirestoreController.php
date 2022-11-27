<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Firestore;

class FirestoreController extends Controller
{
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
        $this->tablename = 'orders';
    }

    public function store(Request $request){
        $postData = [
            'order' => $request->order, 
        ];
        $postRef = $this->app('firebase.firestore')->database()->collection('orders')->newDocument()->set($postData);
        return response()->json(['success' => true]);
    }
}
