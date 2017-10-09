<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Calculator{
    
  /**
   *  
   * @param type $a
   * @param type $b
   * @return type
   * @assert (1, 0) == 1
   * @assert (1, 1) == 2
   * @assert (0, 0) == 0
   * @assert (0, 1) == 1
   * @assert (5, 5) == 10
   *
   */  
  public function sum($a, $b){
     return $a + $b;
  }
  
  
  /**
   * 
   * @param type $a
   * @param type $b
   * @return type
   * @assert (10, 5) == 5
   * @assert (2, 2) == 0
   * @assert (1, 5) == -4
   */
  public function sub($a, $b){
      return $a - $b;
  }  
}

