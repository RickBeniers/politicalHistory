<?php
include 'Database.php';
$chamberDistributionDivIdCounter = 1;

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
    global $chamberDistributionDivIdCounter;
    $IdVariableStringP1 = "firstPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    $IdVariableStringP2 = "secondPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    echo'<div class="ChamberDistribution" id="'. $IdVariableStringP1 .'">
                <h4 class="CongressSessionTickerPosition" style="left: 75px;">Session</h4>
            </div>
            <div class="ChamberDistribution" id="'. $IdVariableStringP2 . '">
            </div>
            <script type="text/javascript">
            //cookie decoding function
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
                //assign the values stored in cookies into new variables
                var percentageOfSeatsP01 = getCookie("percentageOfSeatsP01UL");
                var newpercentageOfSeatsP01 = percentageOfSeatsP01 + "%";
                //console.log(newpercentageOfSeatsP01);
                var percentageOfSeatsP02 = getCookie("percentageOfSeatsP02UL");
                var newpercentageOfSeatsP02 = percentageOfSeatsP02 + "%";
                //console.log(newpercentageOfSeatsP02);
                //change the height of the 2 seat distribution divs
                document.getElementById("'.$IdVariableStringP1.'").style.setProperty("--verticalLength", newpercentageOfSeatsP01);
                document.getElementById("'.$IdVariableStringP2.'").style.setProperty("--verticalLength", newpercentageOfSeatsP02);
                //show the top-border of the lower div to create a divider between the 2 divs
                document.getElementById("'.$IdVariableStringP2.'").style.borderTop = "thin solid black";
            </script>';
    //print($chamberDistributionDivIdCounter);
    $chamberDistributionDivIdCounter++;
    //print($chamberDistributionDivIdCounter);
}
function automatedRightFirstChamberSession(){
    global $chamberDistributionDivIdCounter;
    $IdVariableStringP1 = "firstPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    $IdVariableStringP2 = "secondPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    echo'<div class="ChamberDistribution" id="'.$IdVariableStringP1.'">
                <h4 class="CongressSessionTickerPosition" style="left: 75px;">Session</h4>
            </div>
            <div class="ChamberDistribution" id="'.$IdVariableStringP2.'">
            </div>
            <script type="text/javascript">
            //cookie decoding function
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
                //assign the values stored in cookies into new variables
                var percentageOfDistributedSeatsP1UR = getCookie("percentageOfSeatsP01UR");
                var NewpercentageOfDistributedSeatsP1UR = percentageOfDistributedSeatsP1UR + "%";
                var percentageOfDistributedSeatsP2UR = getCookie("percentageOfSeatsP02UR");
                var NewpercentageOfDistributedSeatsP2UR = percentageOfDistributedSeatsP2UR + "%";
                //console.log(NewpercentageOfDistributedSeatsP1UR);
                //change the height of the 2 seat distribution divs
                document.getElementById("'.$IdVariableStringP1.'").style.setProperty("--verticalLength", NewpercentageOfDistributedSeatsP1UR);
                document.getElementById("'.$IdVariableStringP2.'").style.setProperty("--verticalLength", NewpercentageOfDistributedSeatsP2UR);
                //show the top-border of the lower div to create a divider between the 2 divs
                document.getElementById("'.$IdVariableStringP2.'").style.borderTop = "thin solid black";
            </script>';
    $chamberDistributionDivIdCounter++;
}
function automatedLeftSecondChamberSession(){
    global $chamberDistributionDivIdCounter;
    $IdVariableStringP1 = "firstPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    $IdVariableStringP2 = "secondPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    echo'<div class="ChamberDistribution" id="'.$IdVariableStringP1.'">
         </div>
         <div class="ChamberDistribution" id="'.$IdVariableStringP2.'">
         </div>
         <script type="text/javascript">
         //cookie decoding function
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
                //assign the values stored in cookies into new variables
                var PercentageOfDistributedSeatsP1LL = getCookie("percentageOfSeatsP01LL");
                var NewpercentageOfDistributedSeatsP1LL = PercentageOfDistributedSeatsP1LL + "%";
                var PercentageOfDistributedSeatsP2LL = getCookie("percentageOfSeatsP02LL");
                var NewpercentageOfDistributedSeatsP2LL = PercentageOfDistributedSeatsP2LL + "%";
                //change the height of the 2 seat distribution divs
                document.getElementById("'.$IdVariableStringP1.'").style.setProperty("--verticalLength", NewpercentageOfDistributedSeatsP1LL);
                document.getElementById("'.$IdVariableStringP2.'").style.setProperty("--verticalLength", NewpercentageOfDistributedSeatsP2LL);
                //show the top-border of the lower div to create a divider between the 2 divs
                document.getElementById("'.$IdVariableStringP2.'").style.borderTop = "thin solid black";
         </script>';
    $chamberDistributionDivIdCounter++;
}
function automatedRightSecondChamberSession(){
    global $chamberDistributionDivIdCounter;
    $IdVariableStringP1 = "firstPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    $IdVariableStringP2 = "secondPartyDistributionOfSeats" . $chamberDistributionDivIdCounter;
    echo'<div class="ChamberDistribution" id="'.$IdVariableStringP1.'">
         </div>
         <div class="ChamberDistribution" id="'.$IdVariableStringP2.'">
         </div>
         <script type="text/javascript">
         //cookie decoding function
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
                //assign the values stored in cookies into new variables
                var PercentageOfDistributedSeatsP1LR = getCookie("percentageOfSeatsP01LR");
                var NewpercentageOfDistributedSeatsP1LR = PercentageOfDistributedSeatsP1LR + "%";
                var PercentageOfDistributedSeatsP2LR = getCookie("percentageOfSeatsP02LR");
                var NewpercentageOfDistributedSeatsP2LR = PercentageOfDistributedSeatsP2LR + "%";
                //change the height of the 2 seat distribution divs
                document.getElementById("'.$IdVariableStringP1.'").style.setProperty("--verticalLength", NewpercentageOfDistributedSeatsP1LR);
                document.getElementById("'.$IdVariableStringP2.'").style.setProperty("--verticalLength", NewpercentageOfDistributedSeatsP2LR);
                //show the top-border of the lower div to create a divider between the 2 divs
                document.getElementById("'.$IdVariableStringP2.'").style.borderTop = "thin solid black";
         </script>';
    $chamberDistributionDivIdCounter++;
}
function createCookies(){
    //seat distribution in percentage for upper left div
    $percentageOfSeatsP01UL = 29;
    $percentageOfSeatsP02UL = 69;
    //seat distribution in percentage for upper right div
    $percentageOfSeatsP01UR = 59;
    $percentageOfSeatsP02UR = 39;
    //seat distribution in percentage for lower left div
    $percentageOfSeatsP01LL = 34;
    $percentageOfSeatsP02LL = 64;
    //seat distribution in percentage for lower right div
    $percentageOfSeatsP01LR = 49;
    $percentageOfSeatsP02LR = 49;

    //Create cookies for seat distribution percentage of upper left div(UL)
    $cookie01Name = "percentageOfSeatsP01UL";
    $cookie01Value = $percentageOfSeatsP01UL;
    setcookie($cookie01Name, $cookie01Value);
    $cookie02Name = "percentageOfSeatsP02UL";
    $cookie02Value = $percentageOfSeatsP02UL;
    setcookie($cookie02Name, $cookie02Value);
    //Create cookies for seat distribution percentage of upper right div(UR)
    $cookie03Name = "percentageOfSeatsP01UR";
    $cookie03Value = $percentageOfSeatsP01UR;
    setcookie($cookie03Name, $cookie03Value);
    $cookie04Name = "percentageOfSeatsP02UR";
    $cookie04Value = $percentageOfSeatsP02UR;
    setcookie($cookie04Name, $cookie04Value);
    //Create cookies for seat distribution percentage of lower left div(LL)
    $cookie05Name = "percentageOfSeatsP01LL";
    $cookie05Value = $percentageOfSeatsP01LL;
    setcookie($cookie05Name, $cookie05Value);
    $cookie06Name = "percentageOfSeatsP02LL";
    $cookie06Value = $percentageOfSeatsP02LL;
    setcookie($cookie06Name, $cookie06Value);
    //Create cookies for seat distribution percentage of lower right div(LR)
    $cookie07Name = "percentageOfSeatsP01LR";
    $cookie07Value = $percentageOfSeatsP01LR;
    setcookie($cookie07Name, $cookie07Value);
    $cookie08Name = "percentageOfSeatsP02LR";
    $cookie08Value = $percentageOfSeatsP02LR;
    setcookie($cookie08Name, $cookie08Value);
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