<div class="col-md-3 sidebar">
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Events/Lectures</h3>
              </div>
              <ul>
			  <?php
				$result = $db->prepare("SELECT * FROM events ORDER BY id DESC Limit 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
                <li class="item event-item clearfix">
				<div class="event-detail">
                    <h4><a href="event-detail.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></h4>
                    <span class="event-dayntime meta-data"><?php echo $row['date']; ?> | <?php echo $row['time']; ?></span> </div>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Facebook Page</h3>
              </div>
              <!--Facebook Page-->
			<iframe src="https://www.facebook.com/" 
			width="300px" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
			    <iframe id="iframe" style="width: 300px; height: 358px; border: 1px solid #ddd;" frameborder="0" scrolling="yes" src="https://www.islamicfinder.org/prayer-widget/2332459/shafi/2/0/19.5/17.5"> </iframe>
			  <iframe id="iframe1" style="width: 300px; height: 114px; border: 1px solid #ddd;" frameborder="0" scrolling="no" src="https://www.islamicfinder.org/prayertimesforlocations"> </iframe>
           
                <h3>Recent News</h3>
              </div>
			  <ul>
			  <?php
				$result = $db->prepare("SELECT * FROM news ORDER BY id DESC Limit 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
               
                  <div class="widget-blog-content"><a href="news_post.php?id=<?php echo $row['id'];?>"><?php echo $row['news_title']; ?></a> <span class="meta-data">
				  <i class="fa fa-calendar"></i> posted on <?php echo $row['date']; ?></span> </div>
                </li>
				<?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>