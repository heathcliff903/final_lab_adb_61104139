
<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class product_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }


    public function findAll($condition = [])
    {
        if(sizeof($condition) > 0){
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('lap');
        return $result;
    }


}