<?php




$animal = "safas";
@dogs = 100;
print $$animall 





$fruits = array('Apples', 'Tomatoes', 'Bananas', 'Dates');

print "$fruits\n";

	echo "hi";

	echo "this are " .$fruits[0] . " , " .$fruits[1] . " , " . $fruits[2] . ".";
	echo count($fruits);

	$fruits = array_pad($fruits, 10, '');

$lc = array_map('strtolower', $fruits);
print_r($lc);

$fruitsCollection = $fruits;
$fruit = "Apples";

array
	if (in_array($fruit, $fruits))
	{
		echo "Got it";
	}
	
	else 
	{
		echo "want it";	
	}



//conversion

$string = join(',', $fruits);


/*
class LittleCalendar {
	
	protected $monthToUse;
	
	protected $prepared = false;
	
	protected $days = array();
	
	public function __construct($month, $year) {
		
		$this ->monthToUse = DateTime::createFromFormat('Y-m|',
														sprintf("%04d-%02d",
														$year, $month)); 
		$this->prepare();
		
	}
	
	protected function prepare(){
		// Build up an array of information about each day
		// in the month including appropriate padding at the
		// beginning and end
		// First, days of the week across the first row
	
		
	foreach (array('Su', 'Mo','Tu','We','Th','Fr','Sa') as $dow) {
				$endOfRow = ($dow == 'Sa');
				$this->days[] = array('type' => 'dow',
				'label' => $dow,
				'endOfRow' => $endOfRow);
			
	}
		
		
	for ($i = 0, $j = $this->monthToUse->format('w'); $i< $j; $i++) 
	{
		
	//one item for each day in the month.
	$today = date('Y-m-d');
	$days = new DatePeriod($this->monthToUse, , new DateInterval('P1D'),
							$this->monthToUse->format('t') - 1);
	
	foreach ($days as $day){
			
		$isToday = ($day ->format('Y-m-d') == $today);
		$endOfRow = ($day->format('w')) == 6); //other days
		$this->days[] = array('type' => 'day',
				'label' => $day->format('j'),
				'today' => $isToday,
				'endOfRow' => $endOfRow);
		}
		
		if (! $endOfRow) {
			for ($i=0, $j= 6 - $day->format('w'); $i<$j; $i++)
			{
				$this->days[] = array('type' => 'blank');
				
			}
			
		}
		}

		public function html($opts = array()){
			
			if(! isset($opts['id'])) {
				$opts['id'] = 'calendar';
			}
			if (! isset($opts['month_link'])){
				$opts['month_link'] = 
					'a href="'.htmlentities($_SERVER['PHP_SELF']) . '?' . 
					'month=%d&amp;year = %d">%s</a>';
				
			}
				$classes = array();
				foreach (array('prev', 'month', 'next', 'weekday', 'blank', 'day', 'today')
				as $class){
					if (isset($opts['class']) && isset($opts['class'])) {
						$classes[$class] = $opts['class'][$class];
					}
			else 	{
				$classes[$class] = $class;
					}		
			
				}
				
				$prevMonth = clone $this ->monthToUse;
				$prevMonth -> modify("-1 month");
				$prevMonthLink = sprintf($opts['month_link'],
											$nextMonth ->format('m'),
											$nextMonth -> format('y')
											'&raquo;');
				
				
				$html = '<table id = "' .htmlentities($opts['id']).'">
						<tr>
						<td class = "' .htmlentities($classes['prev']).'">'.
						$prevMonthLink . '<td>
								<td class="'.htmlentities($classes['month']).'" colspan="5">'.
				$this->monthToUse->format('F Y') .'</td>
						
						<td class="'.htmlentities($classes['next']).'">' .
				$nextMonthLink . '</td>
				</tr>';

				$html .= '<tr>';
				$lastDayIndex = count($this->days) - 1;
				
				foreach ($this->days as $i => $day) {
				switch ($day['type']) {
				case 'dow':

				$class = 'weekday';
				$label = htmlentities($day['label']);

				break;
				case 'blank':

				$class = 'blank';
				$label = '&nbsp;';
				break;
				case 'day':
				
				$class = $day['today'] ? 'today' : 'day';
				$label = htmlentities($day['label']);

				break;
				}
				$html . = '<td class = "' . htmlentities($classes[$class]). '">'.
						
						$label . '<td>';
				
				if (isset($day['endOfRow']) && $day['endOfRow']) 
				{
					$html . = "</tr>\n";
					if ($i != $lastDayndex)
					{
						$html . = '<tr>';
						
					}
				}
				
			}
			
			$html . = '</table>';
			return $html;
			
		}
		
	public function text() {
$lineLength = strlen('Su Mo Tu We Th Fr Sa');
$header = $this->monthToUse->format('F Y');
$headerSpacing = floor(($lineLength - strlen($header))/2);
$text = str_repeat(' ', $headerSpacing) . $header . "\n";
foreach ($this->days as $i => $day) {
switch ($day['type']) {
case 'dow':
$text .= sprintf('% 2s', $day['label']);
break;
case 'blank':
$text .= ' ';
break;
case 'day':
$text .= sprintf("% 2d", $day['label']);
break;
}
$text .= (isset($day['endOfRow']) && $day['endOfRow']) ? "\n" : " ";
}
if ($text[strlen($text)-1] != "\n") {
$text .= "\n";
}
return $text;
}
}


//date
//$jd is 2342423, the Julien calendar'

$jd = gregoriantojd(3,3,1878);

$gregorian = cal_from_jd($jd, CAL_GREGORIAN);
echo $jd;


*/
