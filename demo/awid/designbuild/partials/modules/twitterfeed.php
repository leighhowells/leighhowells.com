        <section class="twitterfeed">
            <div class="container">
            <h1>Twitter feed module - following</h1>

            <button class="btn btn-default pull-right"><a href="#" class="iconfont icon_twitter">t</a> Follow</button>
            <h3>Latest Tweets</h3>
            <br/>



          <?php for($n=1; $n<=10; $n++): ?>

                <div class="row">

                    <div class="col-xs-3 col-sm-2">
                        <img class="img-thumbnail" src="images/twittericon.jpg">
                        <div class="caption">
                         </div>
                    </div>

                    <div class="col-xs-9 col-sm-10">

                        <p class="pull-right">12 April</p>
                        <h4 style="margin-top: 0;"><strong>User name</strong>&nbsp;&nbsp;&nbsp;<small>@twittername</small></h4> 

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">@Maurislacinia</a> mi odio, eu 
                           convallis est bibendum condimentum. <a href="#">http://bit.ly/wioere</a> </p>
                        <p><small><span class="glyphicon glyphicon-refresh"></span>&nbsp;Retweeted by user name</small></p>

                    </div>

                </div>
                <hr style="margin:0 0 10px 0; padding: 10px 0;"/>

             <?php endfor; ?>

            </div>

        </section>




     <section class="twitterfeed">
            <div class="container">
            <h1>Twitter feed module - single account following</h1>


            <div class="row">
                <div class="col-xs-3 col-sm-2">
                    <img class="img-thumbnail" src="images/twittericon.jpg">
                </div>      

                 <div class="col-xs-9 col-sm-10">
                    <button class="btn btn-default pull-right"><a href="#" class="iconfont icon_twitter">t</a> Follow</button>

                    <h4 style="margin-top: 0;"><strong>User name</strong><br/><small>@twittername</small></h4> 

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">@Maurislacinia</a> mi odio, eu 
                       convallis est bibendum condimentum. <a href="#">http://bit.ly/wioere</a> </p>
                    <p><small><span class="glyphicon glyphicon-refresh"></span>&nbsp;Retweeted by user name</small></p>

                 </div>
            </div>




            <h3>Latest Tweets</h3>
            <br/>


          <?php for($n=1; $n<=10; $n++): ?>

                

                        <p class="pull-right">12 April</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">@Maurislacinia</a> mi odio, eu 
                           convallis est bibendum condimentum. <a href="#">http://bit.ly/wioere</a> </p>
                        <p><small><span class="glyphicon glyphicon-refresh"></span>&nbsp;Retweeted by user name</small></p>

                  
                <hr style="margin:0 0 10px 0; padding: 10px 0;"/>

             <?php endfor; ?>

            </div>

        </section>

