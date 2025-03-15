<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;

class WeightController extends Controller
{
    public function index()
    {
        $weightLogs = WeightLog::paginate(9);

        return view('weight-log', compact('weightLogs'));
    }


}
