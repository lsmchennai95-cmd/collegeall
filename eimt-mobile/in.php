<!DOCTYPE html>
<html>
<head>
  <title>Payment Integration</title>
  <style>
    .payment-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      font-family: Arial, sans-serif;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      box-sizing: border-box;
    }
    .pay-btn {
      width: 100%;
      padding: 12px;
      background-color: #3399cc;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }
    .pay-btn:disabled {
      opacity: 0.7;
      cursor: not-allowed;
    }
  </style>
</head>
<body>

<div class="payment-container">
  <h2>Make Payment</h2>
  <div class="form-group">
    <label for="amount">Amount (USD):</label>
    <input type="number" id="amount" value="100" min="1" />
  </div>
  <button class="pay-btn" id="payBtn">Pay $100</button>
</div>

<script>
  // Load Razorpay script dynamically
  function loadRazorpayScript() {
    return new Promise((resolve) => {
      const script = document.createElement('script');
      script.src = 'https://checkout.razorpay.com/v1/checkout.js';
      script.onload = () => resolve(true);
      script.onerror = () => resolve(false);
      document.body.appendChild(script);
    });
  }

  // Verify payment on backend
  async function verifyPayment(paymentResponse) {
    try {
      const verificationData = {
        order_id: paymentResponse.razorpay_order_id,
        payment_id: paymentResponse.razorpay_payment_id,
        signature: paymentResponse.razorpay_signature
      };

      const response = await fetch('https://123admissions.com/api/v1/verify-payment', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(verificationData)
      });

      const result = await response.json();
      if (result.success) {
        alert('Payment verified successfully!');
      } else {
        alert('Payment verification failed!');
      }
    } catch (error) {
      console.error('Verification error:', error);
      alert('Error verifying payment');
    }
  }

  // Handle payment
  async function handlePayment() {
    const amountInput = document.getElementById('amount');
    const payBtn = document.getElementById('payBtn');
    const amount = parseFloat(amountInput.value);

    if (!amount || amount <= 0) {
      alert('Please enter a valid amount');
      return;
    }

    payBtn.disabled = true;
    payBtn.textContent = 'Processing...';

    try {
      // 1. Load Razorpay
      const isScriptLoaded = await loadRazorpayScript();
      if (!isScriptLoaded) {
        alert('Failed to load Razorpay SDK');
        payBtn.disabled = false;
        payBtn.textContent = `Pay $${amount}`;
        return;
      }

      // 2. Create order
      const response = await fetch('https://api.123admissions.com/api/v1/create-order-an', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ amount: amount })
      });

      if (!response.ok) {
        throw new Error('Failed to create order');
      }

      const order = await response.json();
      console.log('Order created:', order);

      // 3. Razorpay options
      const options = {
        key: 'rzp_live_03ijsdCrvMvOp9', // Replace with your actual key
        amount: order.amount,
        currency: order.currency,
        name: '123Admissions',
        description: 'Payment for Services',
        order_id: order.id,
        prefill: {
          name: 'John Doe',
          email: 'john@example.com',
          contact: '9999999999'
        },
        theme: {
          color: '#3399cc'
        },
        handler: function(response) {
          console.log('Payment successful', response);
          alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
          verifyPayment(response);
        },
        modal: {
          ondismiss: function() {
            console.log('Payment modal closed');
            payBtn.disabled = false;
            payBtn.textContent = `Pay $${amount}`;
          }
        }
      };

      const razorpay = new Razorpay(options);
      razorpay.open();

    } catch (error) {
      console.error('Payment error:', error);
      alert('Failed to initiate payment. Please try again.');
      payBtn.disabled = false;
      payBtn.textContent = `Pay $${amount}`;
    }
  }

  // Event listeners
  document.addEventListener('DOMContentLoaded', function() {
    const amountInput = document.getElementById('amount');
    const payBtn = document.getElementById('payBtn');

    amountInput.addEventListener('input', function() {
      const value = parseFloat(this.value);
      if (value > 0) {
        payBtn.textContent = `Pay $${value}`;
      } else {
        payBtn.textContent = 'Enter valid amount';
      }
    });

    payBtn.addEventListener('click', handlePayment);
  });
</script>
</body>
</html>