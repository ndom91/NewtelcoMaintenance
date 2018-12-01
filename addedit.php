<!DOCTYPE html>
<?php
require('authenticate_google.php');
require_once('config.php');

global $dbhandle;

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="application-name" content="Newtelco Maintenance">
  <title>Newtelco Maintenance | Welcome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#67B246">
  <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#67B246">
  <link rel="manifest" href="manifest.json"></link>
  <link rel='stylesheet' href='assets/css/style.css'>

  <!-- font awesome -->
  <link rel="dns-prefetch" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Google font-->
  <link rel="dns-prefetch" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

  <!-- moment -->
  <script src="assets/js/luxon.min.js"></script>
  <script src="assets/js/moment.js"></script>
  <script src="assets/js/moment-duration-format.js"></script>
  <script src="assets/js/moment-timezone-with-data.js"></script>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <!-- select2 -->
  <script src="assets/js/select2_4.0.6-rc1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

  <!-- material design -->
  <link rel="stylesheet" href="assets/css/material.css">
  <script src="assets/js/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <!-- <link rel="stylesheet" href="https://storage.googleapis.com/non-spec-apps/mio-icons/latest/twotone.css"> -->

  <!--getmdl-select-->
  <script src="https://rawgit.com/MEYVN-digital/mdl-selectfield/master/mdl-selectfield.min.js"></script>
  <link rel="stylesheet" href="assets/css/mdl-selectfield.min.css">

  <!-- flatpickr -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/flatpickr_green.css">
  <script src="https://unpkg.com/flatpickr@4.5.2/dist/flatpickr.js"></script>

  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/b-1.5.4/b-colvis-1.5.4/b-html5-1.5.4/cr-1.5.0/fh-3.1.4/kt-2.5.0/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/b-1.5.4/b-colvis-1.5.4/b-html5-1.5.4/cr-1.5.0/fh-3.1.4/kt-2.5.0/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>

  <!-- OverlayScrollbars -->
  <link type="text/css" href="assets/css/OverlayScrollbars.css" rel="stylesheet"/>
  <script type="text/javascript" src="assets/js/OverlayScrollbars.js"></script>

  <!-- pace -->
  <script src="assets/js/pace.js"></script>

