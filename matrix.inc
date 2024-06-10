<?php
class matrix
{
    private $mat = array(array());
    private $number = 0;
    private $answers = array();
    private $x_array = array();
    private $mat_satr = array(array());
    private $answers_satr = array();
    private $mat_l = array(array());
    private $mat_y = array();
    private $movement = 0;


    function matrix ( $mat_temp , $answers , $number )
    {
        $this -> mat = $mat_temp;
        $this -> number = $number;
        $this -> answers = $answers;
    }

    function get_satre_l ()
    {
        return $this -> mat_l;
    }

    function get_number ()
    {
        return $this -> number;
    }

    function get_mat_y ()
    {
        return $this -> mat_y;
    }

    function get_mat_satr ()
    {
        return $this -> mat_satr;
    }

    function set_mat( $mat_temp )
    {
        $this -> mat = $mat_temp;
    }

    function set_answers( $answers_temp )
    {
        $this -> answers = $answers_temp;
    }

    function set_number( $number_temp )
    {
        $this -> number = $number_temp;
    }

    function get_answers_satr ()
    {
        return $this -> answers_satr;
    }

    function get_mat ()
    {
        return $this -> mat;
    }

    function get_answers ()
    {
        return $this -> answers;
    }

    function get_x_array()
    {
        return $this -> x_array;
    }

    function satre_moghadamati ()
    {
        $this -> mat_satr = $this -> mat;
        $this -> answers_satr = $this -> answers;
        for ($i = 0 ; $i < $this -> number ; $i++)
        {
            $check =false;
            for ($j = $i ; $j < $this -> number ; $j++)
            {
                if ( $this -> mat_satr[$j][$i] != 0)
                {
                    $check =true;
                    break;
                }
            }
            if ($check)
            {
                $this -> mehvar( $i );
                for ($j = $i + 1 ; $j < $this -> number ; $j++)
                {
                    $temp = -($this->mat_satr[$j][$i]) / $this -> mat_satr[$i][$i];
                    for ($z = $i ; $z <$this -> number; $z++)
                    {
                        $this -> mat_satr[$j][$z] = ($temp * $this -> mat_satr[$i][$z]) + $this -> mat_satr[$j][$z];
                    }
                    $this -> answers_satr[$j] = ($temp * $this -> answers_satr[$i]) + $this -> answers_satr[$j];
                }
            }
        }
    }

    function mehvar ( $num )
    {
        for ($j = $num ; $j < $this -> number - 1 ; $j++)
        {
            if ($this -> mat_satr[$j][$num] >= 0 )
            {
                $t1 = $this -> mat_satr[$j][$num];
            }
            else
            {
                $t1 = -($this -> mat_satr[$j][$num]);
            }
            if ($this -> mat_satr[$j + 1][$num] >= 0 )
            {
                $t2 = $this -> mat_satr[$j + 1][$num];
            }
            else
            {
                $t2 = -($this -> mat_satr[$j + 1][$num]);
            }

            if ($t1 < $t2 )
            {
                $temp = $this -> mat_satr[$j];
                $this -> mat_satr[$j] = $this -> mat_satr[$j + 1];
                $this -> mat_satr[$j + 1] = $temp;
                $temp1 = $this -> answers_satr [$j];
                $this -> answers_satr [$j] = $this -> answers_satr [$j + 1];
                $this -> answers_satr [$j + 1] = $temp1;
                $this -> movement = $this -> movement + 1;
            }
        }
    }

    function hal ()
    {
        //$this -> x_array[number - 1] =$this -> answers[$this -> number - 1] / $this -> mat[$this -> number - 1][$this -> number - 1];
        $check = 0;
        for ( $i = $this -> number - 1 ; $i >= 0 ; $i--)
        {
            $sum = 0;
            for ($j = $this -> number - 1 ; $j > $i ; $j--)
            {
                $sum = $sum + $this -> mat_satr[$i][$j] * $this -> x_array[$j];
            }
            if ($this -> mat_satr[$i][$i] != 0 )
            {
                $this -> x_array[$i] = ( $this -> answers_satr[$i] - $sum ) / $this -> mat_satr[$i][$i];
            }
            else
            {
                if ( $this -> answers_satr[$i] - $sum == 0)
                {
                    $check = 1;
                }
                else
                {
                    $check = 2;
                }
                break;
            }
        }
        return $check;
    }

    function check ()
    {
        $check = true;
        for ($i = 0 ; $i < $this -> number ; $i++)
        {
            if ( $this -> mat[$i][$i] == 0 )
            {
                $check = false;
            }
        }
        return $check;
    }

