<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory; // Acceso  a modulo de validación Laravel
class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'username'=>'required',
            'password'=>'required'
        ];
    }
    public function gerCredentials(){
        $username = $this->get('username'); //<-- Obteción del valor input
        if($this->isEmail($username)){
            return[
                'email'=>$username,
                'password'=>$this->get('password')
            ];
        }
        return $this->only('username','password');
    }
    /// Validacio del formato de Email
    public function isEmail($value2){
        $validador=$this->container->make(ValidationFactory::class);
        return !$validador->make(['username'=>$value2],['username'=>'email'])->fails();
    }
}
