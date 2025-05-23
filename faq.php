<?php 
require_once 'includes/config.php';
require_once 'includes/functions.php';
require_once 'includes/header.php';
?>
<link rel="stylesheet" href="/shoe-store/assets/css/faq.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">Frequently Asked Questions</h1>
            
            <div class="accordion" id="faqAccordion">
                <!-- Order Questions -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2>
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I place an order?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            To place an order, simply browse our products, add items to your cart, and proceed to checkout. 
                            You can checkout as a guest or create an account for faster checkout in the future.
                        </div>
                    </div>
                </div>
                
                <!-- Shipping Questions -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are your shipping options?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body">
                            We offer several shipping options including standard (3-5 business days) and express (1-2 business days). 
                            For more details, please visit our <a href="/shipping.php">Shipping Information</a> page.
                        </div>
                    </div>
                </div>
                
                <!-- Returns Questions -->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is your return policy?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body">
                            We accept returns within 30 days of purchase. Items must be unworn, in their original packaging, 
                            and with all tags attached. Please see our <a href="/shipping.php#returns">Returns Section</a> for more details.
                        </div>
                    </div>
                </div>
                
                <!-- Size Questions -->
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How do I know what size to order?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                        <div class="card-body">
                            We provide detailed size charts for all our products. You can find our general 
                            <a href="/size-guide.php">Size Guide</a> or check the specific size chart available on each product page.
                        </div>
                    </div>
                </div>
                
                <!-- Payment Questions -->
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What payment methods do you accept?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                        <div class="card-body">
                            We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and Apple Pay. 
                            All payments are processed securely through our encrypted payment gateway.
                        </div>
                    </div>
                </div>
                
                <!-- Account Questions -->
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2>
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How do I reset my password?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                        <div class="card-body">
                            You can reset your password by visiting our <a href="/auth/forgot_password.php">Password Reset</a> page. 
                            Enter your email address and we'll send you instructions to create a new password.
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="h4">Still have questions?</h3>
                <p>
                    If you can't find the answer to your question here, please don't hesitate to 
                    <a href="/contact.php">contact our customer service team</a>. We're happy to help!
                </p>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
