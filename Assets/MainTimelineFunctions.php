<?php
function automatedTimelineCreator($totalYearsPar, $StartYearPar){
    $StartYear = $StartYearPar;
    for($i = 1; $i <= $totalYearsPar; $i++){
        $StartYear++;
        //create HTML elements for 1 years worth
        echo '<div class="OneYearTimelineBlock">
                <div class="TimelineVerSticks YearIndication YearIndicatorPosition"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <h4 class="YearTextIndicator">'; print($StartYear);
        echo '</h4>
            </div>';
    }
}
function automatedInfoBoxCreator($totalTimeSpanPar){
    for($i = 1; $i <= $totalTimeSpanPar; $i++){

    }
}
?>

