<div class="row" >
    <div class="col-lg-12 section-title" id="conference-title">
        <h1>Conference Info</h1>
    </div>
</div>

<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
    case '':
        include_once 'conference/index.php';
        break;

    case 'socialevents':
        include_once 'conference/socialevents.php';
        break;

    case 'location':
        include_once 'conference/location.php';
        break;

    case 'policies':
        include_once 'conference/policies.php';
        break;

    case 'invitation':
        include_once 'conference/invitation.php';
        break;

    case 'accommodation':
        include_once 'conference/accommodation.php';
        break;

    case 'dresscode':
        include_once 'conference/dresscode.php';
        break;

    case 'schedule':
        include_once 'conference/schedule.php';
        break;

    }
?>
