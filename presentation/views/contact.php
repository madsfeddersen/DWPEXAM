<form id="contact-form" method="post" action="/business/sendContactForm.php" role="form">
                  <div class="messages">
                  </div>
                        <div class="controls">
                      
                              <div class="form-group">
                                  <label for="form_name">First name *</label>
                                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                              <div class="form-group">
                                  <label for="form_lastname">Last name *</label>
                                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                        </div>
                      
                              <div class="form-group">
                                  <label for="form_email">Email *</label>
                                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                          
                              <div class="form-group">
                                  <label for="form_phone">Phone</label>
                                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                      
                      
                              <div class="form-group">
                                  <label for="form_message">Message *</label>
                                  <textarea id="form_message" name="message" class="form-control" placeholder="Your message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                  <div class="help-block with-errors"></div>
                              </div>
                          
                          
                              <input type="submit" class="sendbutton btn btn-success btn-send" value="Send message" style>
                          
                      
                      
                              <p><strong>*</strong> These fields are required.</p>
                          
                      </div>
                  </div>
              </form>
