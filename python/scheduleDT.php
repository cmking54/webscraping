<!DOCTYPE html> 
<html>
<head>
	<title>Colgate Cruiser Schedule</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  href="common/css/desktop-transit.css" rel="stylesheet" type="text/css" />
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="common/js/mobile.js"></script>
  
    <!--Test For Native or Mobile Web-->
	<style type='text/css'> #nativenav {display: none;}</style><style type='text/css'> #mobilenav {display: block;}</style><style type='text/css'> #nativefooter {display: none;}</style><style type='text/css'> #mobilefooter {display: block;}</style> 
    <!--End Test For Native or Mobile Web-->
	 
</head> 
<body> 
	<nav>
        <div id="mobileheader">
            <div style="float:left"><a href="https://m.colgate.edu/home"><img src="/images/homelink4.png" width="57" height="44" alt="Colgate Mobile Web Home"></a></div>
            <div style="float:left"><a href="Javascript:history.back();"><img class="moduleicon" src="/images/transit.png" width="30" height="30"></a> <a href="Javascript:history.back();" class="headerlinks">Cruiser</a></div> 
            <div style="float:right"><a href="/cruiserinfo.php"><img src="/images/help.png" width="46" height="44" alt="Cruiser Help"></a></div>
            <div id="nativenav">
                <div style="float:left; background-color:#fff; padding:5px; width:100%"><a href="index.php?native=" style="color:#000; font-size:14px; text-decoration:underline;">Back To Bus Lines</a> <span style="font-size:12px; color:#000;">|</span> <a href="cruiserhelp.php?native=" style="color:#000; font-size:14px; text-decoration:underline;">Info</a></div> 
            </div>
        </div>
	</nav>
	<article>
        <div class="contentblock">
        	<!--<div class="pagetitle">Cruiser Schedules</div>-->
            <form method="post" action="schedule-resultsDT.php">
                <select name="routes" id="routes"  onchange="this.form.submit()">
                    <option value="n/a">Choose a route</option>
                <option value='78|Cruiser A Weekday Mornings'>Cruiser A&nbsp;Weekday Mornings</option>
<option value='63|Cruiser B Weekday Mornings'>Cruiser B&nbsp;Weekday Mornings</option>
<option value='69|Cruiser C Weekday Mornings'>Cruiser C&nbsp;Weekday Mornings</option>
<option value='66|Cruiser D Weekday Mornings'>Cruiser D&nbsp;Weekday Mornings</option>
<option value='80|Cruiser A Weekday Afternoons'>Cruiser A&nbsp;Weekday Afternoons</option>
<option value='64|Cruiser D Weekday Afternoons'>Cruiser D&nbsp;Weekday Afternoons</option>
<option value='68|Cruiser B Weekday Afternoons'>Cruiser B&nbsp;Weekday Afternoons</option>
<option value='62|Cruiser B Wellness Run Down The Hill'>Cruiser B&nbsp;Wellness Run Down The Hill</option>
<option value='61|Cruiser B Wellness Run Up The Hill'>Cruiser B&nbsp;Wellness Run Up The Hill</option>
<option value='70|Cruiser B Wed - Sat 9:30 p - 12 a'>Cruiser B&nbsp;Wed - Sat 9:30 p - 12 a</option>
<option value='83|Cruiser B Wed - Sat 1:00 a - 2:53 a'>Cruiser B&nbsp;Wed - Sat 1:00 a - 2:53 a</option>
<option value='65|Cruiser A Mon - Sat 6 p - 7:52 p'>Cruiser A&nbsp;Mon - Sat 6 p - 7:52 p</option>
<option value='72|Cruiser B Mon - Sat 6 p - 8:55 p'>Cruiser B&nbsp;Mon - Sat 6 p - 8:55 p</option>
<option value='67|Cruiser A Mon - Sat 8 p - 9:44 p'>Cruiser A&nbsp;Mon - Sat 8 p - 9:44 p</option>
<option value='74|Cruiser B Mon - Sat 9:30 p - 12 a'>Cruiser B&nbsp;Mon - Sat 9:30 p - 12 a</option>
<option value='96|Cruiser B1  Wed - Sat 9:30 p - 12:00 a'>Cruiser B1 &nbsp;Wed - Sat 9:30 p - 12:00 a</option>
<option value='73|Cruiser A Mon - Sat 10:15 p - 12:42 a'>Cruiser A&nbsp;Mon - Sat 10:15 p - 12:42 a</option>
<option value='95|Cruiser A1  Wed - Sat 10:15 p - 3:10 a'>Cruiser A1 &nbsp;Wed - Sat 10:15 p - 3:10 a</option>
<option value='77|Cruiser A Wed - Sat 1:15 a - 3:10 a '>Cruiser A&nbsp;Wed - Sat 1:15 a - 3:10 a </option>
<option value='79|Cruiser E Express Wed - Sat 10 p – 12 a'>Cruiser E&nbsp;Express Wed - Sat 10 p – 12 a</option>
<option value='82|Cruiser A   Wed - Sat   12:15 a – 3:10 a'>Cruiser A &nbsp; Wed - Sat   12:15 a – 3:10 a</option>
<option value='75|Cruiser A Sat & Sun Afternoons'>Cruiser A&nbsp;Sat & Sun Afternoons</option>
<option value='76|Cruiser B Sat. & Sun. Afternoons'>Cruiser B&nbsp;Sat. & Sun. Afternoons</option>
<option value='81|Cruiser A Sun. Evenings '>Cruiser A&nbsp;Sun. Evenings </option>
<option value='71|Cruiser B Sun. Evenings'>Cruiser B&nbsp;Sun. Evenings</option>
<option value='93|BreakTime  Tuesday & Friday'>BreakTime &nbsp;Tuesday & Friday</option>
                </select>
             </fieldset>
             </form>
         </div>
	</article><!--End article-->
    <footer>
        <div id="mobilefooter">
            <div class="link_button"><a href="#top">Top of page</a></div>
            <div class="copywrite"><a href="http://www.colgate.edu" style="color: #e39615; text-decoration: none">Colgate University</a></div>
        </div>
        <div id="nativefooter">
            <div><a href="http://www.colgate.edu" style="color: #e39615; text-decoration: none">Colgate University</a></div>
        </div>
    </footer>
</body>
</html>
