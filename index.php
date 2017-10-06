<?php

   $obj = new main();

   class main {
	  	  
    public function __construct() {
       
	   $day = date("Y-m-d");
	 echo 'The value of $date:'.$day."<br>";
	 
	  $tar = date("Y/m/d");
	 echo 'The value of $tar:'.$tar."<br>";
	 
	 $years = array("2012","396","300","2000","1100","1089");
	 echo 'the value of $year';
	 print_r($years);
	 echo"<br>";
	 echo"<hr>";
	 
	 $replace = str_replace("-","/","$day");
	 echo 'Replaced - with / using  in $day'.$replace."<br>";
	 echo"<hr>";
	 
	 if (strcmp($day, $tar) > 0)
	          echo " the future ";

		 elseif  (strcmp($day, $tar) < 0)
	          echo " the past ";

		 else  
			  echo " Oops ";
		 
		  echo"<hr>";
		  
		  
		  for($i=0; $i <strlen($tar);$i++)
        {
           if($tar[$i]=='/')
           {
              echo " ".$i;  
           } 
        }
		
		echo"<hr>";
		
		echo " $date word count is:";
		$word = str_word_count($day);
		echo "$word";
		echo"<hr>";
		
		
	    echo " $date legth count is:";
		$legth = strlen($day);
		echo "$legth";
		echo"<hr>";
		
		
		echo " Ascii value of $date is :";
		$ascii = ord($day);
		echo "$ascii";
		echo"<hr>";
		
		
		echo ' Last 2 character in $date is :';
		$last = substr("$day",-2);
		echo "$last";
		echo"<hr>";
		
	
        $arrayday = explode("-",$day);
        for($i=0; $i < count($arrayday);$i++)
        {
            echo ($arrayday[$i])." ";
        }
		echo"<hr>";
		
		echo"Leap Year ?";
		echo"<br>";
		
		echo'Using Foreach';
				echo"<br>";
		foreach($years as $value)
				{
					if(((int)$value)%4==0)
						echo "<br>True";
					else
						echo "<br>False";
						echo "<br>";
						
				}
			echo"<hr>";
				echo'Using For';
				echo"<br>";
				for($i=0;$i<count($years);$i++)
				{
					if($i%4==0)
						echo'True';
					else
						echo"False";
		
				}
				
				echo"<hr>";
				
				echo' Using Switch Case';
				
				for ($i=0;$i<count($years);$i++)
				{
						echo "<br>";
						switch ($years{$i})
						{
								case "2012": 
								if(((int)$years[$i])%4==0)
								{
									echo "True";
									echo"<br>";
								}
								else
								{
									echo "False";
									echo"<br>";
								}
								break;
								
								case "396": 
								if(((int)$years[$i])%4==0)
								{
									echo "True";
									echo"<br>";
								}
								else
								{
									echo "False";
									echo"<br>";
								}
								break;
								
								case "300": 
								if(((int)$years[$i])%4==0)
								{
									echo "True";
									echo"<br>";
								}
								else
								{
									echo "False";
									echo"<br>";
								}
								break;
								
								case "2000": 
								if(((int)$years[$i])%4==0)
								{
									echo "True";
									echo"<br>";
								}
								else
								{
									echo "False";
									echo"<br>";
								}
								break;
								
								case "1089": 
								if(((int)$years[$i])%4==0)
								{
									echo "True";
									echo"<br>";
								}
								else
								{
									echo "False";
									echo"<br>";
								}
								break;
								
								case "1100": 
								if(((int)$years[$i])%4==0)
								{
									echo "True";
									echo"<br>";
								}
								else
								{
									echo "False";
									echo"<br>";
								}
								break;
								
								default:
								break;
						}
						
						
				}
				echo"<hr>";
				echo'Delimit:';
				foreach($years as $value)
				{
					if(((int)$value)%4==0)
						echo " True";
					else
						echo " False";
				}
				
				}
    }

	?>