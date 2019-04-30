<?php

namespace App\Http\Middleware;

use App\Mail\TwoFactorAuthMail;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Mail;

class TwoFactorVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if ($user->two_factor_expiry > Carbon::now()) {
            return $next($request);
        }

        $user->two_factor_token = str_random(10);
        $user->save();

        Mail::to($user)->send(new TwoFactorAuthMail($user->two_factor_token));

        return redirect('/2fa');
    }
}
