<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="MainTmelineStyle.css?v=020" type="text/css">
    <?php include 'MainTimelineFunctions.php'?>
</head>
<body id="body">
<header id="UpperContent"></header>
<div id="CentreContent">
    <div id="TimelineInfoDisplay">
        <div class="outerInfoDisplayBox">
            <div class="innerInfoDisplayBox">
                <div class="widthInfoDisplayBox" >
                    <div class="headOfStateTitleDiv titleDivSpecifics">
                        <div class="headOfStateImgDiv"><img ></div>
                        <div class="headOfStateTitleDisplay">
                            <h4 class="titleTekstPosition">firstname + lastname</h4>
                            <h4 class="titleTekstPosition">title</h4>
                            <h4 class="titleTekstPosition">party affiliation</h4>
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
                        <div class="congressSeatDistributionDiv leftChamber01SeatDistributionDiv"></div>
                        <div class="congressSeatDistributionDiv rightChamber01SeatDistributionDiv"></div>
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
                        <div class="congressSeatDistributionDiv leftChamber02SeatDistributionDiv"></div>
                        <div class="congressSeatDistributionDiv rightChamber02SeatDistributionDiv"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="TimelineBox">
        <div class="TimelineRulerHor" id="HorizontalLine"></div>
        <div class="timeLineYearsInLine">
            <?php automatedTimelineCreator(30, 2000); ?>
        </div>
    </div>
</div>
<footer id="LowerContent"></footer>
</body>
</html>