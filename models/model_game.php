<?php

class model_game extends Model
{

    function __construct()
    {
        Model::sessionInit();
        parent::__construct();
    }

    function getAbout()
    {
        $sql = 'select * from tbl_category';
        $result = $this->doSelect($sql);
        return $result;
    }

    function doAbout($id)
    {
        $five = @$_SESSION['five'];
        if (isset($five)) {
            $ok = explode(',', $five);
        } else {
            $sql = 'select * from tbl_ques where status=? and category=?';
            $result = $this->doSelect($sql, [1,$id]);
            $csrf = Model::findUser();
            $sql2 = 'select * from tbl_user where csrf=?';
            $result2 = $this->doSelect($sql2, [$csrf], 1);
            $ques_id = $result2['ques_id'];
            $ques_id = explode(',', $ques_id);


            if (count($result) < 5) {
                $ok = 'false';
            } else {
                foreach ($ques_id as $row) {
                    foreach ($result as $key => $row2) {
                        if ($row == $row2['id']) {
                            unset($result[$key]);
                        }
                    }
                }
                if (count($result) < 5) {
                    $ok = 'checked';
                } else {
                    $arr_num = [];
                    foreach ($result as $key => $row) {
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


                    $ids = join(',', $ok);
                    $sql4 = "select * from tbl_ques WHERE id IN (" . $ids . ")";
                    $result4 = $this->doSelect($sql4);


                    $set = array_merge_recursive($ques_id, $ok);
                    $set = implode(',', $set);
                    $sql3 = 'update tbl_user set ques_id=? where csrf=?';
                    $this->doQuary($sql3, [$set, $csrf]);
                }
            }
        }

        if ($ok == 'false') {
            return ['set' => 'false'];
        } else {
            if ($ok == 'checked') {
                return ['set' => 'checked'];
            } else {
                $ids = join(',', $ok);
                $sql2 = "select * from tbl_ques WHERE id IN (" . $ids . ")";
                $result2 = $this->doSelect($sql2);

                $sql4 = "select * from tbl_category WHERE id=? ";
                $result4 = $this->doSelect($sql4, [$id], 1);

                foreach ($result2 as $key => $row) {

                    $ans = unserialize($row['answer']);
                    shuffle($ans);
                    $result2[$key]['answer'] = $ans;
                    $result2[$key]['game'] = $result4['title'];
                }


                $im = implode(',', $ok);
                if (!isset($_SESSION['ques'])) {
                    Model::sessionSet('ques', 0);
                    Model::sessionSet('about', $id);
                    Model::sessionSet('five', $im);
                }


                return $result2;
            }

        }


        //++   answer_format   ++//

        //$oke=[1=>['title'=>'گزینه1','status'=>'g_false'],2=>['title'=>'گزینه2','status'=>'g_false'],3=>['title'=>'گزینه3','status'=>'g_true'],4=>['title'=>'گزینه4','status'=>'g_false']];
    }

    function getQues()
    {
        $num = $_SESSION['ques'];
        $id = $_SESSION['about'];
        $ques = $this->doAbout($id);
        $arr = $ques[$num];
        return $arr;
    }

    function next()
    {
        $num = $_SESSION['ques'];
        Model::sessionSet('ques', $num + 1);
        $new = $_SESSION['ques'];
        $id = $_SESSION['about'];
        $ques = $this->doAbout($id);
        $arr = @$ques[$new];
        $arr['next'] = $new;
        if (isset($_SESSION['i'])) {
            unset($_SESSION['i']);
        }
        if ($new == 5) {
            $arr['end'] = 1;
        } else {
            $arr['end'] = 0;
        }
        return $arr;
    }

    function doGozine($id)
    {
        if (!isset($_SESSION['i'])) {
            Model::sessionSet('i', 1);
        }
        $i = $_SESSION['i'];
        if ($i == 1) {
            $num = $_SESSION['ques'];

            $five = explode(',', $_SESSION['five']);
            $id_ques = $five[$num];
            $sql = 'select * from tbl_ques where id=?';
            $result = $this->doSelect($sql, [$id_ques], 1);
            unset($result['text']);
            unset($result['category']);
            unset($result['csrf']);
            unset($result['coin']);
            unset($result['status']);
            $result['ques_id'] = $result['id'];
            $ans = unserialize($result['answer']);
            $myans = $ans[$id];
            $true = [];
            foreach ($ans as $an) {
                if ($an['status'] === 'g_true') {
                    array_push($true, $an);
                }
            }
            Model::sessionSet('i', 0);
            if ($myans['id'] === $true[0]['id']) {
                if (isset($_SESSION['end'])) {
                    $end = $_SESSION['end'];
                    $end = explode(',', $end);
                    $result['status'] = 'true';
                    $arr = array_merge_recursive($result, $end);
                    $arr = implode(',', $arr);
                    unset($_SESSION['end']);
                    Model::sessionSet('end', $arr);
                } else {
                    $result['status'] = 'true';
                    $result = implode(',', $result);
                    Model::sessionSet('end', $result);
                }
                return ['true', $true[0]['id']];
            } else {
                if (isset($_SESSION['end'])) {
                    $end = $_SESSION['end'];
                    $end = explode(',', $end);
                    $result['status'] = 'false';
                    $arr = array_merge_recursive($result, $end);
                    $arr = implode(',', $arr);
                    unset($_SESSION['end']);
                    Model::sessionSet('end', $arr);
                } else {
                    $result['status'] = 'false';
                    $result = implode(',', $result);
                    Model::sessionSet('end', $result);
                }
                return ['false', $true[0]['id']];
            }
        }
    }

    function find()
    {
        $num = $_SESSION['ques'];
        $five = explode(',', $_SESSION['five']);
        $id_ques = $five[$num];
        $sql = 'select * from tbl_ques where id=?';
        $result = $this->doSelect($sql, [$id_ques], 1);
        unset($result['text']);
        unset($result['category']);
        unset($result['csrf']);
        unset($result['coin']);
        unset($result['status']);
        $result['ques_id'] = $result['id'];
        $ans = unserialize($result['answer']);
        $true = [];
        foreach ($ans as $an) {
            if ($an['status'] === 'g_true') {
                array_push($true, $an);
            }
        }
        if (isset($_SESSION['end'])) {
            $end = $_SESSION['end'];
            $end = explode(',', $end);
            $result['status'] = 'null';
            $arr = array_merge_recursive($result, $end);
            $arr = implode(',', $arr);
            unset($_SESSION['end']);
            Model::sessionSet('end', $arr);
        } else {
            $result['status'] = 'null';
            $result = implode(',', $result);
            Model::sessionSet('end', $result);
        }
        //$result=explode(',',$result);
        return $true;
    }

    function end()
    {
        if (!isset($_SESSION['ii'])) {
            Model::sessionSet('ii', 1);
        }
        $i = $_SESSION['ii'];
        if ($i == 1) {
            $arr = $_SESSION['end'];
            $arr = explode(',', $arr);
            $chunk = array_chunk($arr, 4);
            $true = [];
            $false = [];
            $null = [];
            $point = [];
            $ok = $_SESSION['five'];
            $ok = explode(',', $ok);
            $ids = join(',', $ok);
            $sql = "select * from tbl_ques WHERE id IN (" . $ids . ")";
            $result = $this->doSelect($sql);
            $span = [];
            foreach ($chunk as $row) {

                if ($row['3'] == 'true') {
                    array_push($true, 1);
                    foreach ($result as $row2) {
                        if ($row[2] == $row2['id']) {
                            array_push($point, $row2['coin']);
                        }
                    }
                    array_push($span, 'true');
                }
                if ($row['3'] == 'false') {
                    array_push($false, 1);
                    array_push($span, 'false');
                }
                if ($row['3'] == 'null') {
                    array_push($null, 1);
                    array_push($span, 'null');
                }

            }

            $true = array_sum($true);
            $false = array_sum($false);
            $null = array_sum($null);
            $point = array_sum($point);
            $span = array_reverse($span);

            if (isset($_SESSION['userId'])) {
                $sql2 = 'select * from tbl_user where csrf=?';
                $result2 = $this->doSelect($sql2, [$_SESSION['userId']], 1);

                $coin = $result2['coin'] + $point;
                $sql3 = 'update tbl_user set coin=? where csrf=?';
                $this->doQuary($sql3, [$coin, $_SESSION['userId']]);
            } else if (isset($_COOKIE['userId'])) {
                $sql2 = 'select * from tbl_user where csrf=?';
                $result2 = $this->doSelect($sql2, [$_COOKIE['userId']], 1);

                $coin = $result2['coin'] + $point;
                $sql3 = 'update tbl_user set coin=? where csrf=?';
                $this->doQuary($sql3, [$coin, $_COOKIE['userId']]);
            }
            if (isset($_SESSION['ques'])) {
                unset($_SESSION['ques']);
                unset($_SESSION['five']);
            }
            if (isset($_SESSION['end'])) {
                unset($_SESSION['end']);
            }
            if (isset($_SESSION['i'])) {
                unset($_SESSION['i']);
            }
            if (isset($_SESSION['ii'])) {
                unset($_SESSION['ii']);
            }
            return [$true, $false, $null, $point, $span];
        }
    }

    function doCharge($id)
    {
        $not = $this->doAbout($id);
        if (@$not['set'] == 'false') {
            $error = 1;
        } else {
            if (@$not['set'] == 'checked') {
                $error = 3;
            } else {
                $csrf = Model::findUser();
                $sql = 'select * from tbl_user where csrf=?';
                $result = $this->doSelect($sql, [$csrf], 1);
                if ($result['charge'] >= 10) {
                    $sql = 'update tbl_user set charge=? where csrf=?';
                    $this->doQuary($sql, [$result['charge'] - 10, $csrf]);
                    $error = 0;

                } else {
                    $error = 2;
                }
            }


        }
        return $error;

    }

}

?>