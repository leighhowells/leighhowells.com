

        <h3>You searched on:&nbsp;&nbsp; <strong>keyword</strong></h3>
        <p><span class="badge">280</span> Results found</p>

        <br/><br/>
        <?php include "tabs.php"; ?>

          <section class="col-xs-12 col-sm-12 featured">
              <div class="container search">

                <h3 class="nopadding"><a href="#">Featured search result title here</a></h3>
                <p><a href="#">http://www.edinburgh.ac.uk/thisis/url/associatedwith/thesearch/results/page.htm</a></p>

                <p>[last updated: 21.03.14]</p>

                <p>Search result <strong>keyword</strong> text wrapping below, just here.  This is a 2 or three line summary of the record. Search result 
                teaser desription text wrapping below, just here.  Search result <strong>keyword</strong> text wrapping below, just here.  Search 
                desription text wrapping below, just here.  </p>

            </div>
          </section>



          <?php for($n=1; $n<=10; $n++): ?>

            <div class="container search">

                <p class="pull-right small">[last updated: 21.03.14]</p>
                <h3 class="nopadding"><a href="#">Page title here</a></h3>
                <p><a href="#">http://www.edinburgh.ac.uk/thisis/url/associatedwith/thesearch/results/page.htm</a></p>


                <p>Search result <strong>keyword</strong> text wrapping below, just here.  This is a 2 or three line summary of the record. Search result 
                teaser desription text wrapping below, just here.  Search result <strong>keyword</strong> text wrapping below, just here.  Search 
                desription text wrapping below, just here.  </p>

            </div>

           <?php endfor; ?>

            
            <br/><br/>
            
            <button class="btn btn-default pull-right">More results like this <span class="glyphicon glyphicon-chevron-right"></span></a></button></p>

            <?php include "pagination.php"; ?>
