<?php
/*lab1 INFO 154 Jan 16, 2013
 * 
 * John Carrol-testNum
 * Jarrod Neser-testCases
 * Danica Dometita-testAlpha
 */        
        
        
        
        
        /*here is the function for verifying a string
         *is all alphabetic
         */
        function testAlpha ($str)
		{
			if (preg_match(/^['A-Za-z]+$/', $str)){
				return True;
                        }
                                
			else {
				return False;
		}
                
        /*test case for testAlpha
        */
          
        $abc = "abc";
        $alphabet = "abcdefghijklmnopqrstuvwxwz";
        $null = "";
        $nums = "123";
        $abc123 = "abc123";
        $ab12cd = "ab12cd";
        $numabc = "123abc";
        
        testAlpha($abc);
        testAlpha($alphabet);
        testAlpha($null);
        testAlpha($nums);
        testAlpha($abc123);
        testAlpha($ab12cd);
        testAlpha($numabc);
 /*-----------------------------------------------------------------------------
  */      
        /*This function verities a given string is a valid number. 
         * 
         */
        
        function testNUM($input){
          
          if(is_numeric($input)){
              return TRUE;
          }
          
          return FALSE;
          }
          
          
        /*test case for testnumber
        */ 
        $num = "01";
        $digit = "0.1";
        $fraction = "1/4";
        $number = "123";
        $numberabc = "123abc";
        $abcnumber = "abc123";
        $abnumcd = "ab12cd";
        $numnull = "";
        $alpha = "abc";
        
        testNUM($num);
        testNUM($digit);
        testNUM($fraction);
        testNUM($number);
        testNUM($numberabc);
        testNUM($abcnumber);
        testNUM($abnumcd);
        testNUM($numnull);
        testNUM($alpha);
        
        ?>