</head>
<body>
  <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header ">
      <header class="mdl-layout__header mdl-color--light-green-nt">
        <div class="mdl-layout__header-row">
          <a href="index.php"><img style="margin-right: 10px" src="assets/images/nt_square32_2_light2.png"/></a>
          <span class="mdl-layout-title">Maintenance</span>
          <div class="mdl-layout-spacer"></div>
          <div class="menu_userdetails">
            <button id="user-profile-menu" class="mdl-button mdl-js-button mdl-userprofile-button">
              <img class="menu_userphoto" src="<?php echo $token_data['picture'] ?>"/>
              <span class="mdl-layout-subtitle menumail menu_username"> <?php echo $token_data['email'] ?></span>
              <i class="fas fa-angle-down menuangle"></i>
            </button>
              <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                  for="user-profile-menu">
                <li class="mdl-menu__item">Some Action</li>
                <li class="mdl-menu__item">Another Action</li>
                <li disabled class="mdl-menu__item">Disabled Action</li>
                <a tabindex="2" class="usermenuhref" href="?logout"><li class="mdl-menu__item">Logout</li></a>
              </ul>
          </div>

        </div>
      </header>
      <?php
      if(isset($_POST['label']) || isset($_SESSION['label'])) {
        if(! empty($_POST['label'])) {
        $labelID = $_POST['label'];
        $_SESSION['label'] = $labelID;
        } else {
          $labelID = $_SESSION['label'];
        }
      } else {
        if(isset($_COOKIE['label'])) {
          $labelID = $_COOKIE['label'];
        } else {
          $labelID = '0';
        }
      }

      if ($labelID != '0') {
        $service3 = new Google_Service_Gmail($clientService);
        $results3 = $service3->users_labels->get($user,$labelID);
      }

      ?>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title"><img src="/assets/images/newtelco_black.png"/></span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.php"><i class="ndl-home"></i>  Home</a>
          <!-- <a class="mdl-navigation__link" href="userhome.php"><i class="ndl-face"></i>  <?php echo $token_data['name'] ?></a> -->
          <a class="mdl-navigation__link" href="overview.php"><i class="ndl-overview"></i>  Overview</a>
          <a class="mdl-navigation__link" href="incoming.php"><i class="ndl-ballot mdl-badge mdl-badge--overlap" data-badge="3"></i>  Incoming<div class="material-icons mdl-badge mdl-badge--overlap menuSubLabel2" data-badge="<?php if ($labelID != '0') { if ($results3['messagesTotal'] == 0) { echo "♥"; } else { echo $results3['messagesTotal']; }} else {  echo "♥"; } ?>"></div></a></a>
          <a class="mdl-navigation__link" href="group.php"><i class="ndl-group"></i>  Group <small class="menuSubLabel">maintenance</small></a>
          <a class="mdl-navigation__link" href="groupservice.php"><i class="ndl-group"></i>  Group <small class="menuSubLabel">service</small></a>
          <a class="mdl-navigation__link" href="addedit.php"><i class="ndl-createnew"></i></i>  Add</a>
          <a class="mdl-navigation__link" href="crm_iframe.php"><i class="ndl-work"></i>  CRM</a>
          <a class="mdl-navigation__link" href="settings.php"><i class="ndl-settings"></i>  Settings</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link menu_logout" href="?logout">
            <button id="menuLogout" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
              <i class="material-icons">exit_to_app</i>
            </button>
            <div class="mdl-tooltip  mdl-tooltip--top" data-mdl-for="menuLogout">
              Logout
            </div>
          </a>
        </nav>
      </div>
        <main class="mdl-layout__content">
          <div class="mdl-grid">

          <?php
            // Default Values (empty)
            $otitlestring = 'Add';
            $omaileingang = '';
            $oreceivedmail = '';
            $olieferant = '';
            $olieferantID = '';
            $oderenCIDid = '';
            $obearbeitetvon = '';
            $omaintenancedate = '';
            $ostartdatetime = '';
            $oenddatetime = '';
            $opostponed = '';
            $onotes = '';
            $ocal = '';
            $odone = '';
            $update = '0';
            $user = 'me';

            if(isset($_GET['update'])) {
              $update = '1';
            }

            if (isset($_GET['mid'])) {

              $activeID = $_GET['mid'];

              $mID_escape = mysqli_real_escape_string($dbhandle, $activeID);
              $mID_query = mysqli_query($dbhandle, "SELECT * FROM `maintenancedb` WHERE `id` LIKE $mID_escape");
              $mIDresult = mysqli_fetch_array($mID_query);

              $otitlestring = 'Edit';
              $omaintid = $mIDresult['id'];
              $omaileingang = $mIDresult['maileingang'];
              $oreceivedmail = $mIDresult['receivedmail'];
              $olieferant = $mIDresult['lieferant'];
              $oderenCIDid = $mIDresult['derenCIDid'];
              $obearbeitetvon = $mIDresult['bearbeitetvon'];
              $omaintenancedate = $mIDresult['maintenancedate'];
              $ostartdatetime = $mIDresult['startDateTime'];
              $oenddatetime = $mIDresult['endDateTime'];
              $opostponed = $mIDresult['postponed'];
              $onotes = $mIDresult['notes'];
              $oupdatedBy = $mIDresult['updatedBy'];
              $oupdatedAt = $mIDresult['updatedAt'];
              $ocal = $mIDresult['cal'];
              if ($mIDresult['done'] == 1) {
                $odone = 'checked';
              } else {
                $odone = '';
              }

              $newSDT = DateTime::createFromFormat("Y-m-d  H:i:s", $ostartdatetime);
              $newSDT = new DateTime($ostartdatetime);
              $newSDT->add(new DateInterval('PT1H'));
              $newSDT = $newSDT->format('Y-m-d  H:i:s'); // for example


              $newEDT = DateTime::createFromFormat("Y-m-d  H:i:s", $oenddatetime);
              $newEDT = new DateTime($oenddatetime);
              $newEDT->add(new DateInterval('PT1H'));
              $newEDT = $newEDT->format('Y-m-d  H:i:s'); // for example

            }
            if (isset($_GET['gmid'])) {

              $gmid = $_GET['gmid'];

              $service2 = new Google_Service_Gmail($clientService);

              function decodeBody($body) {
                  $rawData = $body;
                  $sanitizedData = strtr($rawData,'-_', '+/');
                  $decodedMessage = base64_decode($sanitizedData);
                  if(!$decodedMessage){
                      $decodedMessage = FALSE;
                  }
                  return $decodedMessage;
              }

              function get_email_domain($email) {
                $domain = substr(strrchr($email[0], "@"), 1);
                $result = preg_split('/(?=\.[^.]+$)/', $domain);
                return $domain;
              }

              function getHeader($headers, $name) {
                foreach($headers as $header) {
                  if($header['name'] == $name) {
                    return $header['value'];
                  }
                }
              }

              function stripHTML($html) {
                  $dom = new DOMDocument();
                  $dom->loadHTML($html);
                  $script = $dom->getElementsByTagName('script');
                  $remove = [];
                  foreach($script as $item) {
                    $remove[] = $item;
                  }
                  foreach ($remove as $item) {
                    $item->parentNode->removeChild($item);
                  }
                  $html = $dom->saveHTML();
                  return $html;
              }

              function getMessage2($service, $userId, $message_id) {
                try {
                      $msgArray = array();

                      $optParamsGet2['format'] = 'full';
                      $single_message = $service->users_messages->get($userId, $message_id,$optParamsGet2);

                      $payload = $single_message->getPayload();
                      $headers = $payload->getHeaders();
                      $snippet = $single_message->getSnippet();
                      $date = getHeader($headers, 'Date');
                      $subject = getHeader($headers, 'Subject');
                      $from = getHeader($headers, 'From');
                      $fromHTML = htmlentities($from);
                      if (($pos = strpos($fromHTML, "@")) !== FALSE) {
                        preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i", $fromHTML, $matches);
                        $fromAddress = $matches[0];
                        $domain = get_email_domain($matches[0]);
                      }



                      $msgArray[] = $date;
                      $msgArray[] = $domain;
                      $msgArray[] = $subject;
                      $msgArray[] = $fromHTML;
                      $msgArray[] = $date;

                      // With no attachment, the payload might be directly in the body, encoded.
                      $body = $payload->getBody();
                      $FOUND_BODY = decodeBody($body['data']);

                      // If we didn't find a body, let's look for the parts
                      if(!$FOUND_BODY) {
                          $parts = $payload->getParts();
                          foreach ($parts  as $part) {
                              if($part['body'] && $part['mimeType'] == 'text/html') {
                                  $FOUND_BODY = decodeBody($part['body']->data);
                                  break;
                              }
                          }
                      } if(!$FOUND_BODY) {
                          foreach ($parts  as $part) {
                              // Last try: if we didn't find the body in the first parts,
                              // let's loop into the parts of the parts (as @Tholle suggested).
                              if($part['parts'] && !$FOUND_BODY) {
                                  foreach ($part['parts'] as $p) {
                                      // replace 'text/html' by 'text/plain' if you prefer
                                      if($p['mimeType'] === 'text/plain' && $p['body']) {
                                          $FOUND_BODY = decodeBody($p['body']->data);
                                          break;
                                      }
                                  }
                              }
                              if($FOUND_BODY) {
                                  break;
                              }
                          }
                      }

                      $msgArray[] = $FOUND_BODY;

                  } catch (Exception $e) {
                      echo $e->getMessage();
                  }
                    return $msgArray;
                  }

                  $msgInfo = getMessage2($service2, $user, $gmid);

                  $otitlestring = 'Edit';
                  $omaileingang = $msgInfo[0];
                  $oreceivedmail = $gmid;
                  $olieferantID = $olieferant;

                  $lieferantNameQ =  mysqli_query($dbhandle, "SELECT companies.name FROM companies WHERE companies.id LIKE '$olieferantID'");
                  while ($row = mysqli_fetch_row($lieferantNameQ)) {
                      $olieferant = $row[0];
                  }
                  
                  if ($olieferant == '') {
                    $olieferant = $msgInfo[1];
                  }

                  $msubject = $msgInfo[2];
                  $mfrom = $msgInfo[3];
                  $mdate = $msgInfo[4];
                  $mbody = $msgInfo[5];

                  $emailBV = $token_data['email'];
                  if (($pos2 = strpos($emailBV, "@")) !== FALSE) {
                    $domainBV = substr($emailBV, strpos($emailBV, "@"));
                    $usernameBV = basename($emailBV, $domainBV);
                  }

                  $workers = array();
                  $workers[] = "ndomino";
                  $workers[] = "fwaleska";
                  $workers[] = "alissitsin";
                  $workers[] = "sstergiou";

                  if (($key = array_search($usernameBV, $workers)) !== false) {
                      unset($workers[$key]);
                      $workers = array_values($workers);
                  }

                  $derenCIDQ =  mysqli_query($dbhandle, "SELECT companies.name, kunden.derenCID, kunden.id FROM kunden LEFT JOIN companies ON kunden.kunde = companies.id WHERE companies.id LIKE '$olieferantID'") or die(mysqli_error($dbhandle));

                }

            ?>

        <!-- EDIT MODE -->

        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone" id="addEditDetails">

        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text"><?php echo $otitlestring ?> Maintenance Entry</h2>
            <div class="mdl-layout-spacer"></div>
            <button id="btnSave" style="display: inline; height: 44px; width: 44px; min-width: 44px !important; margin: 0 !important;" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
              <i class="material-icons">save</i>
            </button>
          </div>
          <div class="mdl-card__supporting-text">
            <small><?php if ($oupdatedBy != '') { echo 'Last updated by: <span class="updatedLabel">' . $oupdatedBy . '</span> at <span class="updatedLabel" id="updatedAtLabel">' . $oupdatedAt . '</span>';}?></small>
            <form action="#">
              <div class="mdl-grid">
              <input type="hidden" value="<?php echo $omaintid ?>" id="maintid">
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" value="<?php echo $omaileingang ?>" id="medt">
                  <label class="mdl-textfield__label" for="medt">Maileingang Date/Time</label>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input"  style="width: 82% !important;" type="text" value="<?php echo $oreceivedmail ?>" id="rmail">
                  <label class="mdl-textfield__label" for="rmail">Incoming Mail ID</label>

                <?php if (! empty($oreceivedmail)) { echo '<button style="position:absolute; right:0;" id="viewmailbtn" type="button" class=" mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab viewMail2">
                                                             <i class="mdi mdi-24px mdi-email-search-outline mdi-dark"></i>
                                                           </button>

                                                           <div class="mdl-tooltip  mdl-tooltip--bottom" data-mdl-for="viewmailbtn">
                                                             View Mail
                                                           </div>'; } ?>
                 </div>
               </div>
               <div class="mdl-cell mdl-cell--6-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" data-val="<?php echo $olieferantID ?>" value="<?php echo $olieferant ?>" id="company">
                <label class="mdl-textfield__label" for="company">Lieferant</label>
              </div>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
                  <select id="dcid3" name="dcid3" class="mdl-selectfield__select">
                    <option value=""></option>
                    <?php
                      while ($row = mysqli_fetch_row($derenCIDQ)) {
                        if ((isset($_GET['mid'])) && ($row[2] == $oderenCIDid)) {
                          echo '<option selected value="' . $row[2] . '">' . $row[1] . '</option>';
                        } else {
                          echo '<option value="' . $row[2] . '">' . $row[1] . '</option>';
                        }
                      }
                    ?>
                  </select>
                  <label class="mdl-selectfield__label" for="dcid3">Deren CID</label>
                  <span class="mdl-selectfield__error">Select a value</span>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
                  <select id="bearbeitet" name="bearbeitet" class="mdl-selectfield__select">
                    <option value="<?php echo $usernameBV ?>"><?php echo $usernameBV ?></option>
                    <option value="<?php echo $workers[0] ?>"><?php echo $workers[0] ?></option>
                    <option value="<?php echo $workers[1] ?>"><?php echo $workers[1] ?></option>
                    <option value="<?php echo $workers[2] ?>"><?php echo $workers[2] ?></option>
                  </select>
                  <label class="mdl-selectfield__label" for="bearbeitet">Bearbeitet Von</label>
                  <span class="mdl-selectfield__error">Select a value</span>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" value="<?php echo $opostponed ?>" id="pponed">
                  <label class="mdl-textfield__label" for="pponed">Postponed</label>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label flatpickr">
                    <input type="text" id="sdt" class="mdl-textfield__input"  value="<?php echo $newSDT ?>" data-input>
                    <span class="mdl-textfield__label__icon mdi mdi-24px mdi-calendar-clock" title="toggle" data-toggle></span>
                    <label class="mdl-textfield__label" for="sdt">Start Date/Time</label>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label flatpickr">
                    <input type="text" id="edt" class="mdl-textfield__input"  value="<?php echo $newEDT ?>" data-input>
                    <span class="mdl-textfield__label__icon mdi mdi-24px mdi-calendar-clock" title="toggle" data-toggle></span>
                    <label class="mdl-textfield__label" for="edt">End Date/Time</label>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--12-col">
                <label class="timeZoneLabel" for="timezoneSelector">
                  Timezone
                </label>
                  <select class="js-example-basic-multiple js-states form-control" id="timezoneSelector"></select>
              </div>
              <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield notesTextArea">

                  <span class="notesLabel1">Notes</span>
                  <textarea class="mdl-textfield__input" type="text" rows= "4" id="notes" ><?php echo $onotes ?></textarea>
                </div>
              </div>
              <?php
                $mailRecipientQ =  mysqli_query($dbhandle, "SELECT maintenanceRecipient FROM companies WHERE companies.name LIKE '$olieferant'") or die(mysqli_error($dbhandle));
                if ($row = mysqli_fetch_row($mailRecipientQ)) {
                  $mailrecipient = $row[0];
                }
              ?>
              <script>
                function openInNewTab(url) {
                  var win = window.open(url, '_blank');
                  win.focus();
                };

              $( '.flatpickr' ).flatpickr({
                enableTime: true,
                dateFormat: 'Z',
                time_24hr: true,
                wrap: true,
                altInput: true,
                //altFormat: 'Z'
                altFormat: 'd M Y H:i:S'
                //"plugins": [new confirmDatePlugin({})]
              });

              </script>
              <br>

              <input type="hidden" value=" <?php echo $update ?>" id="update">
              <input type="hidden" value="" id="mailSentAt">
              <input type="hidden" value="<?php echo $_COOKIE['label'] ?>" id="gmailLabel">
            </div>
            </form>
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <div style="display: inline;">
                <label style="display: inline; margin-right: 5px; float: right;width: 150px; line-height: 2.1em;" class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
                  <span style="color: #6e6e6e;" class="mdl-switch__label">Completed</span>
                  <input type="checkbox" id="switch-2" class="mdl-switch__input" <?php echo $odone ?>>
                </label>
                <div class="mdl-layout-spacer"></div>
                <button id="addCalbtn" type="button" class="mdl-button mdl-js-button mdl-button--raised">
                  <span class="mdi mdi-24px mdi-calendar-plus mdi-dark"> Add to Cal </span>
                </button>
              </div>
            </div>
          </div>
          <?php
          echo '<dialog id="mailDialog" class="mdl-dialog mailDialog1" style="">
                <div class="mailcSelectHeader">
                  <h4 class="labelSelectLabel"><font color="#67B246">Sub:</font> ' . $msubject . '</h4><br>
                  <h6 class="labelSelectLabel" style="font-size: 20px !important"><font color="#67B246">From:</font> ' . $mfrom . '</h6><br>
                  <h6 class="labelSelectLabel" style="font-size: 20px !important"><font color="#67B246">Date:</font> ' . $mdate . '</h6>
                  <button tabindex="-1" type="button" class="mailcSelectClose2 mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect close1">
                    <i class="material-icons">close</i>
                  </button>
                </div>

                <div class="mdl-dialog__content">
                  <p><div style="width: 750px; margin-top: 40px; ">
                   ' . $mbody . '
                  </div></p>
                </div>
              </dialog>';
            ?>
          </div>
          <div id="sbMExists" class="mdl-js-snackbar mdl-snackbar">
            <div class="mdl-snackbar__text"></div>
            <button class="mdl-snackbar__action" type="button"></button>
          </div>
          <div id="sbMAS" class="mdl-js-snackbar mdl-snackbar">
            <div class="mdl-snackbar__text"></div>
            <button class="mdl-snackbar__action" type="button"></button>
          </div>
          <div id="sbUpdated" class="mdl-js-snackbar mdl-snackbar">
            <div class="mdl-snackbar__text"></div>
            <button class="mdl-snackbar__action" type="button"></button>
          </div>
          <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-phone">
            <div id="kundenCard" class="demo-card-wide mdl-card mdl-shadow--2dp hidden">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Kunden Circuits</h2>
              </div>
              <div class="mdl-card__supporting-text">
              <table id="dataTable4" class="display table table-striped compact nowrap" style="width: 100%">
                <thead>
                  <tr>
                    <th class="">ID</th>
                    <th class="">Deren CID</th>
                    <th>Unsere CID</th>
                    <th>Kunde</th>
                    <th>Maintenance Recipient</th>
                    <th>Notification</th>
                  </tr>
                </thead>
              </table>
            </div>
            </div>
          </div>
        </div>

      <script>

$('#addCalbtn').click(function(){


  console.log('calSDT: ' + moment(calSDT).toISOString());

  var calSDT = $('#sdt').val();
  var calSDTISO = moment(calSDT).toISOString().replace(/[^a-z0-9\s]/gi, '');
  var calSDTISO2 = calSDTISO.replace('000Z','Z');
  console.log('calSDTISO: ' + calSDTISO2);

  var calEDT = $('#edt').val();
  var calEDTISO = moment(calEDT).toISOString().replace(/[^a-z0-9\s]/gi, '');;
  var calEDTISO2 = calEDTISO.replace('000Z','Z');
  console.log('calEDTISO: ' + calEDTISO2);

  var selectedDCID = $( "#dcid3 option:selected" ).text();
  var selectedCompany = $('#company').val();

  openInNewTab(`http://www.google.com/calendar/event?action=TEMPLATE&dates=${calSDTISO2}%2F${calEDTISO2}&src=newtelco.de_hkp98ambbvctcn966gjj3c7dlo@group.calendar.google.com&text=Maintenance%20- '${selectedCompany}'%20on%20'${selectedDCID}'&add=service@newtelco.de&details=Newtelco%20Maintenance%20for%20<b>${selectedCompany}</b>%20on%20deren%20CID:%20'<b>${selectedDCID}</b>'.&trp=false`);
});

const _t = (s) => {
  if (i18n !== void 0 && i18n[s]) {
    return i18n[s];
  }

  return s;
};

const timezones = [
  "Etc/GMT+12",
  "Pacific/Midway",
  "Pacific/Honolulu",
  "America/Juneau",
  "America/Dawson",
  "America/Boise",
  "America/Chihuahua",
  "America/Phoenix",
  "America/Chicago",
  "America/Regina",
  "America/Mexico_City",
  "America/Belize",
  "America/Detroit",
  "America/Indiana/Indianapolis",
  "America/Bogota",
  "America/Glace_Bay",
  "America/Caracas",
  "America/Santiago",
  "America/St_Johns",
  "America/Sao_Paulo",
  "America/Argentina/Buenos_Aires",
  "America/Godthab",
  "Etc/GMT+2",
  "Atlantic/Azores",
  "Atlantic/Cape_Verde",
  "GMT",
  "Africa/Casablanca",
  "Atlantic/Canary",
  "Europe/Belgrade",
  "Europe/Sarajevo",
  "Europe/Brussels",
  "Europe/Amsterdam",
  "Africa/Algiers",
  "Europe/Bucharest",
  "Africa/Cairo",
  "Europe/Helsinki",
  "Europe/Athens",
  "Asia/Jerusalem",
  "Africa/Harare",
  "Europe/Moscow",
  "Asia/Kuwait",
  "Africa/Nairobi",
  "Asia/Baghdad",
  "Asia/Tehran",
  "Asia/Dubai",
  "Asia/Baku",
  "Asia/Kabul",
  "Asia/Yekaterinburg",
  "Asia/Karachi",
  "Asia/Kolkata",
  "Asia/Kathmandu",
  "Asia/Dhaka",
  "Asia/Colombo",
  "Asia/Almaty",
  "Asia/Rangoon",
  "Asia/Bangkok",
  "Asia/Krasnoyarsk",
  "Asia/Shanghai",
  "Asia/Kuala_Lumpur",
  "Asia/Taipei",
  "Australia/Perth",
  "Asia/Irkutsk",
  "Asia/Seoul",
  "Asia/Tokyo",
  "Asia/Yakutsk",
  "Australia/Darwin",
  "Australia/Adelaide",
  "Australia/Sydney",
  "Australia/Brisbane",
  "Australia/Hobart",
  "Asia/Vladivostok",
  "Pacific/Guam",
  "Asia/Magadan",
  "Pacific/Fiji",
  "Pacific/Auckland",
  "Pacific/Tongatapu"
];

const i18n = {
  "Etc/GMT+12": "International Date Line West",
  "Pacific/Midway": "Midway Island, Samoa",
  "Pacific/Honolulu": "Hawaii",
  "America/Juneau": "Alaska",
  "America/Dawson": "Pacific Time (US and Canada); Tijuana",
  "America/Boise": "Mountain Time (US and Canada)",
  "America/Chihuahua": "Chihuahua, La Paz, Mazatlan",
  "America/Phoenix": "Arizona",
  "America/Chicago": "Central Time (US and Canada)",
  "America/Regina": "Saskatchewan",
  "America/Mexico_City": "Guadalajara, Mexico City, Monterrey",
  "America/Belize": "Central America",
  "America/Detroit": "Eastern Time (US and Canada)",
  "America/Indiana/Indianapolis": "Indiana (East)",
  "America/Bogota": "Bogota, Lima, Quito",
  "America/Glace_Bay": "Atlantic Time (Canada)",
  "America/Caracas": "Caracas, La Paz",
  "America/Santiago": "Santiago",
  "America/St_Johns": "Newfoundland and Labrador",
  "America/Sao_Paulo": "Brasilia",
  "America/Argentina/Buenos_Aires": "Buenos Aires, Georgetown",
  "America/Godthab": "Greenland",
  "Etc/GMT+2": "Mid-Atlantic",
  "Atlantic/Azores": "Azores",
  "Atlantic/Cape_Verde": "Cape Verde Islands",
  "GMT": "Dublin, Edinburgh, Lisbon, London",
  "Africa/Casablanca": "Casablanca, Monrovia",
  "Atlantic/Canary": "Canary Islands",
  "Europe/Belgrade": "Belgrade, Bratislava, Budapest, Ljubljana, Prague",
  "Europe/Sarajevo": "Sarajevo, Skopje, Warsaw, Zagreb",
  "Europe/Brussels": "Brussels, Copenhagen, Madrid, Paris",
  "Europe/Amsterdam": "Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
  "Africa/Algiers": "West Central Africa",
  "Europe/Bucharest": "Bucharest",
  "Africa/Cairo": "Cairo",
  "Europe/Helsinki": "Helsinki, Kiev, Riga, Sofia, Tallinn, Vilnius",
  "Europe/Athens": "Athens, Istanbul, Minsk",
  "Asia/Jerusalem": "Jerusalem",
  "Africa/Harare": "Harare, Pretoria",
  "Europe/Moscow": "Moscow, St. Petersburg, Volgograd",
  "Asia/Kuwait": "Kuwait, Riyadh",
  "Africa/Nairobi": "Nairobi",
  "Asia/Baghdad": "Baghdad",
  "Asia/Tehran": "Tehran",
  "Asia/Dubai": "Abu Dhabi, Muscat",
  "Asia/Baku": "Baku, Tbilisi, Yerevan",
  "Asia/Kabul": "Kabul",
  "Asia/Yekaterinburg": "Ekaterinburg",
  "Asia/Karachi": "Islamabad, Karachi, Tashkent",
  "Asia/Kolkata": "Chennai, Kolkata, Mumbai, New Delhi",
  "Asia/Kathmandu": "Kathmandu",
  "Asia/Dhaka": "Astana, Dhaka",
  "Asia/Colombo": "Sri Jayawardenepura",
  "Asia/Almaty": "Almaty, Novosibirsk",
  "Asia/Rangoon": "Yangon Rangoon",
  "Asia/Bangkok": "Bangkok, Hanoi, Jakarta",
  "Asia/Krasnoyarsk": "Krasnoyarsk",
  "Asia/Shanghai": "Beijing, Chongqing, Hong Kong SAR, Urumqi",
  "Asia/Kuala_Lumpur": "Kuala Lumpur, Singapore",
  "Asia/Taipei": "Taipei",
  "Australia/Perth": "Perth",
  "Asia/Irkutsk": "Irkutsk, Ulaanbaatar",
  "Asia/Seoul": "Seoul",
  "Asia/Tokyo": "Osaka, Sapporo, Tokyo",
  "Asia/Yakutsk": "Yakutsk",
  "Australia/Darwin": "Darwin",
  "Australia/Adelaide": "Adelaide",
  "Australia/Sydney": "Canberra, Melbourne, Sydney",
  "Australia/Brisbane": "Brisbane",
  "Australia/Hobart": "Hobart",
  "Asia/Vladivostok": "Vladivostok",
  "Pacific/Guam": "Guam, Port Moresby",
  "Asia/Magadan": "Magadan, Solomon Islands, New Caledonia",
  "Pacific/Fiji": "Fiji Islands, Kamchatka, Marshall Islands",
  "Pacific/Auckland": "Auckland, Wellington",
  "Pacific/Tongatapu": "Nuku'alofa"
}
//const dateTimeUtc = moment("2017-06-05T19:41:03Z").utc();
//document.querySelector(".js-TimeUtc").innerHTML = dateTimeUtc.format("ddd, DD MMM YYYY HH:mm:ss");

const selectorOptions = moment.tz.names()
  .filter(tz => {
    return timezones.includes(tz)
  })
  .reduce((memo, tz) => {
    memo.push({
      name: tz,
      offset: moment.tz(tz).utcOffset()
    });

    return memo;
  }, [])
  .sort((a, b) => {
    return a.offset - b.offset
  })
  .reduce((memo, tz) => {
    const timezone = tz.offset ? moment.tz(tz.name).format('Z') : '';

    return memo.concat(`<option value="${tz.name}">(GMT${timezone}) ${_t(tz.name)}</option>`);
  }, "");

document.querySelector("#timezoneSelector").innerHTML = selectorOptions;

$("#timezoneSelector").on("change", e => {
  //const timestamp = dateTimeUtc.unix();
  //const offset = moment.tz(e.target.value).utcOffset() * 60;
  //const dateTimeLocal = moment.unix(timestamp + offset).utc();

 // document.querySelector(".js-TimeLocal").innerHTML = dateTimeLocal.format("ddd, DD MMM YYYY HH:mm:ss");
});

document.querySelector("#timezoneSelector").value = "Europe/Amsterdam";

const event = new Event("change");
document.querySelector("#timezoneSelector").dispatchEvent(event);

$(document).ready(function() {
  var mEingangVal =  moment($('#medt').val()).format("DD MMM YYYY HH:mm:SS ZZ");
  $('#medt').val(mEingangVal);

  var updatedAtLabel = moment($('#updatedAtLabel').html()).format("DD MMM YYYY HH:mm:SS ZZ");
  $('#updatedAtLabel').html(updatedAtLabel);

  $("#timezoneSelector").select2({
    placeholder: "Select a Timezone"
  });

});
// note: timezone selector - https://codepen.io/matallo/pen/WEjKqG?editors=1010#0

$("#dcid3").change(function() {
if ( $.fn.dataTable.isDataTable( '#dataTable4' ) ) {
    table3 = $('#dataTable4').DataTable();
    table3.destroy();
}
var data3 = $( "#dcid3 option:selected" ).text();
$('#kundenCard').addClass('display').removeClass('hidden');
//filter by selected value on second column
var table4 = $('#dataTable4').DataTable( {
  ajax: {
    url: "api?dCID=" + data3,
    dataSrc: ""
  },
  columns: [
      { data: "id" },
      { data: "derenCID" },
      { data: "unsereCID" },
      { data: "name" },
      { data: "maintenanceRecipient" },
      { title: "Notification" }
  ],
  columnDefs: [
      {
          "targets": [ 0, 4 ],
          "visible": false,
          "searchable": false
      }, {
          "targets": -1,
          "data": null,
          "defaultContent": "<button id='sendMailbtn' type='button' class='mdl-color--light-green-nt mdl-button mdl-js-button mdl-button--raised mdl-button--colored'><span class='mdi mdi-gmail mdi-24px'> <span class='mdi mdi-send mdi-24px'></span></button>"
      }
    ]
});

});


$(document).ready(function() {
  $('#dataTable4').on( 'click', '#sendMailbtn', function () {
    table3 = $('#dataTable4').DataTable();
    var data = table3.row( $(this).parents('tr') ).data();

      var start = moment($('#sdt').val());
      var end = moment($('#edt').val());

      var startLabel = start.format("DD MMM YYYY HH:mm:SS");
      var endLabel = end.format("DD MMM YYYY HH:mm:SS");

      var tzSuffix = $("#timezoneSelector option:selected").text();
      var regExp = /\(([^)]+)\)/;
      var matches = regExp.exec(tzSuffix);
      var tzSuffixRAW = matches[1];

      var ms = moment(end).diff(moment(start));
      var d = moment.duration(ms);
      var impactTime = d.format("mm");

      openInNewTab2('mailto://' + data['maintenanceRecipient'] + '?subject=Planned Work Notification on CID: ' + data['unsereCID'] + '&cc=service@newtelco.de;maintenance@newtelco.de&body=<head><style>.grayText10{font-size:10pt;font-family:\'Arial\',sans-serif;color:#636266}.tdSizing{width:467.8pt;padding:0cm 5.4pt 0cm 5.4pt;vertical-align:text-top;width:151}.tdSizing2{width:467.8pt;padding:0cm 5.4pt 0cm 5.4pt;vertical-align:text-top;width:624}</style></head><body><div><p><span class="grayText10">Dear Colleagues,</span></p><p><span class="grayText10">We would like to inform you about planned work on the CID ' + data['unsereCID'] + '. The maintenance work is with the following details</span></p><table border="0 " cellspacing="0 " cellpadding="0" width="775 style="width:581.2pt;border-collapse:collapse;border:none"><tr><td class="tdSizing"><p style="margin-bottom:12.0pt"> <span class="grayText10">Start date and time:</span></p></td><td class="tdSizing"><p style="margin-bottom:12.0pt;text-align:justify"><span><b><span class="grayText10">' + startLabel + ' (' + tzSuffixRAW + ')</span></b></span></p></td></tr><tr><td class="tdSizing"><p style="margin-bottom:12.0pt"><span><span class="grayText10">Finish date and time:</span></span></p></td><td class="tdSizing2"><p style="margin-bottom:12.0pt;text-align:justify"><span><b><span class="grayText10">' + endLabel + ' (' + tzSuffixRAW + ')</span></b></span></p></td></tr><tr><td class="tdSizing"><p style="margin-bottom:12.0pt"><span><span class="grayText10">Reason:</span></span></p></td><td class="tdSizing2"><p style="margin-bottom:12.0pt;text-align:justify"><span><span class="grayText10">Planned maintenance on the network infrastructure to avoid unplanned outage in near future</span></span></p></td></tr><tr><td class="tdSizing"><p style="margin-bottom:12.0pt"> <span> <span class="grayText10">Impact:</span></span></p></td><td class="tdSizing2"><p style="margin-bottom:12.0pt;text-align:justify"><span><span class="grayText10">' + impactTime + ' minutes during the maintenance window</span></span></p></td></tr></table><p><span class="grayText10">We sincerely regret causing any inconveniences by this and hope for your understanding and the further mutually advantageous cooperation.</span></p><p><span class="grayText10">If you have any questions feel free to contact us.</span></p></body>');

      var DateTime = luxon.DateTime;
      var now = DateTime.local();
      $("#mailSentAt").val(moment.utc().toISOString());
  } );

  /*************************************************************************************************
   *
   *   Gmail HTML Paste Extension:
   *   https://chrome.google.com/webstore/detail/gmail-append-html/dnfikahmfhcjfcmbgbkklecekfeijmda
   *
   *************************************************************************************************/

  function openInNewTab2(url) {
    var win = window.open(url, '_blank');
    win.focus();
  };
});

