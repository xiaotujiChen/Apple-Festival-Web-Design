<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Time and Venue</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Georgia" rel="stylesheet">
    <script src="js/main.js"></script>
</head>

<body>
    <?php include 'includes/top.php';?>
    <div id="container">
        <div class="poster">
            <!-- image credit to http://media.gettyimages.com/videos/fruit-apple-pineapple-watermelon-panning-right-to-left-uhd-format-video-id598599308?s=640x640 and modified by Ke Zhang-->
            <img src="images/appleposter.png" alt="Apple Fest Poster">
        </div> <!-- end of poster div -->
        <div id="content">
            <div class="about">
                <h3>Basic Information</h3>
                <h4>Date: </h4>
                <h5>September 30, 2016 - October 2, 2016</h5>
                <h4>Event Times:</h4>
                <h5>Friday 12pm-6pm</h5>
                <h5>Saturday and Sunday 10am-6pm </h5>
                <!-- content credit to http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
                <h4> Below you can find a navigation map, and transportation information! </h4>
                <br>
            </div><!-- end of about div-->
            <div id="map">
                <h2>Where is it? - Event Map</h2>
                <!-- image credit: http://www.downtownithaca.com/local/file_upload/images/Apple%20Harvest%20Map%202016.jpg -->
                <img src="images/AppleHarvestMap2016.jpg" alt=map>
            </div> <!-- end of map div -->
            <div id="transportation">
                <h2>How to Get There? - Bus Schedule</h2>
                <h3>From Central Campus</h3>
                <table class="largeTable">
                    <tr>
                        <th>Route No.</th>
                        <th>Depature</th>
                        <th>Destination</th>
                        <th>Schedule</th>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>Sage Hall</td>
                        <td>Commons/Seneca Street</td>
                        <td><a href="https://tcat.nextinsight.com/routes/440#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>Uris Hall</td>
                        <td>Commons/Seneca Street</td>
                        <td><a href="https://tcat.nextinsight.com/routes/469#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>Rockerfeller Hall</td>
                        <td>Commons/Seneca Street</td>                            
                        <td><a href="https://tcat.nextinsight.com/routes/489#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                </table><!-- end of large table div -->
                <table class="smallTable">
                    <tr>
                        <th>Route No.</th>
                        <th>Schedule</th>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td><a href="https://tcat.nextinsight.com/routes/440#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>51</td>                            
                        <td><a href="https://tcat.nextinsight.com/routes/469#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td><a href="https://tcat.nextinsight.com/routes/489#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                </table> <!-- end of smalltable div-->
                <h3>From North Campus</h3>
                <table class="largeTable">
                    <tr>
                        <th>Route No.</th>
                        <th>Depature</th>
                        <th>Destination</th>
                        <th>Scheduler</th>
                        </tr>
                    <tr>
                        <td>30</td>
                        <td>Risley Hall</td>
                        <td>Commons/Seneca Street</td>
                        <td><a href="https://tcat.nextinsight.com/routes/440#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>70</td>
                        <td>RPCC</td>
                        <td>Commons/Seneca Street</td>
                        <td><a href="https://tcat.nextinsight.com/routes/469#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>72</td>
                        <td>RPCC</td>
                        <td>Commons/Seneca Street</td>
                        <td><a href="https://tcat.nextinsight.com/routes/463#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                </table><!-- end of large table div -->
                <table class="smallTable">
                    <tr>
                        <th>Route No.</th>
                        <th>Schedule</th>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td><a href="https://tcat.nextinsight.com/routes/440#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>70</td>
                        <td><a href="https://tcat.nextinsight.com/routes/469#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                    <tr>
                        <td>72</td>
                        <td><a href="https://tcat.nextinsight.com/routes/463#bigpic" target="_blank">Click for Schedule</a></td>
                    </tr>
                </table><!-- end of large table div -->
                <h3><a href="https://www.tcatbus.com/learn/system-map/">Click here if you depart from anywhere else → </a></h3>
                </div> <!-- end of transportation div. all content credited to TCAT website and App RIDE14850-->
                
            <div id="taxi">
                <h2>How to Get There? - Taxi</h2>
                <ul class="biglist">
                    <li><a href="http://collegetowncab.com/" target="_blank">Collegetown Cab Inc </a>
                        <ul class="sublist">
                            <li>Google Rating: ★★★☆☆</li>
                            <li>Contact: (607) 588-8888</li>
                        </ul>
                    </li>
                    <li><a href="http://www.ithacataxi.biz/" target="_blank">Ithaca Dispatch</a>
                        <ul class="sublist">
                            <li>Google Rating: ★★☆☆☆</li>
                            <li>Contact: (607) 277-7777</li>
                        </ul>
                    </li>
                    <li><a href=# target="_blank">Cayuga Taxi</a>
                        <ul class="sublist">
                            <li>Google Rating: ★☆☆☆☆</li>
                            <li>Contact: (607) 277-8294</li>
                        </ul>
                    </li>
                </ul> <!-- end of taxi information list. all content credited to Google Map -->
            </div> <!-- end of taxi div -->
        </div><!-- end of content div-->
    </div> <!-- end of container div-->
    
    <?php include 'includes/footer.php';?>
    <footer>
        <!-- this is for responsive design small device -->
    </footer>
</body>



</html>
