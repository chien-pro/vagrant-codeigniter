<?php
class MY_Form_validation extends CI_Form_validation {

    public function __construct()
    {
        parent::__construct();
    }

    /**
    * Add error to Form_Validatin
    * 
    * @param string $messenge Error Messenge
    * 
    * @example 
    * $this->form_validation->add_messenge('Thêm dữ liệu không thành công');
    * $this->form_validation->add_messenge('Thêm dữ liệu không thành công','field');
    *   
    * @author Tiểu Tinh
    * 2011-12-07
    */
    function add_messenge($messenge,$field = NULL)
    {
        //If Field Null, then set $messgenge not Field
        if($field == NULL)
            $this->_error_array[]       = $messenge; 
        else
        {
            $this->_error_array[$field] = $messenge; 
            // Build our master array
            $this->_field_data[$field] = array(
            'field'                 => $field,
            'label'                 => 'Captcha',
            'rules'                 => 'recaptcha',
            'is_array'              => false,
            //'keys'                => $indexes,
            'postdata'              => NULL,
            'error'                 => $messenge
            );
        }
    }

    /**
    * Kiểm tra URL
    * 
    * @param mixed $str
    */
    function valid_url($str){

        $pattern = "/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i";
        if (!preg_match($pattern, $str))
        {
            return FALSE;
        }

        return TRUE;
    }

}