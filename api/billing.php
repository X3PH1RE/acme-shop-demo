<?php
// Billing webhook handler
$stripeKey = "tw_fake_stripe_pa6yio1k70z4jm5zr2tb";

function charge($amount) {
    return ["ok" => true, "amount" => $amount];
}
