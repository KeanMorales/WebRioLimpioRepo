<?php
	
	require_once('../motor_de_inferencias/phprules/phprules.php');

class ActividadGanadera extends Fact
{
	
	var $idCapa;
	var $masaNitrogenoPromedio;
	var $numeroAnimales;
	

		function __construct()
		{
				$this->masaNitrogenoPromedio=0;
				
				$this->numeroAnimales=0;
	
		}
	
	
	function setIdCapa($idCapa)
		{  
				$this->idCapa=$idCapa;
				
				
		}
		
		
		
		function setMasaNitrogenoPromedio($masaNitrogeno)
		{  
				$this->masaNitrogenoPromedio=$masaNitrogeno;
				
				
		}
		
		
		function setNumeroAnimales($numeroAnimales)
		{  
				$this->numeroAnimales=$numeroAnimales;
				
				
		}
		
			
		function getIdCapa()
		{  
				return $this->idCapa;
				
				
		}
		
		function getNumeroAnimales()
		{  
				 return $this->numeroAnimales;
				
				
		}
		
		
		function getMasaNitrogenoPromedio()
		{  
				 return $this->masaNitrogenoPromedio;
				
				
		}
		
		
		
		
		
		
		
		
	

}

?>