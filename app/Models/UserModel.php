<?php 
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table = 'crud';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email'];
}