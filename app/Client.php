<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $vat
 * @property string $address
 * @property enum $gender
*/
class Client extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['name', 'email', 'vat', 'address', 'gender'];
    

    public static $enum_gender = ["male" => "Male", "female" => "Female"];

    public static function storeValidation($request)
    {
        return [
            'name' => 'max:191|required',
            'email' => 'email|max:191|required|unique:clients,email',
            'vat' => 'max:191|nullable',
            'address' => 'max:191|nullable',
            'gender' => 'in:male,female|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'name' => 'max:191|required',
            'email' => 'email|max:191|required|unique:clients,email,'.$request->route('client'),
            'vat' => 'max:191|nullable',
            'address' => 'max:191|nullable',
            'gender' => 'in:male,female|nullable'
        ];
    }

    

    
    
    
}
