<form id="contact-form" method="post" action="/business/sendContactForm.php" role="form">
                  <div class="messages">
                  </div>
                        <div class="controls">
                      
                              <div class="form-group">
                                  <label for="form_name">First name *</label>
                                  <br><input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                              <div class="form-group">
                                  <label for="form_lastname">Last name *</label>
                                 <br> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="" required="required" data-error="Lastname is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                        
                      
                              <div class="form-group">
                                  <label for="form_email">Email *</label>
                                <br>  <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                          
                              <div class="form-group">
                                  <label for="form_phone">Phone</label>
                                <br>  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                                    <br>
                      
                              <div class="form-group">
                                  <label for="form_message">Your message *</label>
                                  <br>
                                  <textarea id="form_message" rows="4" name="message" class="form-control" placeholder="" rows="1" required="required" data-error="Please,leave us a message."></textarea>
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                          
                              <input type="submit" class="sendbutton btn btn-success btn-send" value="Send message" style>
                          
                      
                      
                              <p><strong>*</strong> These fields are required.</p>
                          
                      </div>
                  </div>
              </form>
