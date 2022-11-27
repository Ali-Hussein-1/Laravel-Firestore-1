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
}
