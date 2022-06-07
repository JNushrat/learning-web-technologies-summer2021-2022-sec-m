<?php
  function search ($search)
  {
  $array = {12,14,16,18};
  for($i=0; $i<sizeof($array); $i++)
  {
	  if($array[$i]== search)
	  {
		  echo "Number". $search "was found in the array".\r\n;
		  return 0;
	  }
  }
  else 
	  {
		  echo "not found".\r\n;
	  } 
  }
  search(16);
?>