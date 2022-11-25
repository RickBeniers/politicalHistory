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
function automatedLeftFirstChamberSession(){
    echo'<div class="ChamberDistribution" id="firstPartyDistributionOfSeats">
                <h4 class="CongressSessionTickerPosition" style="left: 75px;">Session</h4>
            </div>
            <div class="ChamberDistribution" id="secondPartyDistributionOfSeats">
            </div>
            <script type="text/javascript">
                function getCookie(cname){
                    let name = cname + "=";
                    let decodedCookie = decodeURIComponent(document.cookie);
                    let ca = decodedCookie.split(";");
                    for(let i = 0; i < ca.length; i++){
                        let c = ca[i];
                        while(c.charAt(0) == " "){
                            c = c.substring(1);
                        }
                        if(c.indexOf(name) == 0){
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }
                var percentageOfSeatsP01 = getCookie("percentageOfSeatsP01UL");
                var newpercentageOfSeatsP01 = percentageOfSeatsP01 + "%";
                //console.log(newpercentageOfSeatsP01);
                var percentageOfSeatsP02 = getCookie("percentageOfSeatsP02UL");
                var newpercentageOfSeatsP02 = percentageOfSeatsP02 + "%";
                //console.log(newpercentageOfSeatsP02);
            
                //change the height of the 2 seat distribution divs
                document.getElementById("firstPartyDistributionOfSeats").style.setProperty("--verticalLength", newpercentageOfSeatsP01);
                document.getElementById("secondPartyDistributionOfSeats").style.setProperty("--verticalLength", newpercentageOfSeatsP02);
                //show the top-border of the lower div to create a divider between the 2 divs
                document.getElementById("secondPartyDistributionOfSeats").style.borderTop = "thin solid black";
            </script>';
}
function automatedRightFirstChamberSession(){
    echo'<div class="ChamberDistribution" id="firstPartyDistributionOfSeats">
                <h4 class="CongressSessionTickerPosition" style="left: 75px;">Session</h4>
            </div>
            <div class="ChamberDistribution" id="secondPartyDistributionOfSeats">
            </div>
            <script type="text/javascript">
            </script>';
}
function automatedLeftSecondChamberSession(){
    echo'<div class="ChamberDistribution"></div>
         <div class="ChamberDistribution"></div>';
}
function automatedRightSecondChamberSession(){

}
function createCookies(){
    //seat distribution in percentage for upper left div
    $percentageOfSeatsP01UL = 30;
    $percentageOfSeatsP02UL = 70;
    //seat distribution in percentage for upper right div
    $percentageOfSeatsP01UR = 60;
    $percentageOfSeatsP02UR = 40;
    //seat distribution in percentage for lower left div
    $percentageOfSeatsP01LL = 35;
    $percentageOfSeatsP02LL = 65;
    //seat distribution in percentage for lower right div
    $percentageOfSeatsP01LR = 53;
    $percentageOfSeatsP02LR = 67;

    //Create cookies for seat distribution percentage of upper left div
    $cookie01Name = "percentageOfSeatsP01UL";
    $cookie01Value = $percentageOfSeatsP01UL;
    setcookie($cookie01Name, $cookie01Value);
    $cookie02Name = "percentageOfSeatsP02UL";
    $cookie02Value = $percentageOfSeatsP02UL;
    setcookie($cookie02Name, $cookie02Value);
    //Create cookies for seat distribution percentage of upper right div
    $cookie03Name = "percentageOfSeatsP01UR";
    $cookie03Value = $percentageOfSeatsP01UR;
    setcookie($cookie03Name, $cookie03Value);
    $cookie04Name = "percentageOfSeatsP02UR";
    $cookie04Value = $percentageOfSeatsP02UR;
    setcookie($cookie04Name, $cookie04Value);
}
function automatedInfoBoxCreator($totalTerms){
    createCookies();
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
                            '; automatedLeftFirstChamberSession(); echo'
                        </div>
                        <div class="congressSeatDistributionDiv rightChamber01SeatDistributionDiv">
                            '; automatedRightFirstChamberSession(); echo'
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
                            '; automatedLeftSecondChamberSession(); echo'
                        </div>
                        <div class="congressSeatDistributionDiv rightChamber02SeatDistributionDiv">
                            '; automatedRightSecondChamberSession(); echo'
                        </div>
                    </div>
                </div>
            </div>';
        }
    }
}
?>