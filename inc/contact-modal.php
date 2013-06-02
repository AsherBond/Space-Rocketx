<!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="contact-us" data-toggle="modal"></a>
             
            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Lets make something awesome together</h3>
            </div>
            <div class="modal-body">
       
            <?php gravity_form('Work with us', false, false, false, '', false); ?>
            </div>
            <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
            </div><!-- End Modal -->