@extends('layout')

@section('content')
    <form action="{{ route('products.web-application.estimate') }}" method="POST">
        <input type="hidden" name="_token" value="{{ $_token }}"/>
        <section id="intro" class="section arrow-bottom code-arrow-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 headline">
                        <h2>A <span class="blue">custom</span> web application at a <span class="blue">fixed price</span>!</h2>
                        <p>We have developed an algorithm allowing us to fairly and reliably calculate a fixed price for your web application.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-md-6">
                        <img src="/img/box.png" class="img-responsive code-product-thumb" alt="" title="">
                    </div>
                    <div class="col-md-6">
                        <div class="margintop">
                            <h2>Web Application</h2>
                            <h2><span class="blue">$1000</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <strong>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</strong>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                            <ul class="green-arrow"><!--Green arrow list -->
                                <li>Many addon features</li>
                                <li>Fully responsive &amp; adaptive</li>
                                <li>SEO optimized</li>
                                <li>Attractive with a modern touch</li>
                                <li>Full Support</li>
                            </ul>
                            <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-md-12 headline bg-grey arrow-bottom code-action-required">
                        <h2>Action Required</h2>
                        <p>We need you to provide some details about your web application to give you the best possible price.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p><strong>What is your goal?</strong> Do you want to test an idea, or go live with MVP or you have already tested the idea and want to go live with a fully-featured product? Depending on your goal, please select the type of the web application you want us to build.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label for="goal">What's your goal?</label>
                            <select name="goal" class="form-control" id="goal">
                                <option value="prototype">I need a prototype only</option>
                                <option selected value="mvp">I want to go live with an MVP for now</option>
                                <option value="full">I want to go live with a fully-featured web application!</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="separator60 code-separator45"><!-- Separator -->
                <div class="row">
                    <div class="col-md-5">
                        <p><strong>Do you have a complete specification</strong> that will help us better and faster understand you needs?</p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label for="specification">Do you have a complete specification?</label>
                            <div class="radio">
                                <label><input checked value="1" type="radio" name="specification[]">Yes</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="0" name="specification[]">No</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="separator60 code-separator45"><!-- Separator -->

                <div class="row">
                    <div class="col-md-5">
                        <p><strong>A beautiful and unique web design</strong> is crucial for web applications built for public.
                            If you plan to use your web application within an organization
                            then the best bet would be to go with some of standard templates.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label for="design">Do you want an unique design for your web application?</label>
                            <select name="design" class="form-control" id="design">
                                <option value="provided">Yes, I will provide designs to you</option>
                                <option value="wanted">Yes, I expect that you will do the design as well</option>
                                <option selected value="any">Not important, do whatever is faster and cheaper!</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr class="separator60 code-separator45"><!-- Separator -->

                <div class="row">
                    <div class="col-md-5">
                        <p><strong>Think about the most notable keywords</strong> in your application.
                            This will help us to determine the size of your web application.
                            For example, if I did an e-commerce website I would specify the following keywords:
                        </p>
                        <ul class="code-ul-example">
                            <li>- Customer</li>
                            <li>- Product</li>
                            <li>- Order</li>
                            <li>- Shopping Cart</li>
                            <li>- Invoice</li>
                            <li>- Report</li>
                            <li>- Subscriber</li>
                            <li>- etc.</li>
                        </ul>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label for="module">Provide the most notable keywords describing your web application below.</label> (Please enter
                            each keyword in a new line)
                            <textarea name="module" id="module"  class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-12 headline bg-grey arrow-bottom code-action-required">
                        <h2>Almost Done!</h2>
                        <br>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-5">
                        <p><strong>Do you plan to integrate 3rd party services in your application?</strong> It could be your another project that you want to connect with,
                            or the mailing service such as Mailgun. Here are several examples of what it could be:</p>
                        <ul class="code-ul-example">
                            <li>- Mailgun</li>
                            <li>- MailChimp</li>
                            <li>- Shopify</li>
                            <li>- My another project based on Drupal</li>
                            <li>- etc.</li>
                        </ul>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label for="integration">Provide all the integrations that you plan to use in your web application.</label> (Please enter
                            each integration in a new line)
                            <textarea name="integration"  id="integration"  class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                </div>

                <hr class="separator60 code-separator45"><!-- Separator -->

                <div class="row">
                    <div class="col-md-5">
                        <p>Web applications based on complex logic usually require more time on development than normal web applications.
                            The reason is that complexity usually implies much more <strong>careful development and testing</strong>.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <label for="algorithm">Will your application be based on a complex algorithm/calculations/formula?</label>
                            <select name="algorithm" class="form-control" id="algorithm">
                                <option value="provided">Yes, I will develop the logic, and you will implement it</option>
                                <option value="wanted">Yes, I expect that you develop and implement the logic</option>
                                <option selected value="no">There's nothing super complex</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="subscribe" class="section bg-blue-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center white-text">
                        <div class="headline code-hl-less-padding">
                            <h2>Great!</h2>
                            <p class="subline code-hl-less-padding">You have provided all the required details to get for you the best possible price!</p>
                        </div>
                        <button type="submit" class="btn btn-transparent code-btn-cta btn-big">SHOW ME THE PRICE!</button>

                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection