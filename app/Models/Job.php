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
        return $this->belongsToMany(Quotation::class, 'quotation_jobs','job_id','quotation_id')->withTimestamps();
    }
    // return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');

    public function subJobs(){
        return$this->hasMany(SubJob::class);
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
