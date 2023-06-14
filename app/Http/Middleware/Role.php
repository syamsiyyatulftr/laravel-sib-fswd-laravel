<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

        $explode = explode('|' , $role);

        foreach ($explode as $key => $value) {
            if ( $request->user()->role->name == $value) { // strtolower hanya untuk huruf Besar saja, jika huruf kecil pada DB tidak perlu utk memakainya
                return $next($request);
            }
        }

        return abort(403, 'Unauthorized action');

        // if ($request->user()->role->name != $role) {  //jika user rolenya tidak sama yang dikasihkan parameternya maka yg akan di eksekusi kode dibawah ini yg 403
        //     return abort(403);     //maka ini menggunakan helper laravel yaitu abort, abort 403 ini merupakan HTTP kode jika user tidak memiliki akses
        // }
        // return $next($request);
    }
}
