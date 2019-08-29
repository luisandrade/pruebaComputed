<?php
 
namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    public function mostrarLogin(){
        return view('pages-login-2');
    }

    protected function validarLogin(Request $request){
        $this->validate($request,[
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);
 
    }
 
    public function login(Request $request){
        $this->validarLogin($request);        
 
        if (Auth::attempt(['usuario' => $request->usuario,'password' => $request->password])){
            return redirect()->route('main');
        }
         return back()
         ->withErrors(['usuario' => trans('auth.failed')])->withInput(request(['usuario']));
    }
 
    
 
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
