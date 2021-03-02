<?php

namespace App\Http\Middleware;

use App\Models\Back\Settings\Whitelist;
use Closure;

class CheckIpMiddleware
{
    private $whiteIps;

    public function handle($request, Closure $next)
    {
        $items = Whitelist::select('ipv4_address')->where('enable_flag', 1)->get();

        if (0 < count($items)) {
            foreach ($items as $item) {
                $this->whiteIps[] = $item->ipv4_address;
            }

            if (!in_array($request->ip(), $this->whiteIps)) {
                return redirect()->route('/');
                //abort(403);
                //return response()->json(['your ip address is not valid.']);
            }
        }

        return $next($request);
    }
}
