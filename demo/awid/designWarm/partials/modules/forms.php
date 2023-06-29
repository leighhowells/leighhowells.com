
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Basic Bootstrap Form Elements</legend>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="textinput">Text Input</label>  
                          <div class="col-md-4">
                          <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                          <a href="#" class="help"><span class="glyphicon glyphicon-info-sign"></span></a> 
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="textarea">Text Area</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                          </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="radios">Multiple Radios</label>
                          <div class="col-md-4">
                          <div class="radio">
                            <label for="radios-0">
                              <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                              Option one
                            </label>
                            </div>
                          <div class="radio">
                            <label for="radios-1">
                              <input type="radio" name="radios" id="radios-1" value="2">
                              Option two
                            </label>
                            </div>
                          </div>
                        </div>

                        <!-- Multiple Checkboxes -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="checkboxes">Multiple Checkboxes</label>
                          <div class="col-md-4">
                          <div class="checkbox">
                            <label for="checkboxes-0">
                              <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                              Option one
                            </label>
                            </div>
                          <div class="checkbox">
                            <label for="checkboxes-1">
                              <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                              Option two
                            </label>
                            </div>
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
                          <div class="col-md-4">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                              <option value="1">Option one</option>
                              <option value="2">Option two</option>
                            </select>
                          </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="button1id">Double Button</label>
                          <div class="col-md-8">
                            <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
                            <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
                          </div>
                        </div>

                        </fieldset>
                        </form>



                        <form role="form">
                        <legend>Simple Form - Vertical</legend>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>



                        <form class="form-horizontal" role="form">
                               <legend>Simple Form - Horizontal</legend>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Sign in</button>
                                </div>
                              </div>
                            </form>




                            <form class="form-horizontal">
                              <fieldset>

                              <!-- Form Name -->
                              <legend>More Advanced From Controls</legend>

                              <!-- Prepended checkbox -->
                              <div class="form-group">
                                <label class="col-md-4 control-label" for="prependedcheckbox">Prepended Checkbox</label>
                                <div class="col-md-4">
                                  <div class="input-group">
                                    <span class="input-group-addon">     
                                        <input type="checkbox">     
                                    </span>
                                    <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="placeholder">
                                  </div>
                                  <a href="#" class="help"><span class="glyphicon glyphicon-info-sign"></span></a> 
                                </div>
                              </div>


                              <!-- Multiple Radios (inline) -->
                              <div class="form-group">
                                <label class="col-md-4 control-label" for="radios">Inline Radios</label>
                                <div class="col-md-4"> 
                                  <label class="radio-inline" for="radios-0">
                                    <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                    1
                                  </label> 
                                  <label class="radio-inline" for="radios-1">
                                    <input type="radio" name="radios" id="radios-1" value="2">
                                    2
                                  </label> 
                                  <label class="radio-inline" for="radios-2">
                                    <input type="radio" name="radios" id="radios-2" value="3">
                                    3
                                  </label> 
                                  <label class="radio-inline" for="radios-3">
                                    <input type="radio" name="radios" id="radios-3" value="4">
                                    4
                                  </label>
                                </div>
                              </div>

                              <!-- Multiple Checkboxes (inline) -->
                              <div class="form-group">
                                <label class="col-md-4 control-label" for="checkboxes">Inline Checkboxes</label>
                                <div class="col-md-4">
                                  <label class="checkbox-inline" for="checkboxes-0">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                                    1
                                  </label>
                                  <label class="checkbox-inline" for="checkboxes-1">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                                    2
                                  </label>
                                  <label class="checkbox-inline" for="checkboxes-2">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
                                    3
                                  </label>
                                  <label class="checkbox-inline" for="checkboxes-3">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
                                    4
                                  </label>
                                </div>
                              </div>

                              <!-- Select Multiple -->
                              <div class="form-group">
                                <label class="col-md-4 control-label" for="selectmultiple">Select Multiple</label>
                                <div class="col-md-4">
                                  <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
                                    <option value="1">Option one</option>
                                    <option value="2">Option two</option>
                                    <option value="3">Option three</option>
                                    <option value="4">Option four</option>
                                    <option value="5">Option five</option>
                                  </select>
                                </div>
                              </div>

                              </fieldset>
                              </form>
