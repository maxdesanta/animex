<?php

namespace App\Http\Middleware;

use App\Models\UserDevice;
use Closure;
use Illuminate\Http\Request;
use App\Services\DeviceLimitService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckDeviceLimit
{
    protected $deviceService;

    public function __construct(DeviceLimitService $deviceService) {
        $this->deviceService = $deviceService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if(!$user){
            return $next($request);   
        }

        if($request->routeIs('login') || $request->routeIs('logout')){
            return $next($request);
        }

        $deviceSession = session('device_id');

        $device = UserDevice::where('user_id', $user->id)
            ->where('device_id', $deviceSession)
            ->first();

        if(!$device){
            $device = $this->deviceService->registerDevices($user);

            if(!$device){
                Auth::logout();

                return redirect()->route('login')
                    ->withErrors([
                        'error' => 'You have reached your device limit. Please log out.'
                    ]);
            }
            
            return $next($request);
        }
        
        return $next($request);
    }
}
