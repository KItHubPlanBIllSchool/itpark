<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $table = 'course_user';
    protected $fillable = ['course_id', 'user_id'];
    
    // Your CourseUser model definition
}
