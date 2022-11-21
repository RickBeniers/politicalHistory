<?php
include 'Database.php';
function automatedTimelineCreator($totalYearsPar, $StartYearPar){
    $StartYear = $StartYearPar;
    echo'<script>var lineWidth=0;</script>';
    for($i = 1; $i <= $totalYearsPar; $i++){
        //create HTML elements for 1 years worth
            echo'<script>lineWidth=lineWidth+100;</script>';
            echo'<div class="OneYearTimelineBlock">
                <div class="TimelineVerSticks YearIndication YearIndicatorPosition"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <div class="TimelineVerSticks SeasonsIndication" style="margin-left: 22.5px"></div>
                <h4 class="YearTextIndicator">';
            print($StartYear);
            echo'</h4>
            </div>';
            $StartYear++;
            echo'<script>document.getElementById("HorizontalLine").style.width=lineWidth+"px";
        //console.log(document.getElementById("HorizontalLine").style.width)</script>';
    }
}
function automatedFirstChamberSession(){
    $percentageOfSeatsP01 = 30;
    $percentageOfSeatsP02 = 70;

    $cookie01Name = "percentageOfSeatsP01";
    $cookie01Value = $percentageOfSeatsP01;
    setcookie($cookie01Name, $cookie01Value);
    $cookie02Name = "percentageOfSeatsP02";
    $cookie02Value = $percentageOfSeatsP02;
    setcookie($cookie02Name, $cookie02Value);
    //echo $_COOKIE[$cookie01Name];
    //echo $_COOKIE[$cookie02Name];
    echo'<div class="ChamberDistribution" id="firstPartyDistributionOfSeats">
                <h4 class="CongressSessionTickerPosition" style="left: 75px;">Session</h4>
            </div>
            <div class="ChamberDistribution" id="secondPartyDistributionOfSeats">
            </div>
            <script type="text/javascript">
            var newpercentageOfSeatsP01 = "30%"
            console.log(newpercentageOfSeatsP01);
            //var percentageOfSeatsP02 = getCookie("percentageOfSeatsP02");
            var newpercentageOfSeatsP02 = "70%"
            console.log(newpercentageOfSeatsP02);
            
            document.getElementById("firstPartyDistributionOfSeats").style.setProperty("--verticalLength", newpercentageOfSeatsP01);
            document.getElementById("secondPartyDistributionOfSeats").style.setProperty("--verticalLength", newpercentageOfSeatsP02);
            </script>';

}
function automatedSecondChamberSession(){
    echo'<div class="ChamberDistribution"></div>
         <div class="ChamberDistribution"></div>';
}
function automatedInfoBoxCreator($totalTerms){
    for($i = 1; $i <= $totalTerms; $i++){
        //call SQL connection
        $sql = 'SELECT O.Title, P.FirstName, P.LastName, O.PartyAffiliation
                FROM persons AS P
                JOIN occupation AS O ON O.PersonId = P.PersonId;';
        global $connection;
        $result = mysqli_query($connection, $sql);
        //create HTML elements for 1 years worth
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $firstname = $row["FirstName"];
            $lastname = $row["LastName"];
            $title = $row["Title"];
            $partyAffiliation = $row["PartyAffiliation"];

            echo '<div class="innerInfoDisplayBox">
                <div class="widthInfoDisplayBox" >
                    <div class="headOfStateTitleDiv titleDivSpecifics">
                        <div class="headOfStateImgDiv"><img ></div>
                        <div class="headOfStateTitleDisplay">
                            <h4 class="titleTekstPosition">';print($firstname);print(" " . $lastname);echo '</h4>
                            <h4 class="titleTekstPosition">';print($title);echo'</h4>
                            <h4 class="titleTekstPosition">';print($partyAffiliation);echo'</h4>
                        </div>
                    </div>
                    <div class="headOfGovermentTitleDiv titleDivSpecifics">
                        <div class="headOfGovermentImgDiv"><img ></div>
                        <div class="headOfGovermentTitleDisplay">
                            <h4 class="titleTekstPosition">firstname + lastname</h4>
                            <h4 class="titleTekstPosition">title</h4>
                            <h4 class="titleTekstPosition">party affiliation</h4>
                        </div>
                    </div>
                </div>
                <div class="widthInfoDisplayBox">
                    <div class="congressChamberSpeakerTitleDiv leftChamber01SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay">Title + name</h4>
                    </div>
                    <div class="congressChamberSpeakerTitleDiv rightChamber01SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay"></h4>
                    </div>
                    <div class="chamber01SeatDistributionHolder">
                        <div class="congressSeatDistributionDiv leftChamber01SeatDistributionDiv">
                            '; automatedFirstChamberSession(); echo'
                        </div>
                        <div class="congressSeatDistributionDiv rightChamber01SeatDistributionDiv">
                            '; automatedFirstChamberSession(); echo'
                        </div>
                    </div>
                </div>
                <div class="widthInfoDisplayBox">
                    <div class="congressChamberSpeakerTitleDiv leftChamber02SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay">Title + name</h4>
                    </div>
                    <div class="congressChamberSpeakerTitleDiv rightChamber02SpeakerTitleDiv">
                        <h4 class="speakerTitleDisplay"></h4>
                    </div>
                    <div class="chamber02SeatDistributionHolder">
                        <div class="congressSeatDistributionDiv leftChamber02SeatDistributionDiv">
                            '; automatedSecondChamberSession(); echo'
                        </div>
                        <div class="congressSeatDistributionDiv rightChamber02SeatDistributionDiv">
                            '; automatedSecondChamberSession(); echo'
                        </div>
                    </div>
                </div>
            </div>';
        }
    }
}
?>