<?php

class model_recent extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    function getUserInfo(){
        $csrf=Model::findUser();
        $sql='select * from tbl_online where csrf=? and status=? ';
        $result=$this->doSelect($sql,[$csrf,3]);
        if ($result){
            $ok=count($result);
            if ($ok > 10){
                $num=0;
                $arr=[];
                foreach ($result as $key=> $row){
                    $num++;
                    if ($num > 10){
                        array_push($arr,$row['id']);
                        unset($result[$key]);
                    }
                }
                $arr=join(',',$arr);
                $sql="delete from tbl_online where csrf=? and id IN (" . $arr . ")";
                $this->doQuary($sql,[$csrf]);
            }



                $sql1 = 'select * from tbl_category';
                $result1 = $this->doSelect($sql1);

                $sql4='select * from tbl_user ';
                $result4=$this->doSelect($sql4);


                foreach ($result as $key=>$row) {
                    foreach ($result1 as $row1){
                        if ($row['category']==$row1['id']){
                            $result[$key]['category']=$row1['title'];
                        }
                    }
                            foreach ($result4 as $row4){
                                if ($row4['csrf']==$row['end_csrf']){
                                    $result[$key]['harif']=$row4['name'];
                                }
                            }


                }

                return $result;

        }

    }
    function doshow($id){
        $csrf=Model::findUser();
        $sql='select * from tbl_online where id=? and csrf=? and status=?';
        $result=$this->doSelect($sql,[$id,$csrf,3],1);
        if ($result){

            if ($result['end_payan']==''){
                return 'null';
            }else{
                $sql1='select * from tbl_user where csrf=?';
                $result1=$this->doSelect($sql1,[$result['end_csrf']],1);
                if ($result1['avatar'] == 0) {
                    $my = 'false';
                } else {
                    $sql4 = 'select * from tbl_avatar where id=?';
                    $result4 = $this->doSelect($sql4, [$result1['avatar']], 1);
                    $my = $result4['img'];
                }

                $sql2='select * from tbl_user where csrf=?';
                $result2=$this->doSelect($sql2,[$csrf],1);
                if ($result2['avatar'] == 0) {
                    $enemy = 'false';
                } else {
                    $sql4 = 'select * from tbl_avatar where id=?';
                    $result4 = $this->doSelect($sql4, [$result2['avatar']], 1);
                    $enemy = $result4['img'];
                }

                $payan=unserialize($result['end_payan']);
                $payan['my']=$my;
                $payan['enemy']=$enemy;
                return $payan;
            }
        }else{
            return 'false';
        }
    }

}

?>