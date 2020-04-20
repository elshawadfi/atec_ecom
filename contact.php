<?php
require "header.php";

?>
<div class="deal-area pt-100 pb-100 bg-img" style="background-image:url(assets/images/bg/882.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="deal-content text-center">
                           <!--  <h3>Sale 30%</h3> -->
                            <h2>souq zag.com</h2>
                          <!--   <div class="timer"> -->
                                 <!--  <h2>zag</h2> -->
                            <!-- </div> -->
                            <div class="deal-btn default-btn btn-hover">
                              <!--   <a class="btn-size-xs btn-bg-theme btn-color black-color" href="#">View More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                </div>
 <div class="container">
                <div class="row">

<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">

<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br />

<p>Website</p> <input type="text" name="website">

<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />

<p>Type</p>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
</div>
</div>

<?php

require "footer.php";

?>