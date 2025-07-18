<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller implements HasMiddleware
{
    // auth
    public static function middleware(): array
    {
        return ['auth'];
    }
    public function showPlans(){
        $plans = Plan::all();
        return view('subscribe.plans', compact('plans'));
    }

    public function checkoutPlans(Plan $plan){
        $user = Auth::user();
        return view('subscribe.checkout', compact('plan', 'user'));
    }

    public function checkout(Request $request){
        $user = Auth::user();
        $plan = Plan::find($request->plan_id);
        $user->memberships()->create([
            'plan_id' => $plan->id,
            'active' => true,
            'start_date' => now(),
            'end_date' => now()->addDays($plan->duration),
        ]);
        return redirect()->route('subscription.sucess');
    }

    public function showSucess(){
        return view('subscribe.sucess');
    }
}
