<?php 
include 'lib/components/component_state.php';
class Renderersstate{
    public $component='';
    public function __construct()
    {
        
    }

    public function render($arr){
        $data='';
        $msg = flash("insert");
        $msg = isset($msg ) ? $msg  : '';
        $component=  stateForm();
        $component = str_replace("[MESSDATA]",$msg  , $component);
        foreach($arr as  $row){
            $data .= '<option value="'.$row['country_id'].'">'.$row['country'].'</option>';
        }
        $component = str_replace("[COUNTRYLIST]",$data  , $component);
        echo $component;
    }
   
    public function stateList($arr){
        
        $component = stateList(); 
        $data = '';
        $i=1;
        foreach($arr as  $row)
        {
            if($row['status']){
                $status = '<span class="badge bg-success bg-gradient mb-2">Active</span>';
            }else{
                $status = '<span class="badge bg-warning bg-gradient mb-2">Dective</span>';
            }

            $data .= ' <tr>
            <td>'.$i++.'</td>
            <td>'.$row['country'].'</td>
            <td>'.$row['state'].'</td>
            <td>'.$status.'</td>
            <td><a href="#?action=delete&id='.$row['stateID'].'" title ="Delete" onclick="return confirm(Are you sure you want to delete this item?);" class="btn btn-danger bg-gradient btn-sm"><i class="mdi mdi-trash-can d-block font-size-16"></i></a> </td>
            
        </tr>';
        }

        $component = str_replace("[STATE_LIST]",$data  , $component);
        echo $component;
    }
   
    
}