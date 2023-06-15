<?php
namespace App\Models;
use CodeIgniter\Model;

class BookModel extends Model{
    protected $table= 'books';
    protected $allowedFields = ['title','author','isbno'];

    
    //Function to Fetch DB Records for our Read View(List view)
    public function getRecords(){
        return $this->orderBy('id','ASC')->findAll();
    }

    //Function to Fetch DB Records for our Edit View
    public function getRow($id){
        return $this->where('id',$id)->first();
    }
}
?>