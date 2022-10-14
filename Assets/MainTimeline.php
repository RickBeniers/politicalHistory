<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="MainTmelineStyle.css?v=012" type="text/css">
    <?php include 'MainTimelineFunctions.php'?>
</head>
<body>
<header id="UpperContent"></header>
<div id="CentreContent">
    <div id="TimelineInfoDisplay">
        <div class="outerInfoDisplayBox">
            <div class="innerInfoDisplayBox">
                <div class="widthInfoDisplayBox" >
                    <div class="headOfStateTitleDiv titleDivSpecifics"></div>
                    <div class="headOfGovermentTitleDiv titleDivSpecifics"></div>
                </div>
                <div class="widthInfoDisplayBox">
                    <div class="congressChamberSpeakerTitleDiv"></div>
                    <div class="chamber01SeatDistributionHolder">
                        <div class="congressSeatDistributionDiv leftChamber01SeatDistributionDiv"></div>
                        <div class="congressSeatDistributionDiv rightChamber01SeatDistributionDiv"></div>
                    </div>
                </div>
                <div class="widthInfoDisplayBox">
                    <div class="congressChamberSpeakerTitleDiv"></div>
                    <div class="chamber02SeatDistributionHolder">
                        <div class="congressSeatDistributionDiv leftChamber02SeatDistributionDiv"></div>
                        <div class="congressSeatDistributionDiv rightChamber02SeatDistributionDiv"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="TimelineBox">
        <div class="TimelineRulerHor"></div>
        <?php automatedTimelineCreator(8, 2000); ?>
    </div>
</div>
<footer id="LowerContent"></footer>
</body>
</html>