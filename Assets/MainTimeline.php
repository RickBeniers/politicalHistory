<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="MainTmelineStyle.css?v=027" type="text/css">
    <?php include 'MainTimelineFunctions.php'?>
</head>
<body id="body">
<?php createCookies(); ?>
<header id="UpperContent"></header>
<div id="CentreContent">
    <div id="TimelineInfoDisplay">
        <div class="outerInfoDisplayBox">
            <?php automatedInfoBoxCreator(1); ?>
        </div>
    </div>
    <div id="TimelineBox">
        <div class="TimelineRulerHor" id="HorizontalLine"></div>
        <div class="timeLineYearsInLine">
            <?php automatedTimelineCreator(10, 2000); ?>
        </div>
    </div>
</div>
<footer id="LowerContent"></footer>
</body>
</html>