    function find_l()
    {
        $check = true;
        for ($i = 0 ; $i < $this -> number ; $i++)
        {
            $this -> mat_l[$i][$i] = 1;
            for ($j = $i + 1 ; $j < $this -> number ; $j++)
            {
                $this -> mat_l [$i][$j] = 0;
            }
        }
        for ($i = 1 ; $i < $this -> number ; $i++)
        {
            for ($j = 0 ; $j < $i ; $j++)
            {
                if ($this -> mat [$j][$j] == 0)
                {
                    $check = false;
                }
                else
                {
                    $this -> mat_l [$i][$j] = $this -> mat [$i][$j] / $this -> mat [$j][$j];
                }
            }
        }
        return $check;
    }

    function hal_2 ()
    {
        $check = 0;
        for ( $i = 0 ; $i <= $this -> number - 1 ; $i++)
        {
            $sum = 0;
            for ($j = 0 ; $j < $i ; $j++)
            {
                $sum = $sum + $this -> mat_l[$i][$j] * $this -> mat_y[$j];
            }
            if ($this -> mat_l[$i][$i] != 0 )
            {
                $this -> mat_y[$i] = ( $this -> answers[$i] - $sum ) / $this -> mat_l[$i][$i];
            }
            else
            {
                if ($this -> answers[$i] - $sum == 0)
                {
                    $check = 1;
                }
                else
                {
                    $check = 2;
                }
                break;
            }
        }
        return $check;
    }

    function hal_3 ()
    {
        $check = 0;
        for ( $i = $this -> number - 1 ; $i >= 0 ; $i--)
        {
            $sum = 0;
            for ($j = $this -> number - 1 ; $j > $i ; $j--)
            {
                $sum = $sum + $this -> mat_satr[$i][$j] * $this -> x_array[$j];
            }
            if ($this -> mat_satr[$i][$i] != 0 )
            {
                $this -> x_array[$i] = ( $this -> mat_y[$i] - $sum ) / $this -> mat_satr[$i][$i];
            }
            else
            {
                if ($this -> mat_y[$i] - $sum == 0)
                {
                    $check = 1;
                }
                else
                {
                    $check = 2;
                }
                break;
            }
        }
        return $check;
    }

    function determinant ()
    {
        $multiplication = 1;
        for ($i = 0 ; $i < $this -> number ; $i++)
        {
            $multiplication = $this -> mat_satr [$i][$i] * $multiplication;
        }
        if ( $this -> movement % 2 == 1)
        {
            $multiplication = - $multiplication;
        }
        return $multiplication;
    }

    function satre_moghadamati_det ()
    {
        $this -> mat_satr = $this -> mat;
        for ($i = 0 ; $i < $this -> number ; $i++)
        {
            $check =false;
            for ($j = $i ; $j < $this -> number ; $j++)
            {
                if ( $this -> mat_satr[$j][$i] != 0)
                {
                    $check =true;
                    break;
                }
            }
            if ($check)
            {
                if ($this -> mat_satr[$i][$i] == 0)
                {
                    $this -> mehvar_det( $i );
                }
                for ($j = $i + 1 ; $j < $this -> number ; $j++)
                {
                    $temp = -($this->mat_satr[$j][$i]) / $this -> mat_satr[$i][$i];
                    for ($z = $i ; $z <$this -> number; $z++)
                    {
                        $this -> mat_satr[$j][$z] = ($temp * $this -> mat_satr[$i][$z]) + $this -> mat_satr[$j][$z];
                    }
                }
            }
        }
    }

    function mehvar_det ( $num )
    {
        for ($j = 0 ; $j < $this -> number - 1 ; $j++)
        {
            if ($this -> mat_satr[$j][$num] >= 0 )
            {
                $t1 = $this -> mat_satr[$j][$num];
            }
            else
            {
                $t1 = -($this -> mat_satr[$j][$num]);
            }
            if ($this -> mat_satr[$j + 1][$num] >= 0 )
            {
                $t2 = $this -> mat_satr[$j + 1][$num];
            }
            else
            {
                $t2 = -($this -> mat_satr[$j + 1][$num]);
            }

            if ($t1 < $t2 )
            {
                $temp = $this -> mat_satr[$j];
                $this -> mat_satr[$j] = $this -> mat_satr[$j + 1];
                $this -> mat_satr[$j + 1] = $temp;
                $this -> movement = $this -> movement + 1;
            }
        }
    }
}


?>