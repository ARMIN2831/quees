<?php

class model_online extends Model
{

    private $csrf;


    function __construct()
    {
        parent::__construct();
        $this->csrf = Model::findUser();
    }


    function getuserInfo()
    {
        $csrf = $this->csrf;
        $sql = 'select * from tbl_user where csrf=?';
        $result = $this->doSelect($sql, [$csrf], 1);
        if ($result['avatar'] == '') {
            $result['avatar'] = 'false';
        } else {
            $sql4 = 'select * from tbl_avatar where id=?';
            $result4 = $this->doSelect($sql4, [$result['avatar']], 1);
            $result['avatar'] = $result4['img'];
        }
        return $result;
    }

    function getAbout()
    {
        $sql = 'select * from tbl_category';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getOnline()
    {
        $csrf = $this->csrf;


        $sql = "delete from tbl_online where csrf=? and status=?";
        $this->doQuary($sql, [$csrf, 0]);

        $sql = 'select * from tbl_online where csrf=? and status=?';
        $result = $this->doSelect($sql, [$csrf, 1], 1);
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }

    function docharge($id)
    {
        $sql = 'select * from tbl_ques where status=? and category=?';
        $result = $this->doSelect($sql, [1, $id]);
        if (count($result) >= 5) {
            $csrf = $this->csrf;
            $user = $this->getuserInfo();
            if ($user['charge'] >= 10) {

                $sql = 'update tbl_user set charge=? where csrf=?';
                $this->doQuary($sql, [$user['charge'] - 10, $csrf]);


            } else {
                return 2;
            }
            $sql = 'update tbl_online set status=? where csrf=?';
            $this->doQuary($sql, [3, $csrf]);

            $sql = 'insert into tbl_online (csrf,category,status,game,player,payan,end_status,end_payan,end_csrf,online,ti) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
            $this->doQuary($sql, [$csrf, $id, 0, 0, 0, '',0,'','','',0]);


            return $user;


        } else {
            return 1;
        }
    }

    function doOnline($id)
    {
        $csrf = $this->csrf;
        $sql = 'select * from tbl_online where category=? and status=? and csrf!=? and game=?';
        $result = $this->doSelect($sql, [$id, 0, $csrf, 0], 1);


        $sql6 = 'select * from tbl_online where csrf=? and status=? and game!=?';
        $result6 = $this->doSelect($sql6, [$csrf, 1, 0], 1);

        if ($result6) {
            $sql7 = 'select * from tbl_online where game=? and status=? and category=? and csrf!=?';
            $result7 = $this->doSelect($sql7, [$result6['game'], 1, $result6['category'], $csrf], 1);
            if ($result7) {
                $sql8 = 'select * from tbl_user where csrf=?';
                $result8 = $this->doSelect($sql8, [$result7['csrf']],1);
                if ($result8['avatar'] == 0) {
                    $result8['avatar'] = 'false';
                } else {
                    $sql9 = 'select * from tbl_avatar where id=?';
                    $result9= $this->doSelect($sql9, [$result8['avatar']], 1);
                    $result8['avatar'] = $result9['img'];
                }
                return $result8;
            }
        } else if ($result) {
            $sql2 = 'select * from tbl_user where csrf=?';
            $result2 = $this->doSelect($sql2, [$result['csrf']],1);
            if ($result2['avatar'] == 0) {
                $result2['avatar'] = 'false';
            } else {
                $sql9 = 'select * from tbl_avatar where id=?';
                $result9= $this->doSelect($sql9, [$result2['avatar']], 1);
                $result2['avatar'] = $result9['img'];
            }

            $rand = time() + rand(1000, 1000000) + rand(1000, 1000000) + rand(1000, 1000000);
            $sql3 = 'update tbl_online set status=?,game=?,end_csrf=? where csrf=? and status!=?';
            $this->doQuary($sql3, [1, $rand,$csrf, $result['csrf'], 3]);

            $sql4 = 'update tbl_online set status=?,game=?,end_csrf=? where csrf=? and status!=?';
            $this->doQuary($sql4, [1, $rand,$result['csrf'], $csrf, 3]);
            return $result2;

        }


    }

    function delGame()
    {
        $csrf = $this->csrf;
        $sql3 = 'update tbl_online set status=? where csrf=? and status=?';
        $this->doQuary($sql3, [3, $csrf, 1]);
        return '';
    }

    function docancel()
    {
        $csrf = $this->csrf;
        $sql = "delete from tbl_online where csrf=? and status=?";
        $this->doQuary($sql, [$csrf, 0]);
    }

    function doAbout()
    {

        $csrf = $this->csrf;
        $sqll = 'select * from tbl_online where csrf=? and status=?';
        $resultt = $this->doSelect($sqll, [$csrf, 1], 1);
        $sql = 'select * from tbl_on_ques where game=?';
        $result = $this->doSelect($sql, [$resultt['game']], 1);
        if ($result) {
            $arr = unserialize($result['ques']);
            $num = $result['num'];
            $sql11 = 'select * from tbl_ques where id=?';
            $result11 = $this->doSelect($sql11, [$arr[$num]], 1);


            $num = $num + 1;
            $sql3 = 'update tbl_on_ques set num=? where game=?';
            $this->doQuary($sql3, [$num, $result['game']]);

            $sql3 = 'update tbl_online set player=? where game=?';
            $this->doQuary($sql3, [0, $result['game']]);

            $sql7 = 'select * from tbl_category where id=?';
            $result7 = $this->doSelect($sql7, [$result11['category']], 1);
            $result11['game'] = $result7['title'];

            $ans = unserialize($result11['answer']);
            $result11['answer'] = $ans;

            return $result11;
            /////////////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////////////
        } else {
            $category = $resultt['category'];



            $sql1 = 'select * from tbl_ques where category=? and status=?';
            $result1 = $this->doSelect($sql1, [$category, 1]);

            $arr_num = [];
            foreach ($result1 as $key => $row) {
                $num_id = $row['id'];
                array_push($arr_num, $num_id);
            }

            $number_rand = array_rand($arr_num, 5);
            $num1 = $arr_num[$number_rand[0]];
            $num2 = $arr_num[$number_rand[1]];
            $num3 = $arr_num[$number_rand[2]];
            $num4 = $arr_num[$number_rand[3]];
            $num5 = $arr_num[$number_rand[4]];

            $ok = [$num1, $num2, $num3, $num4, $num5];
            $ok1 = serialize($ok);

            //$ids = join(',', $ok);
            //$sql4 = "select * from tbl_ques WHERE id IN (" . $ids . ")";
            //$result4 = $this->doSelect($sql4);

            $sql = "insert into tbl_on_ques (game,ques,num,checker) VALUES (?,?,?,?)";
            $this->doQuary($sql, [$resultt['game'], $ok1, 0, 0]);
            //$sql='select * from tbl_on_ques where game=?';
            //$result=$this->doSelect($sql,[$resultt['game']],1);

            $sql1 = 'select * from tbl_ques where id=?';
            $result1 = $this->doSelect($sql1, [$ok[0]], 1);


            $sql7 = 'select * from tbl_category where id=?';
            $result7 = $this->doSelect($sql7, [$result1['category']], 1);
            $result1['game'] = $result7['title'];

            $ans = unserialize($result1['answer']);
            $result1['answer'] = $ans;


            return $result1;
        }


        //++   answer_format   ++//

        //$oke=[1=>['title'=>'گزینه1','status'=>'g_false'],2=>['title'=>'گزینه2','status'=>'g_false'],3=>['title'=>'گزینه3','status'=>'g_true'],4=>['title'=>'گزینه4','status'=>'g_false']];
    }

    function getgame()
    {
        $csrf = $this->csrf;
        $sql2 = 'select * from tbl_online where csrf=? and status=? and game!=?';
        $result2 = $this->doSelect($sql2, [$csrf, 1, 0], 1);

        return $result2['game'];
    }

    function doonques($game,$ti)
    {

        $sql = "select * from tbl_online where game=? and status=?";
        $result = $this->doSelect($sql, [$game, 1]);
        $csrf = $this->csrf;
        $ok = 0;
        $num = 0;
        $mystatus = 0;
        $enemystatus = 0;
        $result11 = '';
        $end = 0;
        foreach ($result as $row) {
            $player = $row['player'];
            if ($player == 1) {
                $ok++;
            }
            if ($row['csrf'] == $csrf) {
                $mystatus = $player;
            } else {
                $enemystatus = $player;
            }
        }
        $on='online';
        foreach ($result as $row){
            if ($row['csrf']==$csrf){
                $sql7 = 'update tbl_online set online=?,ti=? where csrf=? and game=?';
                $this->doQuary($sql7, ['online',$ti,$csrf,$game]);
            }else{
                if ($row['online']=='online'){
                    $sql7 = 'update tbl_online set online=? where csrf!=? and game=?';
                    $this->doQuary($sql7, ['offline', $csrf, $game]);
                    $on='online';
                }else if ($row['online']=='offline') {
                    $sql7 = 'update tbl_online set online=? where csrf!=? and game=?';
                    $this->doQuary($sql7, ['off', $csrf, $game]);
                    $on='offline';
                }else if ($row['online']=='off'){
                    $sql7 = 'update tbl_online set online=? where csrf!=? and game=?';
                    $this->doQuary($sql7, ['close', $csrf, $game]);
                    $on='off';
                }else if ($row['online']=='close'){
                    $on='close';
                }
            }
        }


        if ($ok == count($result)) {
            $status = 'true';


            $sql = 'select * from tbl_on_ques where game=?';
            $result = $this->doSelect($sql, [$game], 1);
            $arr = unserialize($result['ques']);
            $num = $result['num'];
            $sql11 = 'select * from tbl_ques where id=?';
            $result11 = $this->doSelect($sql11, [$arr[$num]], 1);

            if ($num >= 5) {
                $end = 1;
            } else {
                if ($result['checker'] == 0) {
                    $sql3 = 'update tbl_on_ques set checker=? where game=?';
                    $this->doQuary($sql3, [1, $result['game']]);
                } else {
                    $num = $num + 1;
                    $sql3 = 'update tbl_on_ques set num=?,checker=? where game=?';
                    $this->doQuary($sql3, [$num, 0, $result['game']]);
                    $sql3 = 'update tbl_online set player=? where game=?';
                    $this->doQuary($sql3, [0, $result['game']]);
                    $num = $num - 1;
                }



                $sql7 = 'select * from tbl_category where id=?';
                $result7 = $this->doSelect($sql7, [$result11['category']], 1);
                $result11['game'] = $result7['title'];
                $ans = unserialize($result11['answer']);
                $result11['answer'] = $ans;
            }
        } else {
            $status = 'false';
        }

        return [$status, $mystatus, $enemystatus, $result11, $num, $end,$on];


    }

    function next()
    {
        $game = $this->getgame();
        $csrf = $this->csrf;
        $sql = "select * from tbl_on_ques where game=?";
        $result = $this->doSelect($sql, [$game], 1);
        $arr = unserialize($result['ques']);
        $num = $result['num'];
        $end_ = 0;
        $result2 = '';
        if ($num >= 5) {
            $end_ = 1;

            $sql2 = 'select * from tbl_ques where id=?';
            $result2 = $this->doSelect($sql2, [$arr[$num]], 1);

            $sql6 = 'select * from tbl_online where game=? and csrf=?';
            $result6 = $this->doSelect($sql6, [$game, $csrf], 1);

            if ($result6['player']==0){
                $end = unserialize($result6['payan']);
                $arr = ['null',$result2['coin']];
                if ($end) {
                    $new_end = array_merge_recursive($end, $arr);
                } else {
                    $new_end = $arr;
                }
                $new_end = serialize($new_end);
                $sql3 = 'update tbl_online set payan=? where game=? and csrf=?';
                $this->doQuary($sql3, [$new_end, $game, $csrf]);
            }

        } else {

            $sql2 = 'select * from tbl_ques where id=?';
            $result2 = $this->doSelect($sql2, [$arr[$num]], 1);

            $sql6 = 'select * from tbl_online where game=? and csrf=?';
            $result6 = $this->doSelect($sql6, [$game, $csrf], 1);

            if ($result6['player'] == 0) {
                $end = unserialize($result6['payan']);
                $arr = ['null',$result2['coin']];
                if ($end) {
                    $new_end = array_merge_recursive($end, $arr);
                } else {
                    $new_end = $arr;
                }
                $new_end = serialize($new_end);
                $sql3 = 'update tbl_online set payan=? where game=? and csrf=?';
                $this->doQuary($sql3, [$new_end, $game, $csrf]);
            }
            $on='online';
            $sql88 = 'select * from tbl_online where game=? and csrf!=?';
            $result88 = $this->doSelect($sql88, [$game, $csrf], 1);
            if ($result88['online']=='close'){
                $on='close';
            }
            if ($on=='close'){
                $num = $num + 1;
                $sql3 = 'update tbl_on_ques set num=?,checker=? where game=?';
                $this->doQuary($sql3, [$num, 0, $result['game']]);
                $sql3 = 'update tbl_online set player=? where game=?';
                $this->doQuary($sql3, [0, $result['game']]);
                $num = $num - 1;
            }else{
                if ($result['checker'] == 0) {
                    $sql3 = 'update tbl_on_ques set checker=? where game=?';
                    $this->doQuary($sql3, [1, $result['game']]);
                } else {
                    $num = $num + 1;
                    $sql3 = 'update tbl_on_ques set num=?,checker=? where game=?';
                    $this->doQuary($sql3, [$num, 0, $result['game']]);
                    $sql3 = 'update tbl_online set player=? where game=?';
                    $this->doQuary($sql3, [0, $result['game']]);
                    $num = $num - 1;
                }
            }



            $sql7 = 'select * from tbl_category where id=?';
            $result7 = $this->doSelect($sql7, [$result2['category']], 1);
            $result2['game'] = $result7['title'];
            $ans = unserialize($result2['answer']);
            $result2['answer'] = $ans;
        }

        return [$result2, $num, $end_];

    }

    function doGozine($id)
    {
        $csrf = $this->csrf;
        $game= $this->getgame();
        $sql2 = 'select * from tbl_online where csrf=? and status=? and game=?';
        $result2 = $this->doSelect($sql2, [$csrf, 1,$game], 1);

        if ($result2['player'] == 0) {
// 0=> true
// 1=> false
// 2=> sabr baraye harif
// 3=> sabr ta soal basi bargozari shavad
            $sql = 'select * from tbl_on_ques where game=?';
            $result = $this->doSelect($sql, [$result2['game']], 1);
            $ques = unserialize($result['ques']);
            $ques = $ques[$result['num'] - 1];

            $sql1 = 'select * from tbl_ques where id=?';
            $result1 = $this->doSelect($sql1, [$ques], 1);
            $answer = unserialize($result1['answer']);

            $myans = [];
            $trueans = [];
            foreach ($answer as $row) {
                if ($row['id'] == $id) {
                    array_push($myans, $row);
                }
                if ($row['status'] == 'g_true') {
                    array_push($trueans, $row);
                }
            }

            if ($myans[0]['id'] == $trueans[0]['id']) {
                $status = 0;
                $stat = 'true';
            } else {
                $stat = 'false';
                $status = [$trueans[0]['id'], 1];
            }


            $end = unserialize($result2['payan']);
            $arr = [$stat,$result1['coin']];

            if ($end) {
                $new_end = array_merge_recursive($end, $arr);
            } else {
                $new_end = $arr;
            }
            $new_end = serialize($new_end);


            $sql3 = 'update tbl_online set player=?,payan=? where csrf=? and status=? and game=?';
            $this->doQuary($sql3, [1, $new_end, $csrf, 1, $result2['game']]);
            //$ok=[0=>['status'=>'','coin'=>''],1=>[],2=>[],3=>[],4=>[]];


            return $status;
        } else if ($result2['player'] == 1) {
            $sql3 = 'select * from tbl_online where status=? and game=? and csrf!=?';
            $result3 = $this->doSelect($sql3, [1, $result2['game'], $csrf], 1);

            if ($result3['player'] == 0) {
                return 2;
            } else {
                //$sql3 = 'update tbl_online set player=? where status=? and game=?';
                //$this->doQuary($sql3, [0,1, $result2['game']]);

                //$sql3 = 'select * from tbl_on_ques where game=?';
                //$result3 = $this->doSelect($sql3, [$result2['game']],1);

                //$num=$result3['num']+1;
                //$sql3 = 'update tbl_on_ques set num=? where game=?';
                //$this->doQuary($sql3, [$num, $result2['game']]);
                return 3;
            }
        }
    }

    function bale()
    {
        $game = $this->getgame();
        $csrf=$this->csrf;

        $sql = 'select * from tbl_user where csrf=?';
        $result = $this->doSelect($sql, [$csrf], 1);
        if ($result['avatar'] == '') {
            $my='false';
        } else {
            $sql4 = 'select * from tbl_avatar where id=?';
            $result4 = $this->doSelect($sql4, [$result['avatar']], 1);
            $my=$result4['img'];
        }





        $sql = "select * from tbl_on_ques where game=?";
        $result = $this->doSelect($sql, [$game], 1);
        $arr = unserialize($result['ques']);
        $num = $result['num'];
        if ($num == 5){
            $sql3 = 'update tbl_online set status=? where csrf=? and game=?';
            $this->doQuary($sql3, [3,$csrf,$game]);
            return 'false';
        }else{

            $sql2 = 'select * from tbl_ques where id=?';
            $result2 = $this->doSelect($sql2, [$arr[$num-1]], 1);

            $sql44 = 'select * from tbl_online where csrf!=? and game=?';
            $result44 = $this->doSelect($sql44, [$csrf,$game], 1);
            $ti=$result44['ti'];

            $enemycs=$result44['csrf'];
            $sql22 = 'select * from tbl_user where csrf=?';
            $result22 = $this->doSelect($sql22, [$enemycs], 1);
            if ($result22['avatar'] == '') {
                $enemy='false';
            } else {
                $sql4 = 'select * from tbl_avatar where id=?';
                $result4 = $this->doSelect($sql4, [$result22['avatar']], 1);
                $enemy=$result4['img'];
            }



            $sql7 = 'select * from tbl_category where id=?';
            $result7 = $this->doSelect($sql7, [$result2['category']], 1);
            $result2['game'] = $result7['title'];

            $ans = unserialize($result2['answer']);
            $result2['answer'] = $ans;
            return [$result2, $num,$arr,$ti,$my,$enemy];
        }

    }

    function end()
    {
        $csrf = $this->csrf;
        $game = $this->getgame();
        $sql = 'select * from tbl_online where game=? and csrf=?';
        $result = $this->doSelect($sql, [$game, $csrf], 1);

        $sql1 = 'select * from tbl_online where game=? and csrf!=?';
        $result1 = $this->doSelect($sql1, [$game, $csrf], 1);

        $myans = unserialize($result['payan']);
        $enemyans = unserialize($result1['payan']);

        $myans= array_chunk($myans,2);
        $enemyans= array_chunk($enemyans,2);

        $true=[];
        $false=[];
        $null=[];
        $coin_end=[];
        $span=[];
        foreach ($myans as $row){
            $pasokh=$row[0];
            $coin=$row[1];
            if ($pasokh == 'true'){
                array_push($coin_end,$coin);
                array_push($true,1);
            }else if ($pasokh == 'false'){
                array_push($false,1);
            }else if($pasokh == 'null'){
                array_push($null,1);
            }
            array_push($span,$pasokh);
        }
        $true=array_sum($true);
        $false=array_sum($false);
        $null=array_sum($null);
        $coin_end=array_sum($coin_end);
        $myok=[$true,$false,$null,$coin_end,$span];



        $true=[];
        $false=[];
        $null=[];
        $coin_end=[];
        $span=[];
        foreach ($enemyans as $row){
            $pasokh=$row[0];
            $coin=$row[1];
            if ($pasokh == 'true'){
                array_push($coin_end,$coin);
                array_push($true,1);
            }else if ($pasokh == 'false'){
                array_push($false,1);
            }else if($pasokh == 'null'){
                array_push($null,1);
            }
            array_push($span,$pasokh);
        }
        $true=array_sum($true);
        $false=array_sum($false);
        $null=array_sum($null);
        $coin_end=array_sum($coin_end);
        $enemyok=[$true,$false,$null,$coin_end,$span];

        //0=bord
        //1=bakht
        //2=mosavi
        $natije=0;
        if ($myok[3]>$enemyok[3]){
            $natije=0;
            $sql = 'select * from tbl_user where csrf=?';
            $result = $this->doSelect($sql, [$csrf], 1);
            $sql3 = 'update tbl_user set coin=? where csrf=?';
            $this->doQuary($sql3, [$result['coin']+10,$csrf]);
        }else if ($myok[3]<$enemyok[3]){
            $natije=1;
        }else if ($myok[3]==$enemyok[3]){
            $natije=2;
            $sql = 'select * from tbl_user where csrf=?';
            $result = $this->doSelect($sql, [$csrf], 1);
            $sql3 = 'update tbl_user set coin=? where csrf=?';
            $this->doQuary($sql3, [$result['coin']+5,$csrf]);
        }
        $ok=serialize([$myok, $enemyok,$natije]);
        $sql3 = 'update tbl_online set status=?,end_payan=?,end_status=? where csrf=? and game=?';
        $this->doQuary($sql3, [3,$ok,$natije,$csrf,$game]);

        if ($result1['online']=='close'){
            $csrf1=$result1['csrf'];
            if ($natije==0){
                $natije1=1;
            }else if ($natije==1){
                $natije1=0;
                $sql = 'select * from tbl_user where csrf=?';
                $result = $this->doSelect($sql, [$csrf1], 1);
                $sql3 = 'update tbl_user set coin=? where csrf=?';
                $this->doQuary($sql3, [$result['coin']+10,$csrf1]);
            }
            if ($natije==2){
                $sql = 'select * from tbl_user where csrf=?';
                $result = $this->doSelect($sql, [$csrf1], 1);
                $sql3 = 'update tbl_user set coin=? where csrf=?';
                $this->doQuary($sql3, [$result['coin']+5,$csrf1]);
            }
            $ok1=serialize([$enemyok,$myok,$natije1]);
            $sql3 = 'update tbl_online set end_payan=?,end_status=? where csrf!=? and game=?';
            $this->doQuary($sql3, [$ok1,$natije1,$csrf,$game]);
        }




        return [$myok, $enemyok,$natije];

    }


}

// status==0     entezar(dar hal jos o jo)
// status==1     dar hal bazi
// status==2     bazi tamam shode
// status==3     enseraf dade shode(cancel)

?>