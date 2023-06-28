<?php

class model_question extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    function getUserInfo(){
        $csrf=Model::findUser();
        $sql='select * from tbl_ques where csrf=?';
        $result=$this->doSelect($sql,[$csrf]);

        $sql2='select * from tbl_category';
        $result2=$this->doSelect($sql2);
        foreach ($result as $key=> $row){
            foreach ($result2 as $row2){
                if ($row['category']==$row2['id']){
                    $result[$key]['game']=$row2['title'];
                }
            }
        }
        $entezar=[];
        $rad=[];
        $taiid=[];
        $tedad=count($result);
        foreach ($result as $row){

            $stat=$row['status'];
            if ($stat == 0){
                array_push($entezar,1);
            }else if ($stat==1){
                array_push($taiid,1);
            }else if($stat==2){
                array_push($rad,1);
            }
        }
        $entezar=array_sum($entezar);
        $taiid=array_sum($taiid);
        $rad=array_sum($rad);

        $sql3='select * from tbl_user';
        $result3=$this->doSelect($sql3);
        $ids=[];
        foreach ($result3 as $row){
            $im=explode(',',$row['ques_id']);
            $ok=array_merge_recursive($ids,$im);
            $ids=$ok;
        }
        $n=array_count_values($ids);
        foreach ($result as $key=> $row){
            $id=$row['id'];
            if (isset($n[$id])){
                $num=$n[$id];
            }else{
                $num=0;
            }
            $result[$key]['num']=$num;
        }




        return ['soal'=>$result,'taiid'=>$taiid,'entezar'=>$entezar,'rad'=>$rad,'tedad'=>$tedad];
    }
    function delQues($id){
        $sql="delete from tbl_ques where id=?";
        $this->doQuary($sql,[$id]);
        $ok=$this->getUserInfo();
        unset($ok['soal']);
        return $ok;
    }
    function show($id){
        $sql='select * from tbl_ques where id=?';
        $result=$this->doSelect($sql,[$id],1);
        $un=unserialize($result['answer']);
        $result['answer']=$un;

        return $result;
    }
    function edit($id){
        $sql='select * from tbl_ques where id=?';
        $result=$this->doSelect($sql,[$id],1);
        $un=unserialize($result['answer']);
        $result['answer']=$un;

        return $result;
    }
    function editQues($title,$dorost,$ans,$id){
        $ans=explode(',',$ans);
        $ok= [1=>['title'=>$ans[0],'status'=>'g_false','id'=>1],2=>['title'=>$ans[1],'status'=>'g_false','id'=>2],3=>['title'=>$ans[2],'status'=>'g_true','id'=>3],4=>['title'=>$ans[3],'status'=>'g_false','id'=>4]];
        foreach ($ok as $key=> $row){
            if ($dorost==$key){
                $ok[$key]['status']='g_true';
            }else{
                $ok[$key]['status']='g_false';
            }
        }
        $ok=serialize($ok);
        $sql3 = 'update tbl_ques set text=?,answer=?,status=? where id=?';
        $this->doQuary($sql3, [$title,$ok,0,$id]);
        return '';
    }
    function getCat(){
        $sql='select * from tbl_category';
        $result=$this->doSelect($sql);
        return $result;
    }




    function afzodan($title,$dorost,$ans,$id){
        $csrf=Model::findUser();
        $ans=explode(',',$ans);
        $ok= [1=>['title'=>$ans[0],'status'=>'g_false','id'=>1],2=>['title'=>$ans[1],'status'=>'g_false','id'=>2],3=>['title'=>$ans[2],'status'=>'g_true','id'=>3],4=>['title'=>$ans[3],'status'=>'g_false','id'=>4]];
        foreach ($ok as $key=> $row){
            if ($dorost==$key){
                $ok[$key]['status']='g_true';
            }else{
                $ok[$key]['status']='g_false';
            }
        }
        $ok=serialize($ok);
        $sql = "insert into tbl_ques (category,text,csrf,status,coin,answer) VALUES (?,?,?,?,?,?)";
        $this->doQuary($sql, [$id,$title,$csrf,0,0,$ok]);
        return '';
    }
}

?>