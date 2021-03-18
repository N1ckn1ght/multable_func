<?php
	
	function multable($width, $height)
	{
		$result = '<table border=1px>';
		
		for ($i = 0; $i <= $height; $i++)
		{
			$result .= '<tr>';
			
			for ($j = 0; $j <= $width; $j++)
			{
				if ($i == 0)
				{
					if ($j == 0)
					{
						$result .= '<td width=25 height=25 align=center bgcolor=800000</td>';
					}
					else
					{
						$result .= '<td width=25 height=25 align=center bgcolor=FFCB9C>'.$j.'</td>';
					}
				}
				else if ($j == 0)
				{
					$result .= '<td width=25 height=25 align=center bgcolor=FFCB9C>'.$i.'</td>';
				}
				else if ($j == $j)
				{
					$result .= '<td width=25 height=25 align=center bgcolor=F6FC92>'.$i * $j.'</td>';
				}
				else
				{
					$result .= '<td width=25 height=25 align=center>'.$i * $j.'</td>';
				}
			}
		}
		
		$result .= '</table>';
		return $result;
	}

	include 'index.php';
	
	$width = 10;
	$height = 10;
	
	if (!empty($_POST['width']))
	{
		$width = $_POST['width'];
	}
	if (!empty($_POST['height']))
	{
		$height = $_POST['height'];
	}
	
	echo multable($width, $height);
?>