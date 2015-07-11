<?php
$sql = "SELECT NoOfStudents,CostOfSchools,Responsiveness,Support,TimeLine,Intake,FreqND,Collaboration  FROM school";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cost_per_student = ((6000-$row["CostOfSchools"]/$row["Intake"])/900)*rc;
        $cost_per_student_i = 10*rc;

        $timeline =  $row["Timeline"]*2*tr;
        $timeline_i =  10*tr;

        $responsiveness = $row["Responsiveness"]/4)*rr;
        $responsiveness_i = 10*rr;

        if($row["Support"]=="FULL")
        $support = 10*sr;
        else if($row["Support"]=="MODERATE")
        $support = 5*sr;
        else
        $support = 0;
        $support_i = 10*sr;

        if($row["FreqND"]>=75)
        $frequency = 2.5*fr;
        else if ($row["FreqND"]<75 && $row["FreqND"]>50)
        $frequency = 5*fr; 
        else if($row["FreqND"]<50 && $row["FreqND"] >=25)
        $frequency = 7.5*fr; 
        else
        $frequency = 10*fr;
        $frequency_i = 10*fr;

        if($row["Collaboration"]=="NGO");
        $collaboration = 10*cr;
        else if($row["Collaboration"]=="CORPORATE");
        $collaboration = 7.5*cr;
        else
        $collaboration = 5*cr;
        $collaboration_i = 10*cr;

        $result = ($cost_per_student + $timeline + $responsiveness + $support + $frequency + $collaboration )/($cost_per_student_i + $timeline_i + $responsiveness_i + $support_i + $frequency_i + $collaboration_i)*100 ;

        
        $coste =  ($cost_per_student/$cost_per_student_i)*10;
        $time = ($timeline/$timeline_i)*10;
        $respc = ($responsiveness/$responsiveness_i);
        $disr = ($frequency/$frequency_i)*10;
        $coll = ($collaboration/$collaboration_i);
        $suppor = ($support/$support_i)*10;
        $query = "INSERT INTO solution (coste,time,respc,disr,coll,support) VALUES ('$coste','$time','$respc','$disr','$coll','$suppor');


    }
} else {
    echo "0 results";
?>