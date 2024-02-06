<?php

describe('sum', function () {
    it('may sum integers', function () {
        $a = array(1, 2);
        $result = array_sum($a);
  
        expect($result)->toBe(3);
     });
  
     it('may sum floats', function () {
        $a = array(1.5, 2.5);
        $result = array_sum($a);
  
        expect($result)->toBe(4.0);
     });
});