$('#btnSave').on('click', function(e) {

  e.preventDefault();

  // Some formatting before we push to mysql
  var DateTime = luxon.DateTime;
  //var makdtISO = DateTime.fromISO($('#makdt').val());
  //var makdtUTC = makdtISO.toUTC();

  var medt = $('#medt').val();
  var medtUTC = moment.parseZone(medt).utc().format();
  var medtISO = moment(medtUTC).toISOString();

  var mdtTZ = $('#timezoneSelector').val();

  var mSDT = $('#sdt').val();
  //var mSDT = moment(mSDT).format('YYYY-MM-DD HH:mm:ss');
  //console.log('Initial: ' + mSDT);
  var mSDT = moment(mSDT).format('YYYY-MM-DD\THH:mm:ss');
  var zOffset = moment.tz(mdtTZ).format('Z');
  //console.log('offset: ' + zOffset);
  var tzConcat = mSDT.concat(zOffset);
  //console.log('tzConcat: ' + tzConcat);
  var sdtUTC = moment(tzConcat).utc().format();
  //console.log('UTC: ' +  sdtUTC);

  var mEDT = $('#edt').val();
  var mEDT = moment(mEDT).format('YYYY-MM-DD\THH:mm:ss');
  var tzConcat2 = mEDT.concat(zOffset);
  var edtUTC = moment(tzConcat2).utc().format();



  if($('#switch-2:checked').val() == 'on') {
    var odone = '1';
  } else {
    var odone = '0';
  }

  if($('#dcid3').val() == ''){
    var dcid = '0';
  } else {
    var dcid = $('#dcid3').val();
  }
  var TableData = new Array();

  TableData[0] = {
    "omaintid" : $('#maintid').val(),
    "omaileingang" : medtISO,
    "oreceivedmail" : $('#rmail').val(),
    "olieferant" : $('#company').val(),
    "olieferantid" : $("#company").data('val'),
    "oderenCIDid" : dcid, //jquery data-val
    "obearbeitetvon" : $('#bearbeitet').val(),
    "omaintenancedate" : $('#mdt').val(),
    "ostartdatetime" : sdtUTC,
    "oenddatetime" : edtUTC,
    "opostponed": $('#pponed').val(),
    "onotes" : $('#notes').val(),
    //"omailankunde" : makdtUTC.toString(),
    "mailSentAt" : $('#mailSentAt').val(),
    "odone" : odone,
    "update" : $('#update').val(),
    "updatedBy": $('.menu_username').text(),
    "gmailLabel" : $('#gmailLabel').val()
    }

    $.ajax({

     type : "POST",
     url : "api",
     cache : "false",
     dataType: "json",
     data :  {data:TableData},
     success : function(result1){
       //console.log('result: ' + result1.exist);
       var obj = JSON.stringify(result1);
         //console.log('obj.exist: ' + obj.exist);

         if (result1.exist === 1) {
            var snackbarContainer = document.querySelector('#sbMExists');
            var midval = $('#rmail').val();
            var handler = function(event) {
              var aeURL = 'https://maintenance.newtelco.de/addedit?update=1&gmid=' + midval
              window.location.href = aeURL;
            };
            var dataME = {
              message: 'Maintenance Already Exists',
              timeout: 4000,
              actionHandler: handler,
              actionText: 'OPEN'
            };
            snackbarContainer.MaterialSnackbar.showSnackbar(dataME);
         } else if (result1.added === 1){
           var snackbarContainer2 = document.querySelector('#sbMAS');
           var dataME2 = {
             message: 'Maintenance Successfully Saved',
             timeout: 2000
           };
           snackbarContainer2.MaterialSnackbar.showSnackbar(dataME2);
         } else if (result1.updated === 1){
           var snackbarContainer2 = document.querySelector('#sbUpdated');
           var dataME3 = {
             message: 'Maintenance Successfully Updated',
             timeout: 2000
           };
           snackbarContainer2.MaterialSnackbar.showSnackbar(dataME3);
         } else {
           alert('Invalid Response');
         }

     }
    });

}); // clicking orderSave button

    </script>
    <script>
      if ($("#viewmailbtn").length > 0) {
        var dialog = document.querySelector('#mailDialog');
        var showDialogButton = document.querySelector('#viewmailbtn');
        if (! dialog.showModal) {
          dialogPolyfill.registerDialog(dialog);
        }
        showDialogButton.addEventListener('click', function() {
          dialog.showModal();
        });
        dialog.querySelector('.close1').addEventListener('click', function() {
          dialog.close();
        });

        document.addEventListener("DOMContentLoaded", function() {
          //The first argument are the elements to which the plugin shall be initialized
          //The second argument has to be at least a empty object or a object with your desired options
          OverlayScrollbars(document.querySelectorAll("#mailDialog"), {
            className       : "os-theme-dark",
            resize          : "both",
            sizeAutoCapable : true
          });
        });
      }
    </script>
        </main>
        <footer class="mdl-mini-footer mdl-grid">
            <div class="mdl-mini-footer__left-section mdl-cell mdl-cell--10-col mdl-cell--middle">
              <span class="mdl-logo">Newtelco GmbH</span>
              <ul class="mdl-mini-footer__link-list">
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy & Terms</a></li>
              </ul>
            </div>
          <div class="mdl-layout-spacer"></div>
            <div class="mdl-mini-footer__right-section mdl-cell mdl-cell--2-col mdl-cell--middle mdl-typography--text-right">
              <div class="footertext">
                built with <span class="love">&hearts;</span> by <a target="_blank" class="footera" href="https://github.com/ndom91">ndom91</a> &copy;
              </div>
            </div>
        </footer>
      </div>

</body>
</html>
