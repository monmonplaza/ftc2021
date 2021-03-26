<?php
/*

 Template Name: Sponsor Child
*/
?>
<?php get_header(); ?>



<section class="banner">
    <div class="container">
    <div class="banner-content">
        <h1>
        Make a <span class="text-bold">difference</span> in<br />
        the lives of<span class="text-bold"> street<br />children</span>
        </h1>

        <a href="single-sponsor-child-process.html" class="btn bg-primary">
        Sponsor Now</a
        >
    </div>
    </div>
</section>

<section class="sponsor-child-process">
<div class="container">
    <form action="">
    <div class="row">
        <div class="col-md-6">
        <div class="childlist-wrapper">
            <h1>My Sponsorship</h1>
            <div class="childlist-item">
            <div class="childlist-item-img">
                <img id="sponsor-img"
                src=""
                alt="child here"
                />
                <a href="#" class="btn bg-disable">Remove</a>
            </div>

            <div class="childlist-item-info">

                <h3 id="cart-name">Andrea</h3>
                <div class="form-group">
                <label>Select Donation Amount</label>
                <input type="radio" name="sponsorAmt" value="5" />
                <span> 5</span> Dollars<br />
                <input type="radio" name="sponsorAmt" value="10" /><span
                >10</span
                >
                Dollars<br />
                <input type="radio" name="sponsorAmt" value="20" /><span
                >20</span
                >
                Dollars<br />
            
                <input
                type="radio"
                name="sponsorAmt"
                value="all"
                />Remaining ($10.00)<br />
            </div>
            <div class="form-group">
                <label>Select donation Frequency</label>
                <select name="" id="">
                <option value="">---</option>
                <option value="">One Time</option>
                <option value="">Monthly</option>
                </select>
            </div>
                
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="sponsor-summary">
            <div class="sponsor-summary-title">
            <h2 >Summary</h2>
            <a href="#" class="btn bg-secondary">Sponsor Another Child</a>
            </div>
            <form action="" id="idFormSponsorStripe" name="nameFormStripe">

            <ul class="sponsor-summary-header">
            <li>Name</li>
            <li>Frequency</li>
            <li>Amount</li>
            </ul>

            <div class="sponsor-summary-item-box">
            <ul class="sponsor-summary-item">
                <li><input type="text" class="width-full" disabled value="Paolo"></li>
                <li><input type="text" class="width-full" disabled value="Monthy"></li>
                <li><input type="text" class="width-full" disabled value="$20.00">  </li>
            </ul>

            
            </div>

            <ul class="sponsor-summary-total">
            <li>Grand Total</li>
            <li>$213.12</li>
            </ul>
        </div>


        <div class="select-sponsor-payment">

            <h2 class="text-center">Select your Payment Method</h2>

            <ul>
                <li><a class="btn bg-disable select-payment-btn" id="sponsor-cc"><i class="fas fa-credit-card"></i> Credit Card</a></li>
                <li>or</li>
                <li><a class="btn bg-disable select-payment-btn" id="sponsor-paypal"><i class="fab fa-paypal"></i> Paypal</a></li>
            </ul>

        </div>
        
        
        <!-- Login -->
    

        <div class="form-group" id="creditCardSection">
            <label for="">Credit Card Info</label>
            <div id="card-element" class="form-control">
                <!-- a Stripe Element will be inserted here. -->
            </div>
            <div id="card-errors" role="alert"></div>
            <button class="btn bg-primary width-full">Process Sponsorship</button>

            </div>
        </form>
        </div>
    </div>
    </form>
</div>
</section>

<?php get_footer();?>