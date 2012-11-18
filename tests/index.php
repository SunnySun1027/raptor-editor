<!doctype html>
<html>
<head>
    <?php if (isset($_GET['min'])): ?>
        <script type="text/javascript" src="../packages/raptor.0deps.min.js"></script>
    <?php else: ?>
        <script type="text/javascript" src="../packages/raptor.0deps.js"></script>
    <?php endif; ?>
    <link type="text/css" rel="stylesheet" href="css/diff.css"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/helpers.js"></script>
	<script type="text/javascript" src="js/diff.js"></script>
	<script type="text/javascript" src="js/tester.js"></script>
</head>
<body>
    <a href="?js">Test JS</a>
    <a href="?min">Test Compiled JS</a>
    <div class="test-results"></div>
    <div class="test-templates">
        <?php
            foreach (glob(__DIR__ . '/templates/*.html') as $file) {
                include $file;
            }
        ?>
    </div>
    <div class="dummy-editor"></div>
</body>
</html>
