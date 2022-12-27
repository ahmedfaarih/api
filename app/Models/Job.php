<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
    
    private function rules()
    {
        return [
            'name' => 'required',
            'status' => 'required',
            'priority' => 'required',
        ];
    }

    public function storeRules()
    {
        return $this->rules();

    }
    public function updateRules()
    {
        //for situations where you need to override some rules for update
        $rules = array_merge($this->rules(), []);
        return $this->rules();
    }

}
