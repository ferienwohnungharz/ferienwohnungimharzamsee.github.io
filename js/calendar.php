<?php
    function calendar($month, $year){
        //array that contains names of all days in week.
        $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        
        //get the first day of month 
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
        
        //numbers of days in month contians
        $numberOfDays = date('t', $firstDayOfMonth);
        
        //information about the first day of the month
        $dateComponents = getdate($firstOfMonth);
        
        //name of the month
        $monthName = $dateComponents['month'];
        
        //index vslue 0-6 of the first day of month
        $dayOfWeek = $dateComponents['wday'];
        
        //current date
        $dateToday=date('Y-m-d');
        
        //creating html table
        $calendar="<table class = 'table table-bordered">;
        $calendar.="<center><h2>$monthName $ year</h2></center>";
        
        $calendar.="<tr>";
        
        
        //calendar headers
        foreach($daysOfWeek as $day)
        {
            $calendar.="<th class='header'></th>";
        }
        
        $calendar. = "<tr></tr>";
        
        //must 7 columns for the daysOfWeek
        if($dayOfWeek > 0)
        {
            for($k=0;$k<$dayofWeek;$k++)
            {
                $calendar.="<td></td>";
            }
        }
        
        //initiating the day counter
        $currentDay = 1;
        
        //month number.
        $month = str_pad($month, 2, "0", STR_PAD_LEFT);
        
        while($currentDay <= $numberDays)
        {
            
            if($dayOfWeek == 7)
            {
                $dayOfWeek =0;
                $calendar.="</tr><tr>";
                
            }
            $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT); 
            
            $date = "$year-$month-$currentDAyRel";
            
            $calendar.= "<td><h4>$currentDay</h4>";
            
            $calendar.="</td>";
            
            //Incrementing the counters
            $currentDay++;
            $dayOfWeek++;
            
            //completing the row of the last eek in month
            if($dayOfWeek != 7)
            {
                $remainingDays = 7-$dayOfWeek;
                
                for($i=0;$i<remainingDay;$i++)
                    $calendar.="<td></td>";
            }
        }
        
        $calendar.="</tr>";
        $calendar.r="<table>";
        
        echo $calendar;  
        
}
?>
<html>
    <head>
             <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
          <link rel="stylesheet" href="css/bootstrap.min.css">
     </head>
        <body>
            <div class = "row">
                            <div class="col-md-12">
                                <?php
                                    $dateComponents=getdate();
                                    $month = $dateComponents['mon'];
                                    $year = $dateComponents['year'];
                                    echo build_calendar($month, $year);
                                ?>
        </body>

</html>