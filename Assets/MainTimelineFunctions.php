<?php
function automatedTimelineCreator($totalYearsPar, $StartYearPar){
    $StartYear = $StartYearPar;
    echo '<script>var lineWidth=0;</script>';
    for($i = 1; $i <= $totalYearsPar; $i++){
        //create HTML elements for 1 years worth
        echo '<script>lineWidth=lineWidth+100;</script>';
        echo '<div class="OneYearTimelineBlock">
                <div class="TimelineVerSticks YearIndication YearIndicatorPosition"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <h4 class="YearTextIndicator">'; print($StartYear);
        echo '</h4>
            </div>';
        $StartYear++;
        echo '<script>document.getElementById("HorizontalLine").style.width=lineWidth+"px";
        //console.log(document.getElementById("HorizontalLine").style.width)</script>';
    }
}
function automatedInfoBoxCreator($totalTimeSpanPar){
    for($i = 1; $i <= $totalTimeSpanPar; $i++){
        echo'<div class="widthInfoDisplayBox" >
                    <div class="headOfStateTitleDiv titleDivSpecifics">

                    </div>
                    <div class="headOfGovermentTitleDiv titleDivSpecifics"></div>
                </div>
                <div class="widthInfoDisplayBox">
                    <div class="congressChamberSpeakerTitleDiv leftChamber01SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay">Title + name</h4>
                    </div>
                    <div class="congressChamberSpeakerTitleDiv rightChamber01SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay">Title + name</h4>
                    </div>
                    <div class="chamber01SeatDistributionHolder">
                        <div class="congressSeatDistributionDiv leftChamber01SeatDistributionDiv"></div>
                        <div class="congressSeatDistributionDiv rightChamber01SeatDistributionDiv"></div>
                    </div>
                </div>
                <div class="widthInfoDisplayBox">
                    <div class="congressChamberSpeakerTitleDiv leftChamber02SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay">Title + name</h4>
                    </div>
                    <div class="congressChamberSpeakerTitleDiv rightChamber02SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay">Title + name</h4>
                    </div>
                    <div class="chamber02SeatDistributionHolder">
                        <div class="congressSeatDistributionDiv leftChamber02SeatDistributionDiv"></div>
                        <div class="congressSeatDistributionDiv rightChamber02SeatDistributionDiv"></div>
                    </div>
                </div>';
    }
}
?>

