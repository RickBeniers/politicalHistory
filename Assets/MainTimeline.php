<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="MainTmelineStyle.css?v=022" type="text/css">
    <?php include 'MainTimelineFunctions.php'?>
</head>
<body id="body">
<header id="UpperContent"></header>
<div id="CentreContent">
    <div id="TimelineInfoDisplay">
        <div class="outerInfoDisplayBox">
            <?php automatedInfoBoxCreator(4); ?>